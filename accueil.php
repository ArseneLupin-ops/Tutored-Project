<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Carnet de Santé Numérique</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<div class="container">

    <div class="card">

        <h1>Carnet de Santé Numérique</h1>

        <p class="intro">
           Cette application a été conçue pour permettre la gestion centralisée et sécurisée des informations médicales des patients. Elle offre un espace numérique permettant de regrouper l’historique des consultations, les prescriptions, ainsi que les données de suivi médical.
Elle facilite également le travail des professionnels de santé en leur donnant un accès rapide et structuré aux dossiers des patients, afin d’améliorer la qualité du suivi, la coordination des soins et la prise de décision médicale.
        </p>

        <div class="grid">

            <!-- Patient -->
            <div class="box">
                <div class="box-header patient-header">
                    <h2>Patient</h2>
                </div>

                <div class="box-content">
                    <p>
                        Accédez à votre dossier médical, vos consultations et vos ordonnances.
                    </p>

                    <a href="login_patient.php" class="btn patient">
                        Accéder
                    </a>
                </div>
            </div>

            <!-- Médecin -->
            <div class="box">
                <div class="box-header medecin-header">
                    <h2>Médecin</h2>
                </div>

                <div class="box-content">
                    <p>
                        Gérez les patients, consultations et prescriptions médicales.
                    </p>

                    <a href="login_medecin.php" class="btn medecin">
                        Accéder
                    </a>
                </div>
            </div>

        </div>

    </div>

</div>

</body>
</html>