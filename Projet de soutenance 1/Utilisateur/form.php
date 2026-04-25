<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="form-styles.css">
    <style>
        /* Styles pour le logo uniquement */
        .header {
            position: relative;
            padding-top: 100px; /* Augmenté l'espace pour le logo */
        }
        
        .logo-container {
            position: absolute;
            top: 10px; /* Monté le logo plus haut */
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .logo-image {
            height: 80px; /* Légèrement agrandi */
            width: auto;
            max-width: 280px;
            object-fit: contain;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        
        .logo-subtitle {
            margin-top: 8px;
            font-size: 14px;
            color: #333;
            font-weight: 500;
            text-align: center;
            background: rgba(255, 255, 255, 0.95);
            padding: 5px 15px;
            border-radius: 4px;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- Logo ajouté de manière professionnelle -->
            <div class="logo-container">
                <img src="images/photo_2026-02-09_17-30-52.jpg" alt="Logo DAHIRA TAZAWOUDOU CHOUBANE" class="logo-image">
            </div>
            
            <h1>📋 Formulaire d'inscription</h1>
            <p>Veuillez remplir tous les champs requis</p>
        </div>

        <div id="successMessage" class="success-message">
            ✓ Formulaire soumis avec succès !
        </div>

        <form id="registrationForm" action="basededonne.php" method="post">
            <div class="form-row">
                <div class="form-group">
                    <label for="nom">Nom <span class="required">*</span></label>
                    <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>
                    <span class="icon user-icon"></span>
                    <span class="error-message">Le nom est requis</span>
                </div>

                <div class="form-group">
                    <label for="prenom">Prénom <span class="required">*</span></label>
                    <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>
                    <span class="icon user-icon"></span>
                    <span class="error-message">Le prénom est requis</span>
                </div>
            </div>

            <div class="form-group">
                <label for="profession">Profession <span class="required">*</span></label>
                <input type="text" id="profession" name="profession" placeholder="Ex: Ingénieur, Médecin, Étudiant..." required>
                <span class="icon work-icon"></span>
                <span class="error-message">La profession est requise</span>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="dateNaissance">Date de naissance <span class="required">*</span></label>
                    <input type="date" id="dateNaissance" name="date_de_naissance" required>
                    <span class="icon calendar-icon"></span>
                    <span class="error-message">La date de naissance est requise</span>
                </div>

                <div class="form-group">
                    <label for="telephone">Téléphone <span class="required">*</span></label>
                    <input type="tel" id="telephone" name="telephone" placeholder="0612345678" required>
                    <span class="icon phone-icon"></span>
                    <span class="error-message">Numéro de téléphone invalide (10 chiffres)</span>
                </div>
            </div>

            <div class="form-group">
                <label for="adresse">Adresse <span class="required">*</span></label>
                <input type="text" id="adresse" name="adresse" placeholder="Rue, Ville, Code postal" required>
                <span class="icon home-icon"></span>
                <span class="error-message">L'adresse est requise</span>
            </div>

            <div class="form-group">
                <label for="cin">Numéro de carte d'identité <span class="required">*</span></label>
                <input type="text" id="cin" name="cin" placeholder="Ex: AB123456" pattern="[A-Z]{2}[0-9]{6}" required>
                <span class="icon card-icon"></span>
                <span class="error-message">Format invalide (Ex: AB123456)</span>
            </div>

            <button type="submit" class="submit-btn">
                ✓ Valider et soumettre
            </button>
        </form>
    </div>

    <!-- <script src="form-script.js"></script> -->
</body>
</html>