<div class="navbar-wrapper">
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
                		<span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
                    </button>
                    <img src="../Assets/Images/logo.png" id="logo" alt="">
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
		                <li class="dropdown">
		                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
		                    <ul class="dropdown-menu">
                                <li><a href="chenil.php">Carrières</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="../carrieres.php">Nos offres d'emploi</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="../carrieres.php">Nos métiers</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="../carrieres.php">Qui sommes-nous?</a></li>
		                    </ul>
                		</li>
              		</ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"  style="cursor:pointer" onclick="openNav()" > <B>Connexion</B></a></li> </span>
                        <li><a href=""></a></li>
                    </ul>
				</div>
			</div>
            
		</nav> 
        <div >
            <a href="../Views/RH/connexionRH.php"> <input type="button" style="float:right; margin:5px;font-family:tahoma" value="RH"> </a> 
            <a href="../Views/Candidats/connexionCandidat.php"> <input type="button" style="float:right; margin:5px;font-family:tahoma" value="Candidat" ></a>
        </div>
      
    </div>
</div>
<style>
    .overlay {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: rgb(196, 192, 187);
        overflow-x: hidden;
        transition: 0.5s;
    }
    .overlay-content {
        position: relative;
        top: 25%;
        width: 100%;
        text-align: center;
        font-weight:bold;
        margin-top: 30px;
    }
    .overlay a {
        padding: 8px;
        text-decoration: none;
        font-size: 36px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }
    .overlay a:hover, .overlay a:focus {
        color: #f1f1f1;
    }
    .overlay .closebtn {
        position: absolute;
        top: 20px;
        right: 45px;
        font-size: 60px;
    }
    @media screen and (max-height: 450px) {
        .overlay a {
            font-size: 20px
        }
        .overlay .closebtn {
            font-size: 40px;
            top: 15px;
            right: 35px;
        }
    }
</style>



    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="../Views/Candidats/connexionCandidat.php">Candidat</a>
            <a href="../Views/RH/connexionRH.php">Service RH</a>
           
        </div>
    </div>

<script>
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }
    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
</script>
