<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="style/style.css">

    <style>
        .dash-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
        }

        .dash-card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            width: 350px;
        }

        .dash-title {
            font-size: 20px;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .dash-text {
            font-size: 14px;
            color: #444;
            margin-bottom: 25px;
        }

        .dash-btn {
            display: inline-block;
            padding: 10px 16px;
            border-radius: 8px;
            text-decoration: none;
            color: white;
            background: #333;
            transition: 0.3s;
        }

        .dash-btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 15px rgba(0,0,0,0.15);
        }
    </style>

</head>
<body>

<div class="dash-container">

    <div class="dash-card">

        <div class="dash-title">
            Connexion réussie
        </div>

        <div class="dash-text">
            Bienvenue dans votre espace personnel.  
            Vous pouvez maintenant accéder à vos informations médicales ou gérer vos patients selon votre profil.
        </div>

        <a href="accueil.php" class="dash-btn">
            Déconnexion
        </a>

    </div>

</div>

</body>
</html>