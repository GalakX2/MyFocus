# 🌦️ MyFocus - Dashboard Personnel

MyFocus est un tableau de bord personnel développé avec **Symfony 7** et **Docker**. Il permet de centraliser les informations essentielles de votre journée sur une seule interface moderne et épurée.

## 🚀 Fonctionnalités

- **Météo Locale** : Affichage en temps réel de la météo de votre ville (via OpenWeatherMap).
- **Actualités Ciblées** : Fil d'actualité basé sur vos mots-clés favoris (via NewsAPI).
- **Finance** : Suivi du cours du Bitcoin et du taux de change EUR/USD.
- **Gestion d'Objectifs** : Une "To-Do List" simple pour gérer vos objectifs quotidiens.
- **Profil Utilisateur** : Personnalisation de la ville et des centres d'intérêt.

## 🛠️ Stack Technique

- **Back-end** : PHP 8.3, Symfony 7
- **Base de données** : MySQL 8.0
- **Front-end** : Twig, Bootstrap 5, CSS moderne (Inter font)
- **Infrastructure** : Docker & Docker Compose
- **Services** : HttpClient pour les appels API externes

## 📦 Installation & Démarrage

1. **Cloner le projet**

```bash
   git clone git@github.com:GalakX2/myfocus.git
   cd myfocus
```

2. **Configurer les variables d'environnement**
Copiez le fichier .env en .env.local et ajoutez vos clés API :

```bash
cp .env .env.
```
Modifiez .env.local avec vos clés (OPENWEATHER_API_KEY, NEWS_API_KEY).

3. **Lancer les conteneurs Docker**

```bash
docker compose up -d --build
```

4. **Installer les dépendances et la BDD**

```bash
docker exec -it symfony-php composer install
docker exec -it symfony-php php bin/console doctrine:migrations:migrate
```

5. **Accéder au site**
Rendez-vous sur http://localhost:19080 (ou l'IP de votre serveur).
Projet réalisé dans le cadre d'un MVP technique Symfony/Docker.
