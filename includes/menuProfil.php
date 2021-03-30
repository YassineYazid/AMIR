<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
	crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
	crossorigin="anonymous"></script>
	<link rel="stylesheet" href="Assets/css/style.css">
<link rel="stylesheet" href="styleProfilCandidat.css">
<link rel="icon" type="image/jfif" href="../../Assets/Images/dct.jfif">
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

</head>
<body>

</style>

<nav class="navbar navbar-light bg-light">

  <button class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </button>
		  <input id="toggle" type="checkbox"  
      checked data-toggle="toggle" 
      data-on="<a href='../../views/Candidats/profilCandidat.php'><p style='color:white;'> <B>Candidat</B> </p>  </a>" 

      data-off="<a href='../../views/Recruteurs/accueilRecruteur.php'> <p style='color:white;'> <B>Recruteur</B> </p></a>"
      data-onstyle="success" data-offstyle="primary">

      <script>
      $(function() {
      $('toggle').bootstrapToggle({
        on: <a "href='../../views/Candidats/profilCandidat.php'"> </a>,
        off: <a "href='../../views/Recruteurs/accueilRecruteur.php'"></a>
        });
      })
      </script>


		  <a href="../../index.php" class="btn btn-danger">  
		   Déconexion </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../../views/Candidats/profilCandidat.php">Profil</a></li>
            <li><a class="dropdown-item" href="#">Message</a></li>
            <li><a class="dropdown-item" href="#">Candidature</a></li>
			<li><a href="../../views/Candidats/Presentationdesservices.php" class="dropdown-item">Présentation des services</a></li>
	<li class="nav-item dropdown">
          
			
          </ul>
        </li>
  </div>
</nav>
</div>



		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../../Assets/js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="../../Assets/js/vendor/holder.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../Assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
		<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

</body>

</html>
