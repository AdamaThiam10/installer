<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
</head>
<body>
  
<?php
include("index.php");
?>
<footer style="background-color: #000; color: #fff; padding: 40px 20px; font-family: Arial, sans-serif;">
  <div style="max-width: 1200px; margin: auto; display: flex; flex-wrap: wrap; justify-content: space-between;">

    <!-- Section à propos -->
    <div style="flex: 1 1 300px; margin-bottom: 20px;">
      <h3>À propos</h3>
      <p>Nous sommes une entreprise engagée à offrir le meilleur service à nos clients. Suivez-nous pour en savoir plus.</p>
    </div>

    <!-- Section liens rapides -->
    <div style="flex: 1 1 200px; margin-bottom: 20px;">
      <h3>Liens rapides</h3>
      <ul style="list-style: none; padding: 0;">
        <li><a href="#accueil" style="color: #ccc; text-decoration: none;">Accueil</a></li>
        <li><a href="#services" style="color: #ccc; text-decoration: none;">Services</a></li>
        <li><a href="#apropos" style="color: #ccc; text-decoration: none;">À propos</a></li>
        <li><a href="#contact" style="color: #ccc; text-decoration: none;">Contact</a></li>
      </ul>
    </div>

    <!-- Section contact -->
    <div style="flex: 1 1 200px; margin-bottom: 20px;">
      <h3>Contact</h3>
      <p>Email : contact@tonsite.com</p>
      <p>Téléphone : +33 1 23 45 67 89</p>
      <p>Adresse : 123 rue Exemple, Paris</p>
    </div>

    <!-- Réseaux sociaux -->
    <div style="flex: 1 1 200px; margin-bottom: 20px;">
      <h3>Suivez-nous</h3>
      <a href="#" style="margin-right: 10px; color: #ccc; text-decoration: none;">Facebook</a>
      <a href="#" style="margin-right: 10px; color: #ccc; text-decoration: none;">Instagram</a>
      <a href="#" style="margin-right: 10px; color: #ccc; text-decoration: none;">Twitter</a>
    </div>

  </div>

  <div style="text-align: center; margin-top: 20px; border-top: 1px solid #333; padding-top: 20px; font-size: 14px;">
    &copy; 2025 TonSiteWeb. Tous droits réservés.
  </div>
</footer>


</body>
</html>