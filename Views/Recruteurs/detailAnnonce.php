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

<style>
.container {
  width: 100%;
}

.progressbar {
  counter-reset: step;
}
.progressbar li {
  list-style: none;
  display: inline-block;
  width: 30.33%;
  position: relative;
  text-align: center;
  cursor: pointer;
}
.progressbar li:before {
  content: counter(step);
  counter-increment: step;
  width: 30px;
  height: 30px;
  line-height : 30px;
  border: 1px solid #ddd;
  border-radius: 100%;
  display: block;
  text-align: center;
  margin: 0 auto 10px auto;
  background-color: #fff;
}
.progressbar li:after {
  content: "";
  position: absolute;
  width: 100%;
  height: 1px;
  background-color: #ddd;
  top: 15px;
  left: -50%;
  z-index : -1;
}
.progressbar li:first-child:after {
  content: none;
}
.progressbar li.active {
  color: green;
}
.progressbar li.active:before {
  border-color: green;
} 
.progressbar li.active + li:after {
  background-color: green;
}
</style>

<a>
<div class = "a">
<h3> Détail d'une annonce </h3>
 <a><button type="button">Exporter l'annonce </button></a>
 </div>
 </a>
</br>
<div class="container">
      <ul class="progressbar">
        <li class="active">Brouillon</li>
        <li>Validé</li>
        <li>Publié</li>
      </ul>
    </div>

</br>

 <div class="input-group mb-3" style="width: 60rem;">
  <button class="btn btn-outline-secondary" type="button" id="button-addon1">Intitulé de l'annonce</button>
  <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">


</div>

<br>
	<div class="input-group mb-3" style="width: 60rem;">
  	<textarea class="form-control" placeholder="Description du poste proposé" id="floatingTextarea2" style="height: 100px"></textarea>
	  </div>
  <div class="input-group mb-3" style="width: 60rem;">
  <button class="btn btn-outline-secondary" type="button" id="button-addon1">Status</button>
  <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
  </div>

</br>

  <div>
  <h3> Compétences réquises </h3>
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
  </tbody>
</table>
<h3> Compétence Souhaitée </h3> 

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
  </tbody>
</table>


</br>

<table class="table">
         <thead>
            <tr>
               <th>Nom de la direction</th> 
               <th>DR </th>
               <th> N°23 </th>
               <th> 23/03/2021 </th>
            </tr>
         </thead>
         
         <tbody>
            <tr>
               <td>Objet</td>
               <td>Appel à candidature pour un poste technicien gestion du personnel (H/F) </td>
            </tr>
            <tr>
               <td>Historique</td> 
               <td>
               <input type="checkbox" onClick="toggle(this)" class="custom-control-input" id="customCheck1" name="toto"> Nouvelle note de service
               <input type="checkbox" onClick="toggle(this)" class="custom-control-input" id="customCheck1" name="toto"> Annule et remplace
               <input type="checkbox" onClick="toggle(this)" class="custom-control-input" id="customCheck1" name="toto"> Complémentaire
              </td>
            </tr>
            <tr>
               <td>Sources</td>
               <td>Directives Locales</td>
            </tr>
            <tr>
               <td>Date d'effet</td>
               <td>A déterminer</td>
            </tr>

            <tr>
               <td>Rédacteur(s)</td>
               <td>RRI/Magali GATEIN</td>
            </tr>

            <tr>
               <td>Destinataire</td>
               <td>Tous service</td>
            </tr>

            <tr>
               <td>Documents joints</td>
               <td>
               <input type="checkbox" onClick="toggle(this)" class="custom-control-input" id="customCheck1" name="toto"> Oui
               <input type="checkbox" onClick="toggle(this)" class="custom-control-input" id="customCheck1" name="toto"> Non
               </td>
            </tr>

         </tbody>
         
      </table>


</div>
