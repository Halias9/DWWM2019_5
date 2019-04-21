<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Projet Gwada Bat</title>
    
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
   <div class="pageWrap">
    <div class="contentWrap">
   
    

  <div class="menu">
    <?php include "menu.php" ?>
  </div>

<form>
   NOM <input type="text" for="name">
   <br> <br>
  Quantité <select name="Quantité" size="1">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
  <option>8</option>
  <option>9</option>
  <option>10</option>
  </select>

Unité <select name="unité" size="1">
    <option>Kg</option>
    <option>m³</option>
    <option>L</option>
</select>
</form>
<?php include "footer.php" ?>


