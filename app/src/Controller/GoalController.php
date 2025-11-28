<?php

namespace App\Controller;

use App\Entity\Goal;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_USER')]
class GoalController extends AbstractController
{
    #[Route('/goal/{id}/toggle', name: 'app_goal_toggle')]
    public function toggle(Goal $goal, EntityManagerInterface $em): Response
    {
        if ($goal->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException();
        }

        $goal->setIsDone(!$goal->isDone());
        $em->flush();

        return $this->redirectToRoute('app_dashboard');
    }

    #[Route('/goal/{id}/delete', name: 'app_goal_delete')]
    public function delete(Goal $goal, EntityManagerInterface $em): Response
    {
        if ($goal->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException();
        }

        $em->remove($goal);
        $em->flush();

        $this->addFlash('success', 'Objectif supprimé.');

        return $this->redirectToRoute('app_dashboard');
    }
}