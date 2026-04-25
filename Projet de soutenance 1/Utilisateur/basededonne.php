g<?php
// Connexion à la base de données
try {
    $cn = new PDO('mysql:host=localhost;dbname=tazawoudouchoubane', "root", "");
    $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Je prépare la requête (CORRECTION : parenthèse fermante manquante)

// Récupération des données (avec validation basique)
$prenom = $_POST['prenom'] ?? '';
$nom = $_POST['nom'] ?? '';
$profession = $_POST['profession'] ?? '';
$datedenaissance = $_POST['date_de_naissance'] ?? '';
$telephone = $_POST['telephone'] ?? '';
$adresse = $_POST['adresse'] ?? '';
$cin = $_POST['cin'] ?? '';

// J'exécute la requête
try {
    $rq = $cn->prepare("INSERT INTO choubane(prenom, nom, profession, datedenaissance, telephone, adresse, cin) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $rq->execute([$prenom, $nom, $profession, $datedenaissance, $telephone, $adresse, $cin]);
    
    echo "Données insérées avec succès!<br>";
    echo "Dalaal ak Jaam";
    
    // Optionnel : Redirection après succès
    header("Location:page_annonces.php");
    // exit();
    
} catch (PDOException $e) {
    echo "Erreur lors de l'insertion : " . $e->getMessage();
}

// Fermer la connexion (optionnel, PDO le fait automatiquement)
// $cn = null;
?>