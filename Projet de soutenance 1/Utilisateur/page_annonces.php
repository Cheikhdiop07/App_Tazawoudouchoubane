<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daara Tazawoudou Choubane</title>
    <style>
        /* Tous les styles existants restent inchangés jusqu'à la section annonces... */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: 
                linear-gradient(100deg, rgba(34, 139, 34, 0.85) 0%, rgba(0, 100, 0, 0.85) 0%),
                url('images/image1.jpg'),
                url('images/image2.jpg');
            background-size: cover, 50% 100%, 50% 100%;
            background-position: center, left center, right center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
            padding: 20px;
            position: relative;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Header Professionnel */
        .header {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            border-radius: 25px;
            padding: 30px 50px;
            margin-bottom: 30px;
            border: 2px solid rgba(0, 100, 0, 0.2);
            box-shadow: 0 15px 50px rgba(0, 100, 0, 0.15);
            text-align: center;
            position: relative;
            animation: slideDown 0.6s ease;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 25px;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #2E8B57 0%, #006400 50%, #228B22 100%);
            background-size: 200% 100%;
            animation: shimmer 3s linear infinite;
        }

        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }

        .logo-container {
            width: 120px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo {
            width: 100%;
            height: 100%;
            object-fit: contain;
            border-radius: 20px;
            padding: 5px;
            background: white;
            box-shadow: 0 4px 15px rgba(0, 100, 0, 0.1);
            transition: transform 0.3s ease;
            border: 2px solid #2E8B57;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        .title-container {
            flex: 1;
        }

        .header h1 {
            color: #006400;
            font-size: 2.5rem;
            font-weight: 700;
            margin: 0 auto;
            letter-spacing: -0.5px;
            text-transform: uppercase;
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .header h1::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #2E8B57, #006400);
            border-radius: 2px;
        }

        /* Section À Propos Professionnelle */
        .about-section {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            border-radius: 25px;
            padding: 50px 60px;
            margin-bottom: 40px;
            border: 2px solid rgba(0, 100, 0, 0.2);
            box-shadow: 0 15px 50px rgba(0, 100, 0, 0.15);
            animation: fadeIn 0.8s ease;
            position: relative;
            overflow: hidden;
        }

        .about-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #2E8B57 0%, #006400 50%, #228B22 100%);
        }

        .about-header {
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }

        .about-section h2 {
            color: #006400;
            font-size: 2.5rem;
            margin-bottom: 15px;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .section-subtitle {
            color: #556B2F;
            font-size: 1.1rem;
            font-weight: 500;
            font-style: italic;
        }

        .divider {
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, #2E8B57, #006400);
            margin: 20px auto;
            border-radius: 2px;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        .about-text {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .about-section p {
            color: #2F4F4F;
            font-size: 1.05rem;
            line-height: 1.8;
            text-align: justify;
            font-weight: 400;
        }

        .about-section p:first-of-type {
            font-size: 1.1rem;
            font-weight: 500;
            color: #006400;
        }

        .mission-box {
            background: linear-gradient(135deg, rgba(46, 139, 87, 0.1) 0%, rgba(0, 100, 0, 0.1) 100%);
            padding: 30px;
            border-radius: 20px;
            border-left: 5px solid #2E8B57;
            box-shadow: 0 4px 15px rgba(0, 100, 0, 0.05);
        }

        .mission-title {
            color: #006400;
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .mission-title::before {
            content: '🌿';
            font-size: 1.5rem;
        }

        .about-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-top: 40px;
        }

        .stat-item {
            background: linear-gradient(135deg, rgba(46, 139, 87, 0.1) 0%, rgba(0, 100, 0, 0.1) 100%);
            padding: 30px 25px;
            border-radius: 20px;
            text-align: center;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .stat-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #2E8B57, #006400);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(46, 139, 87, 0.2);
            border-color: rgba(46, 139, 87, 0.3);
        }

        .stat-item:hover::before {
            transform: scaleX(1);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: #006400;
            display: block;
            margin-bottom: 8px;
        }

        .stat-label {
            color: #556B2F;
            font-size: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* ===== NOUVELLE SECTION DES ANNONCES PROFESSIONNELLE ===== */
        .annonces-section {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            border-radius: 25px;
            padding: 40px 50px;
            margin-bottom: 40px;
            border: 2px solid rgba(0, 100, 0, 0.2);
            box-shadow: 0 15px 50px rgba(0, 100, 0, 0.15);
            animation: fadeIn 0.8s ease;
            position: relative;
            overflow: hidden;
        }

        .annonces-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #2E8B57 0%, #006400 50%, #228B22 100%);
        }

        .annonces-header {
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }

        .annonces-section h2 {
            color: #006400;
            font-size: 2.5rem;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .annonces-subtitle {
            color: #556B2F;
            font-size: 1.1rem;
            font-weight: 500;
            font-style: italic;
        }

        /* Grid Masonry améliorée */
        .annonces-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            animation: fadeIn 0.8s ease;
        }

        /* Annonce Card Professionnelle */
        .annonce-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 100, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            cursor: pointer;
            animation: scaleIn 0.5s ease;
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(46, 139, 87, 0.1);
            position: relative;
            height: 100%;
        }

        .annonce-card.featured {
            grid-column: span 2;
            flex-direction: row;
        }

        .annonce-card.featured .annonce-image {
            flex: 0 0 45%;
            height: auto;
        }

        .annonce-card.featured .annonce-content {
            flex: 1;
        }

        .annonce-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 20px 50px rgba(0, 100, 0, 0.2);
            border-color: rgba(46, 139, 87, 0.3);
        }

        .annonce-image-container {
            position: relative;
            overflow: hidden;
            height: 280px;
        }

        .annonce-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.215, 0.610, 0.355, 1);
        }

        .annonce-card:hover .annonce-image {
            transform: scale(1.1);
        }

        .image-overlay {
            position: absolute;
            top: 20px;
            right: 20px;
            background: linear-gradient(135deg, #2E8B57 0%, #006400 100%);
            backdrop-filter: blur(10px);
            color: white;
            padding: 8px 18px;
            border-radius: 12px;
            font-size: 0.9rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 15px rgba(0, 100, 0, 0.3);
            z-index: 2;
        }

        .annonce-content {
            padding: 25px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .annonce-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .annonce-title {
            font-size: 1.5rem;
            color: #006400;
            font-weight: 700;
            margin: 0;
            line-height: 1.4;
            flex: 1;
        }

        .annonce-date {
            background: linear-gradient(135deg, #2E8B57 0%, #006400 100%);
            color: white;
            padding: 8px 16px;
            border-radius: 10px;
            font-size: 0.9rem;
            font-weight: 600;
            white-space: nowrap;
            margin-left: 15px;
            box-shadow: 0 4px 12px rgba(46, 139, 87, 0.3);
        }

        .annonce-description {
            color: #2F4F4F;
            line-height: 1.7;
            margin-bottom: 20px;
            flex: 1;
            font-size: 1.05rem;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .annonce-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            border-top: 2px solid rgba(46, 139, 87, 0.1);
            margin-top: auto;
        }

        .annonce-author {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .author-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #2E8B57 0%, #006400 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1rem;
            box-shadow: 0 4px 12px rgba(46, 139, 87, 0.3);
        }

        .author-info {
            display: flex;
            flex-direction: column;
        }

        .author-name {
            color: #006400;
            font-weight: 600;
            font-size: 1rem;
        }

        .author-role {
            color: #556B2F;
            font-size: 0.85rem;
            opacity: 0.8;
        }

        .read-more-btn {
            background: linear-gradient(135deg, #2E8B57 0%, #006400 100%);
            color: white;
            border: none;
            padding: 10px 24px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 15px rgba(46, 139, 87, 0.3);
        }

        .read-more-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(46, 139, 87, 0.4);
            background: linear-gradient(135deg, #006400 0%, #2E8B57 100%);
        }

        /* Badge de catégorie amélioré */
        .category-badge {
            display: inline-flex;
            align-items: center;
            background: rgba(46, 139, 87, 0.15);
            color: #006400;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 15px;
            gap: 6px;
            border: 1px solid rgba(46, 139, 87, 0.2);
        }

        /* Style pour annonces importantes */
        .annonce-card.important {
            border: 2px solid rgba(255, 193, 7, 0.3);
            box-shadow: 0 8px 30px rgba(255, 193, 7, 0.15);
        }

        .annonce-card.important .image-overlay {
            background: linear-gradient(135deg, #ffc107 0%, #e0a800 100%);
            color: #212529;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 80px 40px;
            background: linear-gradient(135deg, rgba(46, 139, 87, 0.1) 0%, rgba(0, 100, 0, 0.1) 100%);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            color: #006400;
            border: 2px solid rgba(0, 100, 0, 0.2);
            grid-column: 1 / -1;
        }

        .empty-state h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #006400;
        }

        .empty-state p {
            font-size: 1.2rem;
            color: #556B2F;
            opacity: 0.9;
        }

        /* Section Crédits */
        .credits-section {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            border-radius: 25px;
            padding: 40px 50px;
            margin-top: 40px;
            border: 2px solid rgba(0, 100, 0, 0.2);
            box-shadow: 0 15px 50px rgba(0, 100, 0, 0.15);
            animation: fadeIn 0.8s ease;
            position: relative;
            overflow: hidden;
        }

        .credits-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #2E8B57 0%, #006400 50%, #228B22 100%);
        }

        .credits-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .credits-section h2 {
            color: #006400;
            font-size: 2rem;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .credits-subtitle {
            color: #556B2F;
            font-size: 1.1rem;
            font-weight: 500;
            font-style: italic;
        }

        .credits-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .credit-card {
            background: linear-gradient(135deg, rgba(46, 139, 87, 0.1) 0%, rgba(0, 100, 0, 0.1) 100%);
            padding: 25px;
            border-radius: 15px;
            border-left: 4px solid #2E8B57;
            transition: all 0.3s ease;
        }

        .credit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 100, 0, 0.15);
        }

        .credit-title {
            color: #006400;
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .credit-title i {
            font-size: 1.5rem;
        }

        .credit-info {
            color: #2F4F4F;
            line-height: 1.6;
            margin-bottom: 8px;
        }

        .credit-info strong {
            color: #006400;
            font-weight: 600;
        }

        /* Animations */
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .annonces-grid {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            }
            
            .annonce-card.featured {
                grid-column: span 1;
                flex-direction: column;
            }
            
            .annonce-card.featured .annonce-image {
                flex: 0 0 300px;
            }
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                padding: 25px 20px;
                gap: 20px;
            }

            .logo-container {
                width: 100px;
                height: 100px;
            }

            .header h1 {
                font-size: 1.8rem;
                padding-bottom: 8px;
            }

            .annonces-section {
                padding: 30px 25px;
            }

            .annonces-section h2 {
                font-size: 2rem;
            }

            .annonces-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .annonce-title {
                font-size: 1.3rem;
            }

            .annonce-card.featured .annonce-image {
                flex: 0 0 250px;
            }

            .about-section {
                padding: 40px 25px;
            }

            .about-section h2 {
                font-size: 1.8rem;
            }

            .about-content {
                grid-template-columns: 1fr;
            }

            .about-stats {
                grid-template-columns: 1fr;
            }

            .stat-number {
                font-size: 2.5rem;
            }

            .credits-section {
                padding: 30px 25px;
            }

            .credits-section h2 {
                font-size: 1.6rem;
            }

            .credits-content {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo-container">
                <img src="images/photo_2026-02-09_17-30-52.jpg" alt="Logo Daara Tazawoudou Choubane" class="logo">
            </div>
            <div class="title-container">
                <h1>Daara Tazawoudou Choubane Touba Maristes</h1>
            </div>
        </div>

        <div class="about-section">
            <div class="about-header">
                <h2>À Propos du Daara Tazawoudou Choubane</h2>
                <p class="section-subtitle">Excellence · Tradition · Innovation</p>
                <div class="divider"></div>
            </div>

            <div class="about-content">
                <div class="about-text">
                    <p>
                        Bienvenue sur la plateforme officielle du Daara Tazawoudou Choubane Touba Maristes. 
                        Nous sommes une institution dédiée à l'enseignement islamique et à la formation spirituelle, 
                        perpétuant les nobles traditions de Cheikh Ahmadou Bamba.
                    </p>
                    <p>
                        Depuis notre création, nous œuvrons pour offrir un enseignement de qualité qui allie 
                        les sciences islamiques traditionnelles et les valeurs du mouridisme. Notre daara accueille 
                        des talibés de tous horizons dans un esprit de fraternité et d'excellence.
                    </p>
                </div>

                <div class="mission-box">
                    <div class="mission-title">Notre Mission</div>
                    <p>
                        Former des talibés accomplis dans la connaissance du Coran, des hadiths et des enseignements 
                        du Cheikh. Nous aspirons à développer des personnalités équilibrées, ancrées dans la foi et 
                        capables de contribuer positivement à la société tout en préservant les valeurs spirituelles 
                        qui nous sont chères.
                    </p>
                </div>
            </div>

            <div class="about-stats">
                <div class="stat-item">
                    <span class="stat-number">120+</span>
                    <span class="stat-label">Talibés Actifs</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">500+</span>
                    <span class="stat-label">Événements Organisés pendants 10 ans</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">7+</span>
                    <span class="stat-label">Programmes en Cours</span>
                </div>
            </div>
        </div>

        <!-- Nouvelle Section Annonces Professionnelle -->
        <div class="annonces-section">
            <div class="annonces-header">
                <h2>Actualités & Annonces</h2>
                <p class="annonces-subtitle">Restez informé des dernières nouvelles et événements du Daara</p>
                <div class="divider"></div>
            </div>

            <!-- Annonces Grid -->
            <div class="annonces-grid" id="annoncesGrid">
                <!-- Les annonces seront insérées ici dynamiquement -->
            </div>

            <!-- Empty State -->
            <div class="empty-state" id="emptyState" style="display: none;">
                <h2>📭 Aucune annonce pour le moment</h2>
                <p>Revenez plus tard pour découvrir les dernières actualités !</p>
            </div>
        </div>

        <!-- Section Crédits -->
        <div class="credits-section">
            <div class="credits-header">
                <h2>Crédits & Développement</h2>
                <p class="credits-subtitle">Application développée avec passion et dévouement</p>
                <div class="divider"></div>
            </div>

            <div class="credits-content">
                <div class="credit-card">
                    <div class="credit-title">
                        <i class="fas fa-user-tie"></i>
                        Développeur Principal
                    </div>
                    <p class="credit-info"><strong>Nom :</strong> Cheikh Abdoulaye Diop</p>
                    <p class="credit-info"><strong>Âge :</strong> 20 ans</p>
                    <p class="credit-info"><strong>Formation :</strong> Étudiant en Développement Informatique</p>
                    <p class="credit-info"><strong>École :</strong> Omnia School</p>
                    <p class="credit-info"><strong>Téléphone :</strong> 06 27 32 95 23</p>
                    <p class="credit-info"><strong>Adresse :</strong> Sidi Maarouf, Casablanca</p>
                    <p class="credit-info"><strong>Rôle :</strong> Développement Full-Stack de l'application</p>
                </div>

                <div class="credit-card">
                    <div class="credit-title">
                        <i class="fas fa-chalkboard-teacher"></i>
                        Encadrants & Professeurs
                    </div>
                    <p class="credit-info"><strong>Directeur d'École :</strong> Mr. Harik</p>
                    <p class="credit-info">Directeur de Omnia School, a fourni le cadre et les ressources nécessaires au développement du projet.</p>
                    
                    <p class="credit-info" style="margin-top: 15px;"><strong>Mentor Technique :</strong> Mr. Ibrahima</p>
                    <p class="credit-info">A accompagné et guidé le développement technique tout au long du projet, partageant son expertise et son expérience.</p>
                </div>

                <div class="credit-card">
                    <div class="credit-title">
                        <i class="fas fa-info-circle"></i>
                        À Propos du Projet
                    </div>
                    <p class="credit-info"><strong>Nom du Projet :</strong> Plateforme Daara Tazawoudou Choubane</p>
                    <p class="credit-info"><strong>Version :</strong> 1.0.0</p>
                    <p class="credit-info"><strong>Technologies :</strong> HTML5, CSS3, JavaScript, PHP, MySQL</p>
                    <p class="credit-info"><strong>Date de Développement :</strong> 2026</p>
                    <p class="credit-info"><strong>Objectif :</strong> Digitaliser la gestion des annonces et améliorer la communication au sein du Daara</p>
                    <p class="credit-info"><strong>Statut :</strong> En production</p>
                </div>
            </div>
        </div>
    </div>

    <script>
    // Données exemple d'annonces (à remplacer par vos données PHP)
    const annonces = [
        {
            id: 1,
            titre: "Assemblée Générale 2026",
            description: "Nous vous invitons à notre assemblée générale annuelle qui se tiendra le 15 mars 2026. Ordre du jour : bilan de l'année, projets KEUR SERIGNE TOUBA. Votre présence est importante !",
            image: "images/DSC01803.jpg",
            date: "2026-03-15", // Format YYYY-MM-DD pour le tri correct
            displayDate: "15 Mars 2026",
            auteur: "Dieuwrigne Moustapha Gueye",
            categorie: "Événement",
            important: true
        },
        {
            id: 2,
            titre: "ZIAR AUPRES DU KHALIF GENERAL DES MOURIDES",
            description: "Wadial ziar Serigne Mountakha Mbacké di sakku si mouride yeup niou wadial ko bu baax",
            image: "images/photo_2026-02-09_19-14-37.jpg",
            date: "2026-01-04", // Format YYYY-MM-DD pour le tri correct
            displayDate: "4 Janvier 2026",
            auteur: "ADRAME FALL",
            categorie: "Événement",
            important: true
        },
        {
            id: 3,
            titre: "KUREL 1 TAZAWOUDOU CHOUBANE",
            description: "✨Special Album 💿 Grand Magal de Touba 1447/2025.",
            image: "images/photo_2026-02-09_20-05-59.jpg",
            date: "2026-02-16", // Format YYYY-MM-DD pour le tri correct
            displayDate: "16 Février 2026",
            auteur: "CHEIKH IBRAHIMA THIAM",
            categorie: "Actualité"
        },
        {
            id: 4,
            titre: "ALBUM PHOTO HOMME DU GRAND MAGAL DE TOUBA",
            description: "VOICI L'ALBUM DES PHOTOS DU GRAND MAGAL DE TOUBA",
            image: "images/photo_2026-02-09_20-14-15.jpg",
            date: "2026-02-19", // Format YYYY-MM-DD pour le tri correct
            displayDate: "19 Février 2026",
            auteur: "SEYDINA TOURE",
            categorie: "INFORMATIONS"
        },
        {
            id: 5,
            titre: "ALBUM PHOTO FEMME DU GRAND MAGAL DE TOUBA",
            description: "VOICI L'ALBUM DES PHOTOS DU GRAND MAGAL DE TOUBA",
            image: "images/photo_2026-02-09_20-16-19.jpg",
            date: "2026-02-19", // Format YYYY-MM-DD pour le tri correct
            displayDate: "19 Février 2026",
            auteur: "SEYDINA TOURE",
            categorie: "INFORMATIONS"
        },
        {
            id: 6,
            titre: "RAPPEL: QUI EST SERIGNE TOUBA ?",
            description: "Serigne Touba, de son vrai nom Cheikh Ahmadou Bamba Mbacké (1853–1927), est une grande figure spirituelle du Sénégal et le fondateur de la confrérie mouride. Guide religieux, poète et penseur soufi, il est reconnu pour son engagement profond envers l'islam, sa quête de la paix intérieure et son attachement au travail comme forme d'adoration.",
            image: "images/OIP.webp",
            date: "2026-01-09", // Format YYYY-MM-DD pour le tri correct
            displayDate: "9 Janvier 2026",
            auteur: "DIEUWRIGNE CISSE",
            categorie: "RAPPEL",
            important: true
        }
    ];

    // Fonction pour obtenir les initiales
    function getInitials(name) {
        return name.split(' ').map(n => n[0]).join('').toUpperCase();
    }

    // Fonction pour trier les annonces par date (les plus récentes en premier)
    function sortAnnoncesByDate() {
        return annonces.sort((a, b) => {
            // Convertir les dates en objets Date pour la comparaison
            const dateA = new Date(a.date);
            const dateB = new Date(b.date);
            
            // Trier par ordre décroissant (les plus récentes en premier)
            return dateB - dateA;
        });
    }

    // Fonction pour afficher les annonces de manière professionnelle
    function displayAnnonces() {
        const grid = document.getElementById('annoncesGrid');
        const emptyState = document.getElementById('emptyState');

        if (annonces.length === 0) {
            grid.style.display = 'none';
            emptyState.style.display = 'block';
            return;
        }

        grid.style.display = 'grid';
        emptyState.style.display = 'none';
        grid.innerHTML = '';

        // Trier les annonces par date
        const sortedAnnonces = sortAnnoncesByDate();

        sortedAnnonces.forEach((annonce, index) => {
            const card = document.createElement('div');
            card.className = 'annonce-card';
            card.style.animationDelay = `${index * 0.1}s`;
            
            // Marquer les annonces importantes
            if (annonce.important) {
                card.classList.add('important');
            }
            
            // Faire en sorte que la première annonce soit en vedette (la plus récente)
            if (index === 0) {
                card.classList.add('featured');
            }

            // Formater la date pour l'affichage
            const dateObj = new Date(annonce.date);
            const dateFormatted = dateObj.toLocaleDateString('fr-FR', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });

            card.innerHTML = `
                <div class="annonce-image-container">
                    <img src="${annonce.image}" alt="${annonce.titre}" class="annonce-image" onerror="this.src='https://images.unsplash.com/photo-1557804506-669a67965ba0?w=600'">
                    <div class="image-overlay">${annonce.categorie}</div>
                </div>
                <div class="annonce-content">
                    <div class="annonce-header">
                        <h2 class="annonce-title">${annonce.titre}</h2>
                        <div class="annonce-date">📅 ${dateFormatted}</div>
                    </div>
                    <p class="annonce-description">${annonce.description}</p>
                    <div class="annonce-footer">
                        <div class="annonce-author">
                            <div class="author-avatar">${getInitials(annonce.auteur)}</div>
                            <div class="author-info">
                                <span class="author-name">${annonce.auteur}</span>
                                <span class="author-role">${annonce.categorie}</span>
                            </div>
                        </div>
                        <button class="read-more-btn" onclick="viewAnnonce(${annonce.id})">
                            <i class="fas fa-eye"></i> Voir détails
                        </button>
                    </div>
                </div>
            `;
            
            grid.appendChild(card);
        });
    }

    // Fonction pour voir une annonce en détail
    function viewAnnonce(id) {
        const annonce = annonces.find(a => a.id === id);
        if (annonce) {
            const dateObj = new Date(annonce.date);
            const dateFormatted = dateObj.toLocaleDateString('fr-FR', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
            
            const modalContent = `
                <div style="text-align: center; padding: 20px; max-width: 600px;">
                    <h2 style="color: #006400; margin-bottom: 15px;">${annonce.titre}</h2>
                    <div style="margin: 20px 0;">
                        <img src="${annonce.image}" alt="${annonce.titre}" style="max-width: 100%; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1);">
                    </div>
                    <p style="color: #2F4F4F; line-height: 1.6; margin-bottom: 15px;">${annonce.description}</p>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px; padding-top: 20px; border-top: 1px solid rgba(0,100,0,0.1);">
                        <div>
                            <strong style="color: #006400;">Auteur:</strong> ${annonce.auteur}<br>
                            <strong style="color: #006400;">Catégorie:</strong> ${annonce.categorie}<br>
                            <strong style="color: #006400;">Publié le:</strong> ${dateFormatted}
                        </div>
                        <div style="background: linear-gradient(135deg, #2E8B57 0%, #006400 100%); color: white; padding: 8px 16px; border-radius: 8px;">
                            📅 ${dateFormatted}
                        </div>
                    </div>
                </div>
            `;
            
            // Créer une modale professionnelle
            const modal = document.createElement('div');
            modal.style.position = 'fixed';
            modal.style.top = '0';
            modal.style.left = '0';
            modal.style.width = '100%';
            modal.style.height = '100%';
            modal.style.backgroundColor = 'rgba(0,0,0,0.8)';
            modal.style.display = 'flex';
            modal.style.justifyContent = 'center';
            modal.style.alignItems = 'center';
            modal.style.zIndex = '1000';
            modal.style.backdropFilter = 'blur(5px)';
            
            const modalBox = document.createElement('div');
            modalBox.style.backgroundColor = 'white';
            modalBox.style.padding = '30px';
            modalBox.style.borderRadius = '20px';
            modalBox.style.maxWidth = '700px';
            modalBox.style.maxHeight = '90vh';
            modalBox.style.overflowY = 'auto';
            modalBox.style.position = 'relative';
            modalBox.style.boxShadow = '0 20px 60px rgba(0,0,0,0.3)';
            
            modalBox.innerHTML = modalContent + `
                <button onclick="this.parentElement.parentElement.remove()" style="position: absolute; top: 15px; right: 15px; background: #006400; color: white; border: none; width: 40px; height: 40px; border-radius: 50%; font-size: 20px; cursor: pointer; display: flex; align-items: center; justify-content: center;">×</button>
            `;
            
            modal.appendChild(modalBox);
            document.body.appendChild(modal);
            
            // Fermer la modale en cliquant à l'extérieur
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.remove();
                }
            });
        }
    }

    // Fonction pour vérifier et corriger les dates invalides
    function validateDates() {
        annonces.forEach(annonce => {
            const dateObj = new Date(annonce.date);
            if (isNaN(dateObj.getTime())) {
                console.warn(`Date invalide pour l'annonce "${annonce.titre}": ${annonce.date}`);
                // Si la date est invalide, utiliser une date par défaut (aujourd'hui)
                annonce.date = new Date().toISOString().split('T')[0];
            }
        });
    }

    // Charger les annonces au chargement de la page
    document.addEventListener('DOMContentLoaded', () => {
        // Valider les dates avant de les afficher
        validateDates();
        
        // Afficher les annonces
        displayAnnonces();
        
        // Ajouter un effet de chargement initial
        const grid = document.getElementById('annoncesGrid');
        const loadingDiv = document.createElement('div');
        loadingDiv.style.textAlign = 'center';
        loadingDiv.style.padding = '40px';
        loadingDiv.style.color = '#006400';
        loadingDiv.innerHTML = '<div class="spinner"></div><p>Chargement des annonces...</p>';
        
        // Simuler un chargement
        setTimeout(() => {
            displayAnnonces();
        }, 500);
    });

    // Rafraîchir les annonces toutes les 30 secondes
    setInterval(() => {
        // Ici vous pouvez faire un appel AJAX pour récupérer les nouvelles annonces
        // Pour l'instant, on garde les données statiques
    }, 30000);
</script>
</body>
</html>