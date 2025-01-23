<?php
/* Template Name: Formulaire de Commande */
get_header(); // Inclut le header de votre thème
?>

<!-- Début du formulaire -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Commande</title>
    <style>
        /* CSS inclus directement */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f9;
        }
        form {
            width: 80%;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .section {
            margin-bottom: 30px;
        }
        .section h3 {
            margin-bottom: 10px;
            color: #555;
        }
        .flex-row {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .flex-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .flex-item img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-bottom: 5px;
            border-radius: 10px;
        }
        input[type="text"], input[type="email"] {
            width: 200px;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }
        button[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h2>Formulaire de commande</h2>

        <!-- Section Votre Commande -->
        <div class="section">
            <h3>Votre Commande</h3>
            <div class="flex-row">
                <div class="flex-item">
                    <img src="image1.jpg" alt="Produit 1">
                    <label>Produit 1</label>
                    <input type="text" name="produit1" placeholder="Quantité">
                </div>
                <div class="flex-item">
                    <img src="image2.jpg" alt="Produit 2">
                    <label>Produit 2</label>
                    <input type="text" name="produit2" placeholder="Quantité">
                </div>
                <div class="flex-item">
                    <img src="image3.jpg" alt="Produit 3">
                    <label>Produit 3</label>
                    <input type="text" name="produit3" placeholder="Quantité">
                </div>
                <div class="flex-item">
                    <img src="image4.jpg" alt="Produit 4">
                    <label>Produit 4</label>
                    <input type="text" name="produit4" placeholder="Quantité">
                </div>
            </div>
        </div>

        <!-- Section Vos Informations -->
        <div class="section">
            <h3>Vos Informations</h3>
            <div class="flex-row">
                <input type="text" name="nom" placeholder="Nom">
                <input type="text" name="prenom" placeholder="Prénom">
                <input type="email" name="email" placeholder="E-mail">
            </div>
        </div>

        <!-- Section Livraison -->
        <div class="section">
            <h3>Livraison</h3>
            <div class="flex-row">
                <input type="text" name="adresse" placeholder="Adresse de livraison">
                <input type="text" name="code_postal" placeholder="Code Postal">
                <input type="text" name="ville" placeholder="Ville">
            </div>
        </div>

        <!-- Bouton Submit -->
        <button type="submit">Commander</button>
    </form>
</body>
</html>

<?php
// Traitement PHP
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $produit1 = htmlspecialchars($_POST['produit1']);
    $produit2 = htmlspecialchars($_POST['produit2']);
    $produit3 = htmlspecialchars($_POST['produit3']);
    $produit4 = htmlspecialchars($_POST['produit4']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $code_postal = htmlspecialchars($_POST['code_postal']);
    $ville = htmlspecialchars($_POST['ville']);

    $to = "planty.drinks@gmail.com";
    $subject = "Nouvelle commande";
    $message = "
        <h2>Nouvelle commande</h2>
        <ul>
            <li>Produit 1 : $produit1</li>
            <li>Produit 2 : $produit2</li>
            <li>Produit 3 : $produit3</li>
            <li>Produit 4 : $produit4</li>
        </ul>
        <p>Nom : $nom</p>
        <p>Prénom : $prenom</p>
        <p>Email : $email</p>
        <p>Adresse : $adresse</p>
        <p>Code Postal : $code_postal</p>
        <p>Ville : $ville</p>
    ";

    $headers = "From: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Commande envoyée avec succès !</p>";
    } else {
        echo "<p>Erreur lors de l'envoi de la commande.</p>";
    }
}
get_footer(); // Inclut le footer de votre thème
?>