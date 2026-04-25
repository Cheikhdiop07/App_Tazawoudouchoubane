<?php
//connexion php avec le base de donnee
$cn = new PDO('mysql:host=localhost;dbname=tazawoudouchoubane',"root", "");

$elements=$cn->query("select * from choubane")->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        th {
            background: #007bff;
            color: white;
            padding: 12px 15px;
            text-align: left;
            font-weight: bold;
        }
        
        td {
            padding: 10px 15px;
            border-bottom: 1px solid #ddd;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        
        .no-data {
            text-align: center;
            padding: 20px;
            color: #666;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Liste des Membres</h1>
        
        <?php if (count($elements) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Profession</th>
                        <th>Date de naissance</th>
                        <th>Téléphone</th>
                        <th>Adresse</th>
                        <th>CIN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($elements as $key => $value): ?>
                    <tr>
                        <td><?= htmlspecialchars($value["id"]) ?></td>
                        <td><?= htmlspecialchars($value["prenom"]) ?></td>
                        <td><?= htmlspecialchars($value["nom"]) ?></td>
                        <td><?= htmlspecialchars($value["profession"]) ?></td>
                        <td><?= htmlspecialchars($value["datedenaissance"]) ?></td>
                        <td><?= htmlspecialchars($value["telephone"]) ?></td>
                        <td><?= htmlspecialchars($value["adresse"]) ?></td>
                        <td><?= htmlspecialchars($value["cin"]) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="no-data">Aucune donnée disponible dans la table choubane.</div>
        <?php endif; ?>
    </div>
</body>
</html>