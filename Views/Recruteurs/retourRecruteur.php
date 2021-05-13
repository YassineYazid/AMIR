<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Mon profil</title>
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

<?php
include ("../../includes/menuRecruteur.php");
?>

<style>
div.a{
    text-align : center;
}
</style>


<a>
<div class = "a">
<h3>Mes Retours Recruteurs </h3>
 <a><button type="button">Publier </button></a>
 </div>
 </a>



<form>
<fieldset disabled>
  <div class="mb-10" style="width: 40rem;">

  <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Prénom Nom</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Pierre Dupont"> Candidat
    </div>

  </div>
  </fieldset disabled>

</form>


<style>
 
 
 
ul,li{
  list-style:none;
}
ul{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
ul li a{
  text-decoration:none;
  display:block;
 
}
ul li{
  margin:1em;
}


</style>

<div>
  <h3> Compétences Acquises </h3>
  <table class="table table-dark table-hover-10">
  <thead>
    <tr>
      <th scope="col">
	  <input type="checkbox" onClick="toggle(this)" class="custom-control-input" id="customCheck1" name="toto">
	  </th>
      <th scope="col">Prénom</th>
      <th scope="col">Nom</th>
      <th scope="col">Fonction</th>
	  <th scope="col">%compa</th>
      <th scope="col">Mobile</th>
	  <th scope="col">Retenu.e?</th>
	  <th scope="col">Détails</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
	  <input type="checkbox" class="custom-control-input" id="customCheck2" name="toto">	  </th>
      <td>Pierre</td>
      <td>Dupont</td>
      <td>Tech admin</td>
	  <td>60</td>
	  <td>Envoyé RH</td>
	  <td>  <label class="switch">
	<input type="checkbox">
	<span class="slider round"></span>
	</label></td>
	<td><a href="../../Views/Recruteurs/regCompatible.php"> <button type="button" class="btn btn-primary" >détail</button>
</a></td> </tr>
    <tr>
      <th scope="row">
	  <input type="checkbox" class="custom-control-input" id="customCheck2" name="toto">
	  </th>
      <td>Michelle</td>
      <td>Jordane</td>
      <td>Tech. PE</td>
	  <td>65</td>
	  <td>Avis Recruteur</td>
	  <td><label class="switch">
		<input type="checkbox">
		<span class="slider round"></span>
		</label> </td>
    <td>
    <a href="../../Views/Recruteurs/regCompatible.php"> <button type="button" class="btn btn-primary" >détail</button>
</a></td>    </tr>
    <tr>
      <th scope="row">
	  <input type="checkbox" class="custom-control-input" id="customCheck2" name="toto">	  </th>
      <td>Karima</td>
      <td>Abdul-Jabbar</td>
	  <td>Tech RR</td>
	  <td>40</td>
	  <td>Envoyé RH</td>
	  <td> <label class="switch">
		<input type="checkbox">
		<span class="slider round"></span>
		</label></td>
	<td>
  
<a href="../../Views/Recruteurs/regCompatible.php"> <button type="button" class="btn btn-primary" >détail</button>
</a></td>
		</tr>
    <tbody>
<table>

<h3> Compétences a Travailler </h3> 
<table class="table table-dark table-hover-10">
  <thead>
    <tr>
      <th scope="col">
	  <input type="checkbox" onClick="toggle(this)" class="custom-control-input" id="customCheck1" name="toto">
	  </th>
      <th scope="col">Prénom</th>
      <th scope="col">Nom</th>
      <th scope="col">Fonction</th>
	  <th scope="col">%compa</th>
      <th scope="col">Mobile</th>
	  <th scope="col">Retenu.e?</th>
	  <th scope="col">Détails</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
	  <input type="checkbox" class="custom-control-input" id="customCheck2" name="toto">	  </th>
      <td>Pierre</td>
      <td>Dupont</td>
      <td>Tech admin</td>
	  <td>60</td>
	  <td>Envoyé RH</td>
	  <td>  <label class="switch">
	<input type="checkbox">
	<span class="slider round"></span>
	</label></td>
	<td><a href="../../Views/Recruteurs/retourRecruteur.php"> <button type="button" class="btn btn-primary" >détail</button>
</a></td> </tr>
    <tr>
      <th scope="row">
	  <input type="checkbox" class="custom-control-input" id="customCheck2" name="toto">
	  </th>
      <td>Michelle</td>
      <td>Jordane</td>
      <td>Tech. PE</td>
	  <td>65</td>
	  <td>Avis Recruteur</td>
	  <td><label class="switch">
		<input type="checkbox">
		<span class="slider round"></span>
		</label> </td>
    <td>
    <a href="../../Views/Recruteurs/retourRecruteur.php"> <button type="button" class="btn btn-primary" >détail</button>
</a></td>    </tr>
    <tr>
      <th scope="row">
	  <input type="checkbox" class="custom-control-input" id="customCheck2" name="toto">	  </th>
      <td>Karima</td>
      <td>Abdul-Jabbar</td>
	  <td>Tech RR</td>
	  <td>40</td>
	  <td>Envoyé RH</td>
	  <td> <label class="switch">
		<input type="checkbox">
		<span class="slider round"></span>
		</label></td>
	<td>
  
<a href="../../Views/Recruteurs/retourRecruteur.php"> <button type="button" class="btn btn-primary" >détail</button>
</a></td>
		</tr>
    <tbody>
<table>
</div>
