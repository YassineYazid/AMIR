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


<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 500px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 500px;
}
</style>
</head>
<body>
	
    
    <?php
include ("../../includes/menuProfil.php");
?>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'James')" id="defaultOpen">James C.</button>
  <button class="tablinks" onclick="openCity(event, 'Jean')">Jean S.</button>
  <button class="tablinks" onclick="openCity(event, 'Louis')">Louis M.</button>
  <button class="tablinks" onclick="openCity(event, 'Jean')">Marie R.</button>
  <button class="tablinks" onclick="openCity(event, 'Louis')">Clair P.</button>
</div>

<style>
    /* Chat containers */
.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

/* Darker chat container */
.darker {
  border-color: #ccc;
  background-color: #ddd;
}

/* Clear floats */
.container::after {
  content: "";
  clear: both;
  display: table;
}

/* Style images */
.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

/* Style the right image */
.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

/* Style time text */
.time-right {
  float: right;
  color: #aaa;
}

/* Style time text */
.time-left {
  float: left;
  color: #999;
}

</style>


<div id="James" class="tabcontent">
  <h3>James C.</h3>
  <div class="container">
  <img src="#" alt="Avatar">
  <p>Hello. How are you today?</p>
  <span class="time-right">11:00</span>
</div>

<div class="container darker">
  <img src="#" alt="Avatar" class="right">
  <p>Hey! I'm fine. Thanks for asking!</p>
  <span class="time-left">11:01</span>
</div>

<div class="container">
  <img src="#" alt="Avatar">
  <p>Sweet! So, what do you wanna do today?</p>
  <span class="time-right">11:02</span>
</div>

<div class="container darker">
  <img src="#" alt="Avatar" class="right">
  <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
  <span class="time-left">11:05</span>
</div>
</div>

<div id="Jean" class="tabcontent">
  <h3>Jean S.</h3>
  <p>Jean is my name.</p> 
</div>

<div id="Louis" class="tabcontent">
  <h3>Louis M.</h3>
  <p>Louis is my name.</p>
</div>

<div id="Marie" class="tabcontent">
  <h3>Marie R.</h3>
  <p>Marie is my name.</p>
</div>

<div id="Clair" class="tabcontent">
  <h3>Clair P.</h3>
  <p>Clair is my name.</p>
</div>


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   

<div class="input-group mb-3">
<textarea rows="6" cols="175"placeholder="Type message.." name="msg" required></textarea>  
    <button type="button" class="block">Envoyer </button>
    </div>
</div>

<style>
.block {
  display: block;
  width: 7%;
  background-color: #4CAF50;
  padding: 62px 28px;
  font-size: 16px;
  cursor: pointer;
}

</style>
