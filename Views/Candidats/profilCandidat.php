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
<!-- JavaScript Bundle with Popper -->
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
	crossorigin="anonymous"></script>
<link rel="stylesheet" href="Assets/css/style.css">
<link rel="stylesheet" href="styleProfilCandidat.css">

<script src="profilForms.js"></script>
</head>
<body>

	<?php
include ("../../includes/menuCandidat.php");
?>

	<div class="container">
		<div id="identite" >
			<div style="display: inline-block; vertical-align: middle;"
				class="fb-profile">
				<img class="rounded-circle" src="../../Assets/Images/icon.png"
					alt="" width="100" height="100">
			</div>
			<div style="display: inline-block; vertical-align: middle;">
				<h3>
					M. <b>Toto Titi</b>
				</h3>
				<h4>Service : Ministère des documents classés</h4>
				<p>Tel : 06 01 01 01 01</p>
				<p>toto.titi@mail.fr</p>
			</div>
		</div>
		<br/>
		<br/>

		<div>
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="home-tab" data-bs-toggle="tab"
						data-bs-target="#home" type="button" role="tab"
						aria-controls="home" aria-selected="true">Parcours</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="profile-tab" data-bs-toggle="tab"
						data-bs-target="#profile" type="button" role="tab"
						aria-controls="profile" aria-selected="false">Compétences</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="contact-tab" data-bs-toggle="tab"
						data-bs-target="#contact" type="button" role="tab"
						aria-controls="contact" aria-selected="false">Vos CV et lettres de
						motivation</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="candidature-tab" data-bs-toggle="tab"
						data-bs-target="#candidature" type="button" role="tab"
						aria-controls="candidature" aria-selected="false">Mes candidatures</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="interet-tab" data-bs-toggle="tab"
						data-bs-target="#interet" type="button" role="tab"
						aria-controls="interet" aria-selected="false">Mes centres
						d'intérêt</button>
				</li>
			</ul>

			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel"
					aria-labelledby="home-tab">
					<div class="contenu">
						<div>
							<h3>Mes expériences et mes formations</h3>
							<p>Votre parcours reprend l'ensemble de vos expériences
								professionnelles ou extra-professionnelles, et de vos formations
							</p>
						</div>

						<div class="expfor">
							<div class="experiences">
								<div>
									<p>
										<b>Chef de projet</b> Université de Versailles Saint Quentin
										<br /> Versailles (78) - 2018-2020 (2 ans)
									</p>
									<p>
										<b>Développeur logiciel</b> AFPA <br /> Balma-Gramont (31) -
										2019 (6 mois)
									</p>



								<button class="bouton" onclick="afficherExpForm()" id="ajoutForm">
									<i class="fas fa-plus-circle"></i> Ajouter une expérience
								</button>

									<div class="form-group" id="expForm" style="display:none">
										<label for="inputNomExp">Description de l'expérience</label> <input
											type="text" class="form-control" id="inputNomExp"
											placeholder="Nom de l'expérience"> 
											
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Date de début</label> 
										<input
											type="date" class="form-control"
											id="exampleInputPassword1" placeholder="Password">
										
									</div>

									<div class="form-check">
										<input type="checkbox" class="form-check-input"
											id="exampleCheck1"> <label class="form-check-label"
											for="exampleCheck1">Check me out</label>
									</div>
									<button type="submit" class="btn btn-primary">Rajouter</button>
									</form>
								</div>
							</div>
							<div class="formations">
								<div class="bouton">
									<i class="fas fa-plus-circle"></i> Ajouter une formation
								</div>
							</div>
						</div>

						<!-- <div class="competence">Java</div> -->
					</div>

					<div></div>
				</div>

				<div class="tab-pane fade" id="profile" role="tabpanel"
					aria-labelledby="profile-tab">
					<div class="contenu">
						<div class="contenu">
							<h3>Possédez-vous ces compétences ?</h3>
							<p>Ce sont les compétences attendues par les recruteurs</p>
							<div class="contenu">
								<div class="competence">Gestion de projets</div>
								<div class="competence">SCRUM Master</div>
							</div>
						</div>
						<div class="contenu">
							<h3>Savoirs et savoir-faire</h3>
							<div class="contenu">
								<div class="competence">Rédaction de rapports</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="contact" role="tabpanel"
					aria-labelledby="interet-tab">
					<div class="contenu">
						<div class="contenu">
							<h3>Mes CV</h3>
							<p>Vous pouvez télécharger, créer, modifier vos CV et
								envoyer une candidature spontanée</p>
						</div>

						<div class="contenu">
							<h3>Mes réalisations</h3>
							<p>Ajoutez tout document mettant en valeur vos compétences</p>
						</div>

					</div>
				</div>
				<div class="tab-pane fade" id="candidature" role="tabpanel"
					aria-labelledby="candidature-tab">
					<div class="contenu">
						<h3>Mes candidatures</h3>
						<p>llll</p>


					</div>
				</div>
				<div class="tab-pane fade" id="interet" role="tabpanel"
					aria-labelledby="contact-tab">
					<div class="contenu">
						<h3>Centres d'intérêt</h3>
						<p>Un centre d'intérêt est une activité pour laquelle vous
							éprouvez de l'intérêt et à laquelle vous consacrez une partie
							de votre temps libre</p>

						<div class="contenu">
							<div class="competence">Ornithologie</div>
						</div>
						<div>
							<div class="bouton">Ajouter un centre d'intérêt</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<a href="../../index.php">Accueil</a>
	<a href="competenceCandidat.php">Compétences</a>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
		crossorigin="anonymous"></script>
	<script
		src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
		crossorigin="anonymous"></script>
	<script
		src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
		crossorigin="anonymous"></script>

</body>
</html>