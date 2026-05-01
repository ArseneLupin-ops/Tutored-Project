<?php
session_start();
require "db.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $identifiant = $_POST["identifiant"];
    $password = $_POST["password"];

    $stmt = $pdo->prepare("SELECT * FROM patients WHERE email = ?");
    $stmt->execute([$identifiant]);
    $patient = $stmt->fetch();

    if ($patient && $patient["mot_de_passe"] === $password) {

        $_SESSION["id_patient"] = $patient["id_patient"];
        $_SESSION["nom"] = $patient["nom"];
        $_SESSION["prenom"] = $patient["prenom"];
        $_SESSION["role"] = "patient";

        header("Location: dashboard.php");
        exit;

    } else {
        $error = "Identifiants incorrects";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Patient</title>
    <link rel="stylesheet" href="style/style.css">

    <style>
        .login-box {
            width: 320px;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login-title {
            margin-bottom: 10px;
            font-size: 20px;
            font-weight: bold;
        }

        .error {
            color: red;
            font-size: 12px;
            margin-bottom: 10px;
        }

        .input-group {
            width: 90%;
            margin-bottom: 15px;
            text-align: left;
        }

        .input-group label {
            font-size: 13px;
            color: #333;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #ccc;
            outline: none;
            box-sizing: border-box;
        }

        .input-group input:focus {
            border-color: #28a745;
        }

        .btn-login {
            width: 90%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background: #28a745;
            color: white;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .btn-login:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 15px rgba(0,0,0,0.15);
            opacity: 0.95;
        }

        .back {
            margin-top: 15px;
            display: block;
            font-size: 12px;
            color: #555;
            text-decoration: none;
        }

        .back:hover {
            text-decoration: underline;
        }

        form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>

</head>
<body>

<div class="container">

    <div class="login-box">

        <div class="login-title">
            Espace Patient
        </div>

        <?php if ($error != "") { ?>
            <div class="error"><?php echo $error; ?></div>
        <?php } ?>

        <form method="post">

            <div class="input-group">
                <label>Email ou Matricule</label>
                <input type="text" name="identifiant" required>
            </div>

            <div class="input-group">
                <label>Mot de passe</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit" class="btn-login">
                Se connecter
            </button>

        </form>

        <a href="accueil.php" class="back">
            Retour à l’accueil
        </a>

    </div>

</div>

</body>
</html>