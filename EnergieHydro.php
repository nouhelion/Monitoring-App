<?php
    require_once('db.php');
    if(isset($_POST['submit']))
    {
        $Numero = mysqli_real_escape_string($link, $_REQUEST['Numero']);
        $Demandeur = mysqli_real_escape_string($link, $_REQUEST['Demandeur']);
        $Nomduprojet= mysqli_real_escape_string($link, $_REQUEST['Nomduprojet']);
        $Region = mysqli_real_escape_string($link, $_REQUEST['Region']);
        $province = mysqli_real_escape_string($link, $_REQUEST['province']);
        $Localite = mysqli_real_escape_string($link, $_REQUEST['Localite']);
        $Puissance = mysqli_real_escape_string($link, $_REQUEST['Puissance']);
        $Productibleprevisionnel = mysqli_real_escape_string($link, $_REQUEST['Productibleprevisionnel']);
        $Sourceenergie= mysqli_real_escape_string($link, $_REQUEST['Sourceenergie']);
        $Co2eviteTCO2an = mysqli_real_escape_string($link, $_REQUEST['Co2eviteTCO2an']);
        $DepotalaDEREE = mysqli_real_escape_string($link, $_REQUEST['DepotalaDEREE']);
        $EnvoidudossieraONEE = mysqli_real_escape_string($link, $_REQUEST['EnvoidudossieraONEE']);
        $ReponseONEE= mysqli_real_escape_string($link, $_REQUEST['ReponseONEE']);
        $NotificationduDemandeurpour1ercomplementdudossier = mysqli_real_escape_string($link, $_REQUEST['NotificationduDemandeurpour1ercomplementdudossier']);
        $Depotdu1ercomplementdudossierparledeveloppeur = mysqli_real_escape_string($link, $_REQUEST['Depotdu1ercomplementdudossierparledeveloppeur']);
        $Envoidu1ercomplementdudossieraONEE = mysqli_real_escape_string($link, $_REQUEST['Envoidu1ercomplementdudossieraONEE']);
        $AvisdeONEE = mysqli_real_escape_string($link, $_REQUEST['AvisdeONEE']);
        $Envoidudossieraudepartementeau = mysqli_real_escape_string($link, $_REQUEST['Envoidudossieraudepartementeau']);
        $ReponseDepartementdeeau= mysqli_real_escape_string($link, $_REQUEST['ReponseDepartementdeeau']);
        $NotificationduDemandeurpourcomplementdudossier = mysqli_real_escape_string($link, $_REQUEST['NotificationduDemandeurpourcomplementdudossier']);
        $Depotducomplementdudossierparledeveloppeur = mysqli_real_escape_string($link, $_REQUEST['Depotducomplementdudossierparledeveloppeur']);
        $EnvoiducomplementdudossieraABH = mysqli_real_escape_string($link, $_REQUEST['EnvoiducomplementdudossieraABH']);
        $AvisAgenceBassin= mysqli_real_escape_string($link, $_REQUEST['AvisAgenceBassin']);
        $AvisMEME = mysqli_real_escape_string($link, $_REQUEST['AvisMEME']);
        $Observations= mysqli_real_escape_string($link, $_REQUEST['Observations']);
        $CoordonneesGeographique = mysqli_real_escape_string($link, $_REQUEST['CoordonneesGeographique']);
        $Investissementduprojet = mysqli_real_escape_string($link, $_REQUEST['Investissementduprojet']);
        $sql = "INSERT INTO `energiehydroelectrique`(`Numero`, `Demandeur`, `Nom du projet`, `Region`, `Province`, `Localite`, `Puissance`, `Productible previsionnel`, `Source energie`, `Co2 evite TCO2/an`, `Depot a la DEREE`,
         `Envoi du dossier a l'ONEE`, `Reponse ONEE`, `Notification du Demandeur pour 1er complement du dossier`, `Depot du 1er complement du dossier par le developpeur`, `Envoi du 1er complement du dossier à l'ONEE`, 
         `Avis de l'ONEE`, `Envoi du dossier au departement eau`, `Reponse Departement de l'eau`, `Notification du Demandeur pour complément du dossier`, `Depot du complement du dossier par le developpeur`, `Envoi du complement du dossier à l'ABH`, `Avis Agence Bassin`, `Avis MEME`, `Observations`, `Coordonnees Geographique`, `Investissement du projet`) VALUES 
         ('$Numero','$Demandeur','$Nomduprojet','$Region','$province','$Localite','$Puissance','$Productibleprevisionnel',
          '$Sourceenergie','$Co2eviteTCO2an','$DepotalaDEREE','$EnvoidudossieraONEE','$ReponseONEE','$NotificationduDemandeurpour1ercomplementdudossier',
          '$Depotdu1ercomplementdudossierparledeveloppeur','$Envoidu1ercomplementdudossieraONEE','$AvisdeONEE','$Envoidudossieraudepartementeau',
          '$ReponseDepartementdeeau','$NotificationduDemandeurpourcomplementdudossier','$Depotducomplementdudossierparledeveloppeur', 
          '$EnvoiducomplementdudossieraABH','$AvisAgenceBassin','$AvisMEME','$Observations','$CoordonneesGeographique','$Investissementduprojet')";
        if (mysqli_query($link, $sql)) {
          header("Location: EnergieHydro.php");
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--
Gestion des autorisation
http://www.templatemo.com/tm-486-new-event
-->
<title>Ministere des mines, de l'energie et de l'environnement</title>
<meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- Main css -->
<link rel="stylesheet" href="css/hydr.css">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script language="javascript" type="text/javascript">
    function dynamicdropdown(listindex)
    {
        switch (listindex)
        {
        case "Rabat-Salé-Kénitra" :
            document.getElementById("province").options[0]=new Option("Selectionner Province");
            document.getElementById("province").options[1]=new Option("Rabat");
            document.getElementById("province").options[2]=new Option("Salé");
			document.getElementById("province").options[3]=new Option("Skhirate, Témara");
			document.getElementById("province").options[4]=new Option("Kénitra");
			document.getElementById("province").options[5]=new Option("Khémisset");
			document.getElementById("province").options[6]=new Option("Sidi Kacem");
			document.getElementById("province").options[7]=new Option("Sidi Slimane");
            break;
        case "Casablanca-Settat" :
            document.getElementById("province").options[0]=new Option("Selectionner Province");
            document.getElementById("province").options[1]=new Option("Casablanca");
            document.getElementById("province").options[2]=new Option("Mohammédia");
            document.getElementById("province").options[3]=new Option("El Jadida");
			document.getElementById("province").options[4]=new Option("Nouaceur");
			document.getElementById("province").options[5]=new Option("Médiouna");
			document.getElementById("province").options[6]=new Option("Benslimane");
			document.getElementById("province").options[7]=new Option("Berrechid");
			document.getElementById("province").options[8]=new Option("Settat");
			document.getElementById("province").options[9]=new Option("Sidi Bennour");
            break;
		case "Fès - Meknès" :
            document.getElementById("province").options[0]=new Option("Selectionner Province");
            document.getElementById("province").options[1]=new Option("Fès");
            document.getElementById("province").options[2]=new Option("Meknès");
            document.getElementById("province").options[3]=new Option("El Hajeb");
			document.getElementById("province").options[4]=new Option("Ifrane");
			document.getElementById("province").options[5]=new Option("Moulay Yaâcoub");
			document.getElementById("province").options[6]=new Option("Séfrou");
			document.getElementById("province").options[7]=new Option("Boulemane");
			document.getElementById("province").options[8]=new Option("Taounate");
			document.getElementById("province").options[9]=new Option("Taza");
            break;
		case "Marrakech-Safi" :
            document.getElementById("province").options[0]=new Option("Selectionner Province");
            document.getElementById("province").options[1]=new Option("Marrakech");
            document.getElementById("province").options[2]=new Option("Chichaoua");
            document.getElementById("province").options[3]=new Option("Al Haouz");
			document.getElementById("province").options[4]=new Option("El Kelaâ des Sraghna");
			document.getElementById("province").options[5]=new Option("Essaouira");
			document.getElementById("province").options[6]=new Option("Rehamna");
			document.getElementById("province").options[7]=new Option("Safi");
			document.getElementById("province").options[8]=new Option("Youssoufia");
            break;
		case "Tanger – Tétouan – Al Hoceima" :
            document.getElementById("province").options[0]=new Option("Selectionner Province");
            document.getElementById("province").options[1]=new Option("Tanger, Assilah");
            document.getElementById("province").options[2]=new Option("M’diq, Fnideq");
            document.getElementById("province").options[3]=new Option("Tétouan");
			document.getElementById("province").options[4]=new Option("Fahs, Anjra");
			document.getElementById("province").options[5]=new Option("Larache");
			document.getElementById("province").options[6]=new Option("Al Hoceïma");
			document.getElementById("province").options[7]=new Option("Chefchaouen");
			document.getElementById("province").options[8]=new Option("Ouezzane");
            break;
		case "Oriental" :
            document.getElementById("province").options[0]=new Option("Selectionner Province");
            document.getElementById("province").options[1]=new Option("Oujda, Angad");
            document.getElementById("province").options[2]=new Option("Nador");
            document.getElementById("province").options[3]=new Option("Driouch");
			document.getElementById("province").options[4]=new Option("Jerada");
			document.getElementById("province").options[5]=new Option("Berkane");
			document.getElementById("province").options[6]=new Option("Taourirt");
			document.getElementById("province").options[7]=new Option("Guercif");
			document.getElementById("province").options[8]=new Option("Figuig");
            break;
		case "Béni Mellal-Khénifra" :
            document.getElementById("province").options[0]=new Option("Selectionner Province");
            document.getElementById("province").options[1]=new Option("Béni, Mellal");
            document.getElementById("province").options[2]=new Option("Azilal");
            document.getElementById("province").options[3]=new Option("Fquih Ben Salah");
			document.getElementById("province").options[4]=new Option("Khénifra");
			document.getElementById("province").options[5]=new Option("Khouribga");
            break;
		case "Drâa-Tafilalet" :
            document.getElementById("province").options[0]=new Option("Selectionner Province");
            document.getElementById("province").options[1]=new Option("Errachidia");
            document.getElementById("province").options[2]=new Option("Ouarzazate");
            document.getElementById("province").options[3]=new Option("Midelt");
			document.getElementById("province").options[4]=new Option("Tinghir");
			document.getElementById("province").options[5]=new Option("Zagora");
            break;
		case "Souss-Massa" :
            document.getElementById("province").options[0]=new Option("Selectionner Province");
            document.getElementById("province").options[1]=new Option("Agadir Ida, Outanane");
            document.getElementById("province").options[2]=new Option("Inezgane, Aït Melloul");
            document.getElementById("province").options[3]=new Option("Chtouka, Aït Baha");
			document.getElementById("province").options[4]=new Option("Taroudant");
			document.getElementById("province").options[5]=new Option("Tiznit");
			document.getElementById("province").options[6]=new Option("Tata");
            break;
		case "Guelmim-Oued Noun" :
            document.getElementById("province").options[0]=new Option("Selectionner Province");
            document.getElementById("province").options[1]=new Option("Guelmim");
            document.getElementById("province").options[2]=new Option("Assa-Zag");
            document.getElementById("province").options[3]=new Option("Tan Tan");
			document.getElementById("province").options[4]=new Option("Sidi Ifni");
            break;
		case "Laâyoune-Sakia El Hamra" :
            document.getElementById("province").options[0]=new Option("Selectionner Province");
            document.getElementById("province").options[1]=new Option("Laâyoune");
            document.getElementById("province").options[2]=new Option("Boujdour");
            document.getElementById("province").options[3]=new Option("Tarfaya");
			document.getElementById("province").options[4]=new Option("Es-Semara");
            break;
		case "Dakhla-Oued Ed Dahab" :
            document.getElementById("province").options[0]=new Option("Selectionner Province");
            document.getElementById("province").options[1]=new Option("Oued Ed Dahab");
            document.getElementById("province").options[2]=new Option("Aousserd");
            break;
        }
        return true;
    }
    </script>
</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

<!-- =========================
     PRE LOADER       
============================== -->
<div class="preloader">

	<div class="sk-rotating-plane"></div>

</div>


<!-- =========================
     NAVIGATION LINKS     
============================== -->
<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">

		<!-- navbar header -->
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<img src="images/roy.png" > 
		</div>

		<div class="collapse navbar-collapse">

			<ul class="nav navbar-nav navbar-right">
				<li><a href="home.php" class="smoothScroll">Home</a></li>
				<li><a href="#ajouter" class="smoothScroll">Ajouter Un Projet</a></li>
				<li><a href="#overview" class="smoothScroll">Rechercher</a></li>
				<li><a href="#speakers" class="smoothScroll">Alertes</a></li>
				<li><a href="#speakers" class="smoothScroll">Reporting</a></li>
			</ul>

		</div>

	</div>
</div>

<!-- =========================
    INTRO SECTION   
============================== -->
<section id="intro" class="parallax-section">
	<div class="container">
		<div class="row">

		<div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="0.6s" >
			<h2 style="color: black;" style="text-align: center;">Direction des Energies Renouvelables et de l'energie hydroelectrique		</h2>
			<h4 style="color:white;" style="text-align: center;">Dossiers de demande d'autorisation provisoire pour le développement des projets EnR dans le cadre de la loi 13-09</h4>
		</div>

		</div>
	</div>
</section>



<!-- =========================
    PROGRAM SECTION   
============================== -->
<section id="ajouter" class="parallax-section">
<div  class="big-container">
        <form action="" method="post">
            <div class="container">
                <div class="form-container">
				<h2 class="form-title">Informations Générales</h2>
                    <div class="first-form">
                    <input name="Numero" type="text" class="form-input-numero" id="Numero" placeholder="Numéro">
                    <input name="Demandeur" type="text" class="form-input-dev" id="Demandeur" placeholder="Demandeur">
                    <input name="Nom du projet" type="text" class="form-input-nom" id="Nom du projet" placeholder="Nom du Projet">
					<select name="Region" id="Region"  style="width:50%;" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
                            <option value="">Région</option>
                            <option value="Tanger – Tétouan – Al Hoceima">Tanger – Tétouan – Al Hoceima</option>
                            <option value="Oriental">Oriental</option>
                            <option value="Fès - Meknès">Fès - Meknès</option>
                            <option value="Rabat-Salé-Kénitra">Rabat-Salé-Kénitra</option>
                            <option value="Béni Mellal-Khénifra">Béni Mellal-Khénifra</option>
                            <option value="Casablanca-Settat">Casablanca-Settat</option>
                            <option value="Marrakech-Safi">Marrakech-Safi</option>
                            <option value="Drâa-Tafilalet">Drâa-Tafilalet</option>
                            <option value="Souss-Massa">Souss-Massa</option>
                            <option value="Guelmim-Oued Noun">Guelmim-Oued Noun</option>
                            <option value="Laâyoune-Sakia El Hamra">Laâyoune-Sakia El Hamra</option>
                            <option value="Dakhla-Oued Ed Dahab">Dakhla-Oued Ed Dahab</option>
                        </select>
						  <script type="text/javascript" language="JavaScript">
                                document.write('<select name="province" style="width:49%;" id="province"><option value="">Selectionner Province</option></select>')
                          </script>
					    <noscript>
						<select name="province" id="Province"  style="width:49%;" required>
                            <option value="">Selectionner province</option>
                            <option value="Oued Ed Dahab">Oued Ed Dahab</option>
                            <option value="Aousserd">Aousserd</option>
                        </select>
						</noscript>
						<input name="Localite" type="text" class="form-input-loc" id="Localite" placeholder="Localité">
                        <input name="Puissance" type="text" class="form-input-pui" id="Puissance" placeholder="Puissance (MW)">
                        <input name="Productibleprevisionnel" type="text" class="form-input-prod" id="Productible Prévisionnel" placeholder="Productible prévisionnel (GWh/an)">
                        <input name="Sourceenergie" type="text" class="form-input-sou" id="Source energie" placeholder="Source Énergie">
                        <input name="Co2eviteTCO2an" type="text" style="width:49%;" id="Co2 évité TCO2/an" placeholder="Co2 évité TCO2/an">
                        <input name="DepotalaDEREE" type="text"  style="width:50%;" id="Depot à la DEREE" placeholder="Dépôt à la DEREE">
				        <input name="EnvoidudossieraONEE" type="text"  style="width:57%;" id="Envoi du dossier a l'ONEE" placeholder="Envoi du Dossier à l'ONEE/GRD Concerné"> 
                        <input name="ReponseONEE" type="text" style="width:42%;" id="Réponse ONEE" placeholder="Réponse ONEE/GRD Concerné">                   
                        <input name="Depotdu1ercomplementdudossierparledeveloppeur" type="text"  style="width:100%;" id="Dépôt du complément du dossier par le développeur" placeholder="Dépôt du Complément du Dossier Par le Développeur">
                    <input name="Envoidu1ercomplementdudossieraONEE" type="text"  style="width:100%;" id="Envoi du 1er complement du dossier à l'ONEE" placeholder="Envoi du 1er Complément du Dossier à l'ONEE/GRD Concerné">
                    </div>
                </div>
                <div class="form-container-right">
                 <div class="second-form">
                 <button class="btn_"><i class="fa fa-plus"></i></button>
                 <button class="btn_"><i class="fa fa-trash"></i></button>
                 <br>
                    <input name="AvisdeONEE" type="text" class="form-input-aviss" id="Avis de l'ONEE" placeholder="Avis de l'ONEE">
                    <input name="Envoidudossieraudepartementeau" type="text"  style="width:53%;" id="Envoi du dossier au departement eau" placeholder="Envoi du Dossier Au Département Eau">
                    <input name="ReponseDepartementdeeau" type="text" style="width:100%;" id="Reponse du Departement de l'eau" placeholder="Réponse du Departement de l'Eau">
                    <input name="Depotducomplementdudossierparledeveloppeur" type="text"  style="width:100%;" id="Dépôt du complément du dossier par le développeur" placeholder="Dépôt du Complément du Dossier Par le Développeur">
                    <input name="EnvoiducomplementdudossieraABH" type="text" style="width:100%;" id="Envoi du complement du dossier à l'ABH" placeholder="Envoi du Complément du Dossier à l'ABH">
                    <input name="AvisAgenceBassin" type="text" class="form-input-avis" id="Avis Agence Bassin" placeholder="Avis Agence Bassin">
                    <input name="AvisMEME" type="text" class="form-input-avis" id="Avis MEMEE" placeholder="Avis MEME"> 
                    <input name="Observations" type="text" class="form-input-obs" id="Observations" placeholder="Observations">  
                    <input name="CoordonneesGeographique" type="text" style="width:100%;" id="Coordonnées Géographique" placeholder="Coordonnées Géographiques">
                    <input name="Investissementduprojet" type="text" class="form-input-inv" id="Investissement du projet" placeholder="Investissement du Projet (MDH)">
                    <button type="submit" name="submit" class="btn">Ajouter Le Projet</button>
                 </div>
                </div>
            </div>
        </form>
    </div>
</section>








<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- =========================
     SCRIPTS   
============================== -->
<script src="js_/jquery.js"></script>
<script src="js_/bootstrap.min.js"></script>
<script src="js_/jquery.parallax.js"></script>
<script src="js_/owl.carousel.min.js"></script>
<script src="js_/smoothscroll.js"></script>
<script src="js_/wow.min.js"></script>
<script src="js_/custom.js"></script>
<script>
	if ( window.history.replaceState ) {
	  window.history.replaceState( null, null, window.location.href );
	}
	</script>
</body>
</html>