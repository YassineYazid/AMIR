<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>CPAM profil 1</title>
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
	crossorigin="anonymous">

<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
	crossorigin="anonymous"></script>
	<link rel="stylesheet" href="Assets/css/style.css">
<link rel="stylesheet" href="styleProfilCandidat.css">
</head>


<?php
include ("../../includes/menuProfil.php");
?>
</br>

<style>
div.a{
    text-align : center;
}
</style>



<a>
<div class = "a">
<h3> Régles de Compatibilité </h3>
 </div>
 </a>

 
</br>

 <div class="input-group mb-3" style="width: 70rem;">
  <input type="text" class="form-control" aria-label="Text input with dropdown button">
  <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> Sélectionner une annonce</button>
  <ul class="dropdown-menu dropdown-menu-end">
  <li><a class="dropdown-item" href="#">annonce 1</a></li>
    <li><a class="dropdown-item" href="#">annonce 2</a></li>
    <li><a class="dropdown-item" href="#">annonce 3</a></li>
 
  </ul>
</div>


</br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Désignation</th>
      <th scope="col">Pondération</th>
	  <th scope="col">Détail</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Compétence A</th>
      <td>15</td>
      <td><a href="#"> Détail <a></td>
    </tr>
    <tr>
      <th scope="row">Compétence B</th>
      <td>20</td>
      <td><a href="#"> Détail <a></td>
    </tr>
	<tr>
	<th scope="row">Compétence C</th>
      <td>20</td>
      <td><a href="#"> Détail <a></td>
    </tr>
    <tr>
	<th scope="row">Compétence F</th>
      <td>20</td>
      <td><a href="#"> Détail <a></td>
    </tr>
    <tr>
	<th scope="row">Compétence Y</th>
      <td>20</td>
      <td><a href="#"> Détail <a></td>
    </tr>
    
  </tbody>
</table>

</br>
<div class="text-center"> 
          <button type="button" class="btn btn-primary">Valider La Compatibilité </button>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <button type="button" class="btn btn-warning">Annuler</button>
        </div>
      
      </div>
