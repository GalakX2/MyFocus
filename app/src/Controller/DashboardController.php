<?php

namespace App\Controller;

use App\Entity\Goal;
use App\Entity\User;
use App\Form\GoalType;
use App\Form\ProfileType;
use App\Service\FinanceService;
use App\Service\NewsService;
use App\Service\WeatherService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_USER')]
class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(
        Request $request,
        EntityManagerInterface $entityManager,
        WeatherService $weatherService,
        NewsService $newsService,
        FinanceService $financeService
    ): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        $goal = new Goal();
        $goal->setIsDone(false); 
        $goal->setUser($user);   

        $goalForm = $this->createForm(GoalType::class, $goal);
        $goalForm->handleRequest($request);

        if ($goalForm->isSubmitted() && $goalForm->isValid()) {
            $entityManager->persist($goal);
            $entityManager->flush();

            $this->addFlash('success', 'Nouvel objectif ajouté ! 🚀');

            
            return $this->redirectToRoute('app_dashboard');
        }

        
        // Ville (Défaut : Paris)
        $city = $user->getCity() ?: 'Paris';

        // Appel des services
        $weatherData = $weatherService->getWeatherForCity($city);
        $newsData = $newsService->getNewsForKeywords($user->getNewsKeywords());
        $bitcoinPrice = $financeService->getBitcoinPrice();
        $usdRate = $financeService->getEurToUsdRate();

        return $this->render('dashboard/index.html.twig', [
            'user' => $user,
            'city' => $city,
            
            // Données API
            'weather' => $weatherData,
            'news' => $newsData,
            'bitcoinPrice' => $bitcoinPrice,
            'usdRate' => $usdRate,

            // Données Objectifs
            'goals' => $user->getGoals(), 
            'goalForm' => $goalForm->createView(), 
        ]);
    }

    #[Route('/profile', name: 'app_profile')]
    public function profile(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        $form = $this->createForm(ProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Vos préférences ont été mises à jour !');
            return $this->redirectToRoute('app_dashboard');
        }

        return $this->render('dashboard/profile.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}