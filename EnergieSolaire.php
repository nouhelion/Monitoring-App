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
        $Co2eviteTCO2an = mysqli_real_escape_string($link, $_REQUEST['Co2eviteTCO2an']);
        $Sourceenergie= mysqli_real_escape_string($link, $_REQUEST['Sourceenergie']);
        $CoordonneesGeographiqueCoordonneesLambert = mysqli_real_escape_string($link, $_REQUEST['CoordonneesGeographique/CoordonneesLambert']);
        $Etatavancement = mysqli_real_escape_string($link, $_REQUEST['Etatavancement']);
        $Investissementduprojet= mysqli_real_escape_string($link, $_REQUEST['Investissementduprojet']);
        $DepotalaDEREE = mysqli_real_escape_string($link, $_REQUEST['DepotalaDEREE']);
        $EnvoidudossieraONEE = mysqli_real_escape_string($link, $_REQUEST['EnvoidudossieraONEE']);
        $ReponseONEE= mysqli_real_escape_string($link, $_REQUEST['ReponseONEE']);
        $Depotducomplementdudossierparledeveloppeur = mysqli_real_escape_string($link, $_REQUEST['Depotducomplementdudossierparledeveloppeur']);
        $EnvoiducomplementdudossieraONEE = mysqli_real_escape_string($link, $_REQUEST['EnvoiducomplementdudossieraONEE']);
        $AvisdeONEE = mysqli_real_escape_string($link, $_REQUEST['AvisdeONEE']);
        $AvisMEME = mysqli_real_escape_string($link, $_REQUEST['AvisMEME']);
        $Observations= mysqli_real_escape_string($link, $_REQUEST['Observations']);
        $sql = "INSERT INTO `energiesolaire`(`Numero`, `Demandeur`, `Nom du projet`, `Region`, `Province`, `Localite`, `Puissance`, `Productible previsionnel`, `Co2 evite TCO2/an`, `Source energie`, `Coordonnees Geographique/Coordonnees Lambert`, `Investissement du projet`, `Etat avancement`, `Depot a la DEREE`, `Envoi du dossier a l'ONEE`, `Reponse ONEE`, `Depot du complement du dossier par le developpeur`, `Envoi du complement du dossier a l'ONEE`, `Avis de l'ONEE`, `Avis MEME`, `Observations`) VALUES
         ('$Numero','$Demandeur','$Nomduprojet','$Region','$province','$Localite','$Puissance','$Productibleprevisionnel',
         '$Co2eviteTCO2an','$Sourceenergie','$CoordonneesGeographiqueCoordonneesLambert','$Investissementduprojet','$Etatavancement','$DepotalaDEREE','$EnvoidudossieraONEE','$ReponseONEE',
          '$Depotducomplementdudossierparledeveloppeur','$EnvoiducomplementdudossieraONEE','$AvisdeONEE',
          '$AvisMEME','$Observations')";
        /*graphe pour regions */
        if(strpos($AvisMEME, 'refus') !== false)
        {$req_m = "update region_sol_refus set nbr = nbr +1 where nom = '$Region'";}
        else if(strpos($AvisMEME, 'Autorisation') !== false)
        {$req_m = "update region_sol_auto set nbr = nbr +1 where nom = '$Region'";}
        else
        {$req_m = "update region_sol_cours set nbr = nbr +1 where nom = '$Region'";}
        $link->query($req_m);
        if (mysqli_query($link, $sql)) {
          header("Location: energieSolaire.php");
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ministère des Mines, de l'Énergie et de l'Environement</title>
<meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" type="image/png" href="images/icons/te.ico" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- Main css -->
<link rel="stylesheet" href="css/sol.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>
<script language="javascript" type="text/javascript">
    function dynamicdropdown(listindex)
    {
        switch (listindex)
        {
        case "Rabat-Salé-Kénitra" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Rabat");
            document.getElementById("province").options[2]=new Option("Salé");
			document.getElementById("province").options[3]=new Option("Skhirate, Témara");
			document.getElementById("province").options[4]=new Option("Kénitra");
			document.getElementById("province").options[5]=new Option("Khémisset");
			document.getElementById("province").options[6]=new Option("Sidi Kacem");
			document.getElementById("province").options[7]=new Option("Sidi Slimane");
            break;
        case "Casablanca-Settat" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
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
            document.getElementById("province").options[0]=new Option("Selectionner province");
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
            document.getElementById("province").options[0]=new Option("Selectionner province");
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
            document.getElementById("province").options[0]=new Option("Selectionner province");
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
            document.getElementById("province").options[0]=new Option("Selectionner province");
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
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Béni, Mellal");
            document.getElementById("province").options[2]=new Option("Azilal");
            document.getElementById("province").options[3]=new Option("Fquih Ben Salah");
			document.getElementById("province").options[4]=new Option("Khénifra");
			document.getElementById("province").options[5]=new Option("Khouribga");
            break;
		case "Drâa-Tafilalet" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Errachidia");
            document.getElementById("province").options[2]=new Option("Ouarzazate");
            document.getElementById("province").options[3]=new Option("Midelt");
			document.getElementById("province").options[4]=new Option("Tinghir");
			document.getElementById("province").options[5]=new Option("Zagora");
            break;
		case "Souss-Massa" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Agadir Ida, Outanane");
            document.getElementById("province").options[2]=new Option("Inezgane, Aït Melloul");
            document.getElementById("province").options[3]=new Option("Chtouka, Aït Baha");
			document.getElementById("province").options[4]=new Option("Taroudant");
			document.getElementById("province").options[5]=new Option("Tiznit");
			document.getElementById("province").options[6]=new Option("Tata");
            break;
		case "Guelmim-Oued Noun" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Guelmim");
            document.getElementById("province").options[2]=new Option("Assa-Zag");
            document.getElementById("province").options[3]=new Option("Tan Tan");
			document.getElementById("province").options[4]=new Option("Sidi Ifni");
            break;
		case "Laâyoune-Sakia El Hamra" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
            document.getElementById("province").options[1]=new Option("Laâyoune");
            document.getElementById("province").options[2]=new Option("Boujdour");
            document.getElementById("province").options[3]=new Option("Tarfaya");
			document.getElementById("province").options[4]=new Option("Es-Semara");
            break;
		case "Dakhla-Oued Ed Dahab" :
            document.getElementById("province").options[0]=new Option("Selectionner province");
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
				<li><a href="sol_search.php" class="smoothScroll">Rechercher</a></li>
				<li><a href="#speakers" class="smoothScroll">Alertes</a></li>
				<li><a href="report_sol.php" class="smoothScroll">Reporting</a></li>
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
			<h2 style="color: black;" >Direction des Energies Renouvelables et de l'energie solaire		</h2>
			<h4 style="color: white;" >Dossiers de demande d'autorisation provisoire pour le développement des projets EnR dans le cadre de la loi 13-09</h4>
		</div>

		</div>
	</div>
</section>


<!-- =========================
   REGISTER SECTION   
============================== -->

		

<!-- =========================
    PROGRAM SECTION   
============================== -->
<br><br>
<section id="ajouter" class="parallax-section">
<form  method="post" action="">
    <table id="add">
				<tr>
                <th>Numéro</th>
                    <th>Demandeur</th>
                    <th>Nom du projet</th>
                    <th>Région</th>
                    <th>Province</th>
                    <th>Localité</th>
                    <th>Puissance (MW)</th>
                    <th>Productible prévisionnel (GWh/an)</th>
                    <th>Co2 évité TCO2/an</th>
                    <th>Source Énergie</th>
                    <th>Coordonnées Géographiques/Coordonnées Lambert (m)</th>
                    <th>Investissement du projet (MDH)</th>
                    <th>Etat d'Avancement</th>
                    <th>Dépôt à la DEREE</th>
                    <th>Envoi du Dossier à l'ONEE/GRD Concerné</th>
                    <th>Réponse ONEE/GRD Concerné</th>
                    <th>Dépôt du Complément du Dossier Par le Développeur</th>
                    <th>Envoi du Complément du Dossier à l'ONEE/GRD Concerné</th>
                    <th>Avis de l'ONEE</th>
                    <th>Avis MEME</th>
                    <th>Observations</th>
				</tr>
				<tr>
					<td><input name="Numero" type="text"  id="Numero" ></td>
					<td><input name="Demandeur" type="text"  id="Demandeur"></td>
					<td><input name="Nomduprojet" type="text"  id="Nom du projet" ></td>
					<td><select name="Region" id="Region"  onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" required>
                            <option value="">Selectionner Région</option>
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
                        </select></td>
					<td><script type="text/javascript" language="JavaScript">
                                document.write('<select name="province"  id="province"><option value="">Selectionner Province</option></select>')
                          </script>
					    <noscript>
						<select name="province" id="Province"   required>
                            <option value="">Selectionner province</option>
                            <option value="Oued Ed Dahab">Oued Ed Dahab</option>
                            <option value="Aousserd">Aousserd</option>
                        </select>
						</noscript></td>
					<td><input name="Localite" type="text"  id="Localite" ></td>
					<td><input name="Puissance" type="text"  id="Puissance" ></td>
					<td><input name="Productibleprevisionnel" type="text"  id="Productible Prévisionnel" ></td>
                    <td> <input name="Co2eviteTCO2an" type="text"  id="Co2 évité TCO2/an" ></td>
                    <td><input name="Sourceenergie" type="text"  id="Source energie" ></td>
                    <td><input name="CoordonneesGeographique/CoordonneesLambert" type="text"  id="Coordonnées Géographique" ></td> 
                   <td><input name="Investissementduprojet" type="text"  id="Investissement du projet" ></td> 
                    <td><input name="Etatavancement" type="text" class="form-input-inv" id="Etat avancement" ></td> 
                   <td><input name="DepotalaDEREE" type="text"   id="Depot à la DEREE" ></td> 
                    <td><input name="EnvoidudossieraONEE" type="text"   id="Envoi du dossier a l'ONEE" > </td>
                   <td><input name="ReponseONEE" type="text"  id="Réponse ONEE" ></td> 
                   <td><input name="Depotducomplementdudossierparledeveloppeur" type="text"   id="Dépôt du complément du dossier par le développeur" ></td>
                   <td> <input name="EnvoiducomplementdudossieraONEE" type="text"   id="Envoi du 1er complement du dossier à l'ONEE" ></td> 
                   <td><input name="AvisdeONEE" type="text"  id="Avis de l'ONEE" ></td>
                   <td> <input name="AvisMEME" type="text"  id="Avis MEMEE" > </td> 
                   <td> <input name="Observations" type="text" id="Observations" >  </td> 
				</tr>
			</table>
            <button type="submit" name="submit" class="btn"><i class="fa fa-plus" aria-hidden="true"></i></button>
    </form>
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