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
<body>

	<?php
include ("../../includes/menuRecruteur.php");
?>

<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button3 {width: 40%;}

</style>
</br>
<div class="text-center"> 
<a>

<button id="myBtn1" type="button" class="button button3"> Je rédige une annonce </button>
</a>

</div>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="container">
  <form>

    <label for="fname">Titre de l'annonce</label>
    <input type="text" id="fname" name="firstname" placeholder="Titre de l'annonce">

    <label for="lname">Disponibilité</label>
    <input type="text" id="lname" name="lastname" placeholder="Disponibilité">

    <label for="annonce">Poste</label>
    <select id="annonce" name="annonce">
      <option value="Comptable">Comptable</option>
      <option value="RH">RH</option>
      <option value="Développeur">Développeur</option>
    </select>

    <label for="subject">Description de l'annonce</label>
    <textarea id="subject" name="subject" placeholder="Description" style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>

  <style>
  input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
  </style>
</div>

</div>
</div>
</br>

<style>
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 80%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 3% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 10px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 24px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>

<script>
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>



<h2> Mes Annonces </h2>
<div class="row">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Tech RR</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button type="button" class="btn btn-primary" href="../../Views/Recruteurs/detailAnnonce.php">Détails</button>
	</br></br>
	<a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
&nbsp;
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Téléconseillers</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button type="button" class="btn btn-primary" href="../../Views/Recruteurs/detailAnnonce.php">Détails</button>
	</br></br>
	<a href="../../Views/Recruteurs/detailAnnonce.php" class="card-link">Card link</a>
    <a href="../../Views/Recruteurs/detailAnnonce.php" class="card-link">Another link</a>
  </div>
</div>
&nbsp;
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Tech PE</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button type="button" class="btn btn-primary" href="../../Views/Recruteurs/detailAnnonce.php">Détails</button>
	</br></br>
	<a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>

</br>
</br>
<style>
	/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

<h2> Liste des Candidatures </h2>
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



  </tbody>
</table>


<script language="JavaScript">
function toggle(source) {
  checkboxes = document.getElementsByName('toto');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>
















<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>


<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Destinataire : </b></label>
	<input type="text"  id="myInput"> 
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Envoyer</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>


<h2> Gestion de mes annonces </h2>

<table class="table table-dark table-hover-10">
  <thead>
    <tr>
      <th scope="col">
	  <input type="checkbox" onClick="toggle2(this)" class="custom-control-input" id="customCheck1" name="toto2">
	  </th>
      <th scope="col">Annonces</th>
      <th scope="col">Date</th>
      <th scope="col">Nombre de Candidat</th>
	  <th scope="col">Status</th>
	  <th scope="col">Retenu.e?</th>
	  <th scope="col">Détails</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
	  <input type="checkbox" class="custom-control-input" id="customCheck2" name="toto2">	  </th>
      <td>Téléconseiller</td>
      <td>03/02/2021</td>
      <td>4</td>
	  <td>60</td>
	  <td>  <label class="switch">
	<input type="checkbox">
	<span class="slider round"></span>
	</label></td>
	<td><button type="button" class="btn btn-primary" href="../../Views/Recruteurs/retourRecruteur.php" >détail</button></td>
    </tr>
    <tr>
      <th scope="row">
	  <input type="checkbox" class="custom-control-input" id="customCheck2" name="toto2">
	  </th>
      <td>Superviseur</td>
      <td>15/11/2020</td>
      <td>6</td>
	  <td>65</td>
	  <td><label class="switch">
		<input type="checkbox">
		<span class="slider round"></span>
		</label> </td>
	<td><button type="button" class="btn btn-primary" href="../../Views/Recruteurs/retourRecruteur.php">détail</button></td>	
    </tr>
  
    <script language="JavaScript">
function toggle2(source2) {
  checkboxes2 = document.getElementsByName('toto2');
  for(var i=0, n=checkboxes2.length;i<n;i++) {
    checkboxes2[i].checked = source2.checked;
  }
}
</script>
