<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog d'Images</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #000;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .container {
      max-width: 1200px;
      margin: 30px auto;
      padding: 20px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
    }

    .card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: transform 0.2s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-content {
      padding: 15px;
    }

    .card-content h3 {
      margin: 0 0 10px;
      font-size: 1.2em;
    }

    .card-content p {
      font-size: 0.9em;
      color: #555;
    }

    footer {
      background-color: #000;
      color: #fff;
      text-align: center;
      padding: 15px;
      margin-top: 30px;
    }
  </style>
</head>
<body>


<?php
include("index.php");
?>


<!-- slide -->
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slider d'Images</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f4f4f4;
    }

    .slider {
      position: relative;
      max-width: 100%;
      height: 400px;
      margin: auto;
      overflow: hidden;
    }

    .slides {
      display: flex;
      width: 300%;
      height: 100%;
      animation: slide 9s infinite;
    }

    .slides img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    @keyframes slide {
      0% { margin-left: 0; }
      33% { margin-left: 0; }
      36% { margin-left: -100%; }
      66% { margin-left: -100%; }
      69% { margin-left: -200%; }
      99% { margin-left: -200%; }
      100% { margin-left: 0; }
    }
  </style>
</head>
<body>

<div class="slider">
  <div class="slides">
    <img src="https://via.placeholder.com/1200x400/ff7f7f/333333?text=Slide+1" alt="Slide 1">
    <img src="https://via.placeholder.com/1200x400/7f7fff/333333?text=Slide+2" alt="Slide 2">
    <img src="https://via.placeholder.com/1200x400/7fff7f/333333?text=Slide+3" alt="Slide 3">
  </div>
</div>

</body>
</html>


<div class="container">

  <div class="card">
    <img src="https://via.placeholder.com/300x200.png?text=Image+1" alt="Image 1">
    <div class="card-content">
      <h3>Titre de l'image 1</h3>
      <p>Description rapide de l'image numéro 1.</p>
    </div>
  </div>

  <div class="card">
    <img src="https://via.placeholder.com/300x200.png?text=Image+2" alt="Image 2">
    <div class="card-content">
      <h3>Titre de l'image 2</h3>
      <p>Description rapide de l'image numéro 2.</p>
    </div>
  </div>

  <div class="card">
    <img src="https://via.placeholder.com/300x200.png?text=Image+3" alt="Image 3">
    <div class="card-content">
      <h3>Titre de l'image 3</h3>
      <p>Description rapide de l'image numéro 3.</p>
    </div>
  </div>

  <!-- Tu peux ajouter d'autres cartes ici -->

</div>

<?php
include("footer.php");
?>
</body>
</html>
