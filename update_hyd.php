<?php 
require('db.php');
     if (isset($_POST['sus'])) {
         $keyword = mysqli_real_escape_string($link, $_POST['search']);
          //Numero
          $sql="SELECT Numero as Numero
             FROM `energiehydroelectrique`
               where Numero='$keyword'";
              $result = mysqli_query($link,$sql);
              $value=mysqli_fetch_assoc($result);
              $Numero=$value['Numero'];
          //developpeur
          $sql="SELECT Demandeur as Demandeur
        FROM `energiehydroelectrique`
           where Numero='$keyword'";
          $result = mysqli_query($link,$sql);
          $value=mysqli_fetch_assoc($result);
          $Demandeur=$value['Demandeur'];
          //nom de projet 
          $sql="SELECT `Nom du projet` as `Nom du projet`
         FROM `energiehydroelectrique`
           where Numero='$keyword'";
          $result = mysqli_query($link,$sql);
          $value=mysqli_fetch_assoc($result);
          $Nomduprojet=$value['Nom du projet'];
          //region 
          $sql="SELECT Region as Region
        FROM `energiehydroelectrique`
           where Numero='$keyword'";
          $result = mysqli_query($link,$sql);
          $value=mysqli_fetch_assoc($result);
          $Region=$value['Region'];
          //province 
          $sql="SELECT `Province` as `Province`
         FROM `energiehydroelectrique`
           where Numero='$keyword'";
          $result = mysqli_query($link,$sql);
          $value=mysqli_fetch_assoc($result);
          $Province=$value['Province'];
          //localite
          $sql="SELECT Localite as Localite
          FROM `energiehydroelectrique`
           where Numero='$keyword'";
          $result = mysqli_query($link,$sql);
          $value=mysqli_fetch_assoc($result);
          $Localite=$value['Localite'];
          //Puissance
          $sql="SELECT Puissance as Puissance
          FROM `energiehydroelectrique`
           where Numero='$keyword'";
          $result = mysqli_query($link,$sql);
          $value=mysqli_fetch_assoc($result);
          $Puissance=$value['Puissance'];
          //prod
          $sql="SELECT `Productible previsionnel` as `Productible previsionnel`
        FROM `energiehydroelectrique`
           where Numero='$keyword'";
          $result = mysqli_query($link,$sql);
          $value=mysqli_fetch_assoc($result);
          $Productibleprevisionnel=$value['Productible previsionnel'];
           //co2 
           $sql="SELECT `Co2 evite TCO2/an` as `Co2 evite TCO2/an`
        FROM `energiehydroelectrique`
            where Numero='$keyword'";
           $result = mysqli_query($link,$sql);
           $value=mysqli_fetch_assoc($result);
           $Co2eviteTCO2an=$value['Co2 evite TCO2/an'];
          //source
          $sql="SELECT `Source energie` as `Source energie`
       FROM `energiehydroelectrique`
           where Numero='$keyword'";
          $result = mysqli_query($link,$sql);
          $value=mysqli_fetch_assoc($result);
          $Sourceenergie=$value['Source energie'];
          //coord geo
          $sql="SELECT `Coordonnees Geographique/Coordonnees Lambert` as `Coordonnees Geographique/Coordonnees Lambert`
        FROM `energiehydroelectrique`
           where Numero='$keyword'";
          $result = mysqli_query($link,$sql);
          $value=mysqli_fetch_assoc($result);
          $CoordonneesGeographiqueCoordonneesLambert=$value['Coordonnees Geographique/Coordonnees Lambert'];
          //inves
          $sql="SELECT `Investissement du projet` as `Investissement du projet`
         FROM `energiehydroelectrique`
           where Numero='$keyword'";
          $result = mysqli_query($link,$sql);
          $value=mysqli_fetch_assoc($result);
          $Investissementduprojet=$value['Investissement du projet'];
          //eta
          $sql="SELECT `Etat avancement` as `Etat avancement`
        FROM `energiehydroelectrique`
           where Numero='$keyword'";
          $result = mysqli_query($link,$sql);
          $value=mysqli_fetch_assoc($result);
          $Etatavancement=$value['Etat avancement'];
          //depot   
          $sql="SELECT `Depot a la DEREE` as `Depot a la DEREE`
         FROM `energiehydroelectrique`
           where Numero='$keyword'";
          $result = mysqli_query($link,$sql);
          $value=mysqli_fetch_assoc($result);
          $DepotalaDEREE=$value['Depot a la DEREE'];
        //envoie du doss
        $sql="SELECT `Envoi du dossier a l'ONEE` as `Envoi du dossier a l'ONEE`
      FROM `energiehydroelectrique`
         where Numero='$keyword'";
        $result = mysqli_query($link,$sql);
        $value=mysqli_fetch_assoc($result);
        $EnvoidudossieraONEE=$value["Envoi du dossier a l'ONEE"];
         //reponse
         $sql="SELECT `Reponse ONEE` as `Reponse ONEE`
        FROM `energiehydroelectrique`
         where Numero='$keyword'";
        $result = mysqli_query($link,$sql);
        $value=mysqli_fetch_assoc($result);
        $ReponseONEE=$value["Reponse ONEE"];
         //depot compl
         $sql="SELECT `Depot du complement du dossier par le developpeur` as `Depot du complement du dossier par le developpeur`
         FROM `energiehydroelectrique`
          where Numero='$keyword'";
         $result = mysqli_query($link,$sql);
         $value=mysqli_fetch_assoc($result);
         $Depotducomplementdudossierparledeveloppeur=$value["Depot du complement du dossier par le developpeur"];
         //envoie comple
         $sql="SELECT `Envoi du complement du dossier a l'ONEE` as `Envoi du complement du dossier a l'ONEE`
        FROM `energiehydroelectrique`
          where Numero='$keyword'";
         $result = mysqli_query($link,$sql);
         $value=mysqli_fetch_assoc($result);
         $EnvoiducomplementdudossieraONEE=$value["Envoi du complement du dossier a l'ONEE"];
         //reponse2
         $sql="SELECT `Reponse ONEE en Cas Du 2 Complement` as `Reponse ONEE en Cas Du 2 Complement`
       FROM `energiehydroelectrique`
         where Numero='$keyword'";
        $result = mysqli_query($link,$sql);
        $value=mysqli_fetch_assoc($result);
        $Reponse2ONEE=$value["Reponse ONEE en Cas Du 2 Complement"];
         //depot compl 2
         $sql="SELECT `Depot du 2 complement du dossier par le developpeur` as `Depot du 2 complement du dossier par le developpeur`
       FROM `energiehydroelectrique`
          where Numero='$keyword'";
         $result = mysqli_query($link,$sql);
         $value=mysqli_fetch_assoc($result);
         $Depotdu2complementdudossierparledeveloppeur=$value["Depot du 2 complement du dossier par le developpeur"];
         //envoie comple2
         $sql="SELECT `Envoi du 2 complement du dossier a l'ONEE` as `Envoi du 2 complement du dossier a l'ONEE`
       FROM `energiehydroelectrique`
          where Numero='$keyword'";
         $result = mysqli_query($link,$sql);
         $value=mysqli_fetch_assoc($result);
         $Envoidu2complementdudossieraONEE=$value["Envoi du 2 complement du dossier a l'ONEE"];
          //reponse3
          $sql="SELECT `Reponse ONEE en Cas Du 3 Complement` as `Reponse ONEE en Cas Du 3 Complement`
        FROM `energiehydroelectrique`
           where Numero='$keyword'";
          $result = mysqli_query($link,$sql);
          $value=mysqli_fetch_assoc($result);
          $Reponse3ONEE=$value["Reponse ONEE en Cas Du 3 Complement"];
           //depot compl 3
           $sql="SELECT `Depot du 3 complement du dossier par le developpeur` as `Depot du 3 complement du dossier par le developpeur`
         FROM `energiehydroelectrique`
            where Numero='$keyword'";
           $result = mysqli_query($link,$sql);
           $value=mysqli_fetch_assoc($result);
           $Depotdu3complementdudossierparledeveloppeur=$value["Depot du 3 complement du dossier par le developpeur"];
           //envoie comple3
           $sql="SELECT `Envoi du 3 complement du dossier a l'ONEE` as `Envoi du 3 complement du dossier a l'ONEE`
         FROM `energiehydroelectrique`
            where Numero='$keyword'";
           $result = mysqli_query($link,$sql);
           $value=mysqli_fetch_assoc($result);
           $Envoidu3complementdudossieraONEE=$value["Envoi du 3 complement du dossier a l'ONEE"];
           //reponse4
          $sql="SELECT `Reponse ONEE en Cas Du 4 Complement` as `Reponse ONEE en Cas Du 4 Complement`
        FROM `energiehydroelectrique`
           where Numero='$keyword'";
          $result = mysqli_query($link,$sql);
          $value=mysqli_fetch_assoc($result);
          $Reponse4ONEE=$value["Reponse ONEE en Cas Du 4 Complement"];
           //depot compl 3
           $sql="SELECT `Depot du 4 complement du dossier par le developpeur` as `Depot du 4 complement du dossier par le developpeur`
         FROM `energiehydroelectrique`
            where Numero='$keyword'";
           $result = mysqli_query($link,$sql);
           $value=mysqli_fetch_assoc($result);
           $Depotdu4complementdudossierparledeveloppeur=$value["Depot du 4 complement du dossier par le developpeur"];
           //envoie comple2
           $sql="SELECT `Envoi du 4 complement du dossier a l'ONEE` as `Envoi du 4 complement du dossier a l'ONEE`
          FROM `energiehydroelectrique`
            where Numero='$keyword'";
           $result = mysqli_query($link,$sql);
           $value=mysqli_fetch_assoc($result);
           $Envoidu4complementdudossieraONEE=$value["Envoi du 4 complement du dossier a l'ONEE"];
         //avis onee
         $sql="SELECT `Avis de l'ONEE` as `Avis de l'ONEE`
       FROM `energiehydroelectrique`
          where Numero='$keyword'";
         $result = mysqli_query($link,$sql);
         $value=mysqli_fetch_assoc($result);
         $AvisdeONEE=$value["Avis de l'ONEE"];
         //DEP EAU
         $sql="SELECT `Envoi du dossier au departement eau` as `Envoi du dossier au departement eau`
       FROM `energiehydroelectrique`
          where Numero='$keyword'";
         $result = mysqli_query($link,$sql);
         $value=mysqli_fetch_assoc($result);
         $Envoidudossieraudepartementeau=$value["Envoi du dossier au departement eau"];
         //REP EAU
         $sql="SELECT `Reponse Departement de l'eau` as `Reponse Departement de l'eau`
       FROM `energiehydroelectrique`
          where Numero='$keyword'";
         $result = mysqli_query($link,$sql);
         $value=mysqli_fetch_assoc($result);
         $ReponseDepartement=$value["Reponse Departement de l'eau"];
         //DEPOT ABH
         $sql="SELECT `Depot du complement du dossier par le developpeur/ABH` as `Depot du complement du dossier par le developpeur/ABH`
         FROM `energiehydroelectrique`
            where Numero='$keyword'";
           $result = mysqli_query($link,$sql);
           $value=mysqli_fetch_assoc($result);
           $DepotduABH=$value["Depot du complement du dossier par le developpeur/ABH"];
        //ENVOI
        $sql="SELECT `Envoi du complement du dossier a l'ABH` as `Envoi du complement du dossier a l'ABH`
         FROM `energiehydroelectrique`
            where Numero='$keyword'";
           $result = mysqli_query($link,$sql);
           $value=mysqli_fetch_assoc($result);
           $EnvoiduABH=$value["Envoi du complement du dossier a l'ABH"];

 //REP EAU2
 $sql="SELECT `Reponse Departement de l'eau en Cas Du 2 Complement` as `Reponse Departement de l'eau en Cas Du 2 Complement`
 FROM `energiehydroelectrique`
    where Numero='$keyword'";
   $result = mysqli_query($link,$sql);
   $value=mysqli_fetch_assoc($result);
   $Reponse2Departement=$value["Reponse Departement de l'eau en Cas Du 2 Complement"];
   //DEPOT ABH2
   $sql="SELECT `Depot du 2 complement du dossier par le developpeur/ABH` as `Depot du 2 complement du dossier par le developpeur/ABH`
   FROM `energiehydroelectrique`
      where Numero='$keyword'";
     $result = mysqli_query($link,$sql);
     $value=mysqli_fetch_assoc($result);
     $Depotdu2ABH=$value["Depot du 2 complement du dossier par le developpeur/ABH"];
  //ENVOI2
  $sql="SELECT `Envoi du 2 complement du dossier a l'ABH` as `Envoi du 2 complement du dossier a l'ABH`
   FROM `energiehydroelectrique`
      where Numero='$keyword'";
     $result = mysqli_query($link,$sql);
     $value=mysqli_fetch_assoc($result);
     $Envoidu2ABH=$value["Envoi du 2 complement du dossier a l'ABH"];

     //REP EAU3
 $sql="SELECT `Reponse Departement de l'eau en Cas Du 3 Complement` as `Reponse Departement de l'eau en Cas Du 3 Complement`
 FROM `energiehydroelectrique`
    where Numero='$keyword'";
   $result = mysqli_query($link,$sql);
   $value=mysqli_fetch_assoc($result);
   $Reponse3Departement=$value["Reponse Departement de l'eau en Cas Du 3 Complement"];
   //DEPOT ABH3
   $sql="SELECT `Depot du 3 complement du dossier par le developpeur/ABH` as `Depot du 3 complement du dossier par le developpeur/ABH`
   FROM `energiehydroelectrique`
      where Numero='$keyword'";
     $result = mysqli_query($link,$sql);
     $value=mysqli_fetch_assoc($result);
     $Depotdu3ABH=$value["Depot du 3 complement du dossier par le developpeur/ABH"];
  //ENVOI3
  $sql="SELECT `Envoi du 3 complement du dossier a l'ABH` as `Envoi du 3 complement du dossier a l'ABH`
   FROM `energiehydroelectrique`
      where Numero='$keyword'";
     $result = mysqli_query($link,$sql);
     $value=mysqli_fetch_assoc($result);
     $Envoidu3ABH=$value["Envoi du 3 complement du dossier a l'ABH"];

  //REP EAU4
  $sql="SELECT `Reponse Departement de l'eau en Cas Du 4 Complement` as `Reponse Departement de l'eau en Cas Du 4 Complement`
  FROM `energiehydroelectrique`
     where Numero='$keyword'";
    $result = mysqli_query($link,$sql);
    $value=mysqli_fetch_assoc($result);
    $Reponse4Departementdeeau=$value["Reponse Departement de l'eau en Cas Du 4 Complement"];
    //DEPOT ABH 4
    $sql="SELECT `Depot du 4 complement du dossier par le developpeur/ABH` as `Depot du 4 complement du dossier par le developpeur/ABH`
    FROM `energiehydroelectrique`
       where Numero='$keyword'";
      $result = mysqli_query($link,$sql);
      $value=mysqli_fetch_assoc($result);
      $Depotdu4ABH=$value["Depot du 4 complement du dossier par le developpeur/ABH"];
   //ENVOI 4
   $sql="SELECT `Envoi du 4 complement du dossier a l'ABH` as `Envoi du 4 complement du dossier a l'ABH`
    FROM `energiehydroelectrique`
       where Numero='$keyword'";
      $result = mysqli_query($link,$sql);
      $value=mysqli_fetch_assoc($result);
      $Envoidu4ABH=$value["Envoi du 4 complement du dossier a l'ABH"];
        //AVIS AGENCE BASSIN
        $sql="SELECT `Avis Agence Bassin` as `Avis Agence Bassin`
         FROM `energiehydroelectrique`
            where Numero='$keyword'";
           $result = mysqli_query($link,$sql);
           $value=mysqli_fetch_assoc($result);
           $AvisAgenceBassin=$value["Avis Agence Bassin"];
           //avis meme 
         $sql="SELECT `Avis MEME` as `Avis MEME`
       FROM `energiehydroelectrique`
          where Numero='$keyword'";
         $result = mysqli_query($link,$sql);
         $value=mysqli_fetch_assoc($result);
         $AvisMEME=$value["Avis MEME"];
         //observ
         $sql="SELECT `Observations` as `Observations`
       FROM `energiehydroelectrique`
          where Numero='$keyword'";
         $result = mysqli_query($link,$sql);
         $value=mysqli_fetch_assoc($result);
         $Observations=$value["Observations"];
        
        }


        if(isset($_POST['sub']))
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
        $Reponse2ONEE= mysqli_real_escape_string($link, $_REQUEST['Reponse2ONEE']);
        $Depotdu2 = mysqli_real_escape_string($link, $_REQUEST['Depotdu2']);
        $Envoidu2= mysqli_real_escape_string($link, $_REQUEST['Envoidu2']);
        $Reponse3ONEE= mysqli_real_escape_string($link, $_REQUEST['Reponse3ONEE']);
        $Depotdu3 = mysqli_real_escape_string($link, $_REQUEST['Depotdu3']);
        $Envoidu3= mysqli_real_escape_string($link, $_REQUEST['Envoidu3']);
        $Reponse4ONEE= mysqli_real_escape_string($link, $_REQUEST['Reponse4ONEE']);
        $Depotdu4 = mysqli_real_escape_string($link, $_REQUEST['Depotdu4']);
        $Envoidu4= mysqli_real_escape_string($link, $_REQUEST['Envoidu4']);
        $AvisdeONEE = mysqli_real_escape_string($link, $_REQUEST['AvisdeONEE']);
        $ReponseDepartement= mysqli_real_escape_string($link, $_REQUEST['ReponseDepartement']);
        $DepotduABH= mysqli_real_escape_string($link, $_REQUEST['DepotduABH']);
        $EnvoiduABH= mysqli_real_escape_string($link, $_REQUEST['EnvoiduABH']);
       
        $AvisAgenceBassin= mysqli_real_escape_string($link, $_REQUEST['AvisAgenceBassin']);
        $AvisMEME = mysqli_real_escape_string($link, $_REQUEST['AvisMEME']);
        $Observations= mysqli_real_escape_string($link, $_REQUEST['Observations']);
        $sql = "UPDATE  `energiehydroelectrique` SET 
        `Demandeur`='$Demandeur',
        `Nom du projet`='$Nomduprojet',
        `Region`='$Region',
        `Province`='$province',
        `Localite`='$Localite',
        `Puissance`='$Puissance',
        `Productible previsionnel`='$Productibleprevisionnel',
        `Co2 evite TCO2/an`='$Co2eviteTCO2an',
        `Source energie`='$Sourceenergie',
        `Coordonnees Geographique/Coordonnees Lambert`='$CoordonneesGeographiqueCoordonneesLambert',
        `Investissement du projet`='$Etatavancement',
        `Etat avancement`='$Investissementduprojet',
        `Depot a la DEREE`='$DepotalaDEREE',
        `Envoi du dossier a l'ONEE`='$EnvoidudossieraONEE',
        `Reponse ONEE`='$ReponseONEE',
        `Depot du complement du dossier par le developpeur`='$Depotducomplementdudossierparledeveloppeur',
        `Envoi du complement du dossier a l'ONEE`='$EnvoiducomplementdudossieraONEE',
        `Reponse ONEE en Cas Du 2 Complement`='$Reponse2ONEE',
        `Depot du 2 complement du dossier par le developpeur`='$Depotdu2',
        `Envoi du 2 complement du dossier a l'ONEE`='$Envoidu2',
        `Reponse ONEE en Cas Du 3 Complement`='$Reponse3ONEE',
        `Depot du 3 complement du dossier par le developpeur`='$Depotdu3',
        `Envoi du 3 complement du dossier a l'ONEE`='$Envoidu3',
        `Reponse ONEE en Cas Du 4 Complement`='$Reponse4ONEE',
        `Depot du 4 complement du dossier par le developpeur`='$Depotdu4',
        `Envoi du 4 complement du dossier a l'ONEE`='$Envoidu4',
        `Avis de l'ONEE`='$AvisdeONEE',
        `Reponse Departement de l'eau`='$ReponseDepartement',
        `Depot du complement du dossier par le developpeur/ABH`='$DepotduABH',
        `Envoi du complement du dossier a l'ABH`='$EnvoiduABH',
        
        `Avis Agence Bassin`='$AvisAgenceBassin',
        `Avis MEME`='$AvisMEME',
        `Observations`='$Observations' 
        WHERE Numero='$Numero'";
        /*graphe pour regions */
        if(strpos($AvisMEME, 'refus') !== false)
        {$req_m = "update region_hyd_refus set nbr = nbr +1 where nom = '$Region'";}
        else if(strpos($AvisMEME, 'Autorisation') !== false)
        {$req_m = "update region_hyd_auto set nbr = nbr +1 where nom = '$Region'";}
        else
        {$req_m = "update region_hyd_cours set nbr = nbr +1 where nom = '$Region'";}
        $link->query($req_m);
        if (mysqli_query($link, $sql)) {
          header("Location: EnergieHydro.php");
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
         ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Main css -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/hydr.css">
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
    <script type="text/javascript">
             $(document).ready(function () {
    
    var myform = $('#myform'),
        iter = 2;
    $('#btnAddCol').click(function () {
        myform.find('tr').each(function(){
          var trow = $(this);
            if(trow.index() === 0){
               
               $("#add tr th:nth-last-child(9)").after("<th>Réponse ONEE/GRD Concerné en Cas Du "+iter+" Complément</th>");
               $("#add tr th:nth-last-child(9)").after("<th>Dépôt du "+iter+" Complément du Dossier Par le Développeur</th>");
               $("#add tr th:nth-last-child(9)").after("<th>Envoi du "+iter+" Complément du Dossier à l'ONEE/GRD Concerné</th>");  
            }else{
                if(iter ===2)
                  {
                    test1="<?php echo $Reponse2ONEE; ?>";
                   test2="<?php echo $Depotdu2complementdudossierparledeveloppeur; ?>";
                   test3="<?php echo $Envoidu2complementdudossieraONEE; ?>";
                   
                  }
                else if(iter ===3)
                  {
                    test1="<?php echo $Reponse3ONEE; ?>";
                   test2="<?php echo $Depotdu3complementdudossierparledeveloppeur; ?>";
                   test3="<?php echo $Envoidu3complementdudossieraONEE; ?>";
                  }
                  else if(iter ===4)
                  {
                    test1="<?php echo $Reponse4ONEE; ?>";
                   test2="<?php echo $Depotdu4complementdudossierparledeveloppeur; ?>";
                   test3="<?php echo $Envoidu4complementdudossieraONEE; ?>";
                  }
                $("#add tr td:nth-last-child(9)").after('<td><input name="Reponse'+iter+'ONEE" type="text" id="Reponse'+iter+'ONEE" value="'+test1+'" ></td>');
                $("#add tr td:nth-last-child(9)").after('<td><input name="Depotdu'+iter+'" type="text" id="Envoi du complement du dossier a ONEE" value="'+test2+'" ></td>');
                $("#add tr td:nth-last-child(9)").after('<td><input name="Envoidu'+iter+'" type="text" id="Envoidu'+iter+'complementdudossieraONEE" value="'+test3+'" ></td>'); 
            } 
           
        });
        iter += 1;
    });
    
});

        </script>         
</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse"></body>
<!-- partial:index.partial.html -->
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
                <img src="images/roy.png">
            </div>

            <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">
				<li><a href="home.php" class="smoothScroll">Home</a></li>
				<li><a href="EnergieHydro.php" class="smoothScroll">Ajouter Un Projet</a></li>
                <li><a href="hyd_search.php" class="smoothScroll">Rechercher</a></li>
                <li><a href="#modifier" class="smoothScroll">Modifier</a></li>
                <li> <a href="#speakers"  class="smoothScroll">Alertes <span class="badge">3</span></a></li>
                <li><a href="report_hyd.php" class="smoothScroll">Reporting</a></li>
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
			<h2  style="text-align: color: black; center;">Direction des Energies Renouvelables et de l'energie hydroelectrique		</h2>
			<h4 >Dossiers de demande d'autorisation provisoire pour le développement des projets EnR dans le cadre de la loi 13-09</h4>
		</div>

            </div>
        </div>
    </section>

	<br><br>
<section id="modifier" class="parallax-section">

<form  method="post" action="" id="myform">
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
                    <th>Envoi du Complément du Dossier à l'ONEE/GRD Concerné<button type="button" class="btn" id="btnAddCol"><i class="fa fa-plus" aria-hidden="true"></i></button></th>
                    <th>Avis de l'ONEE</th>
                    <th>Envoi du Dossier Au Département Eau</th>
                    <th>Réponse du Département de l'Eau</th>
                    <th>Dépôt du Complément du Dossier Par le Développeur/ABH</th>
                    <th>Envoi du Complément du Dossier à l'ABH</th>
                    <th>Avis Agence Bassin</th>
                    <th>Avis MEME</th>
                    <th>Observations</th>
				</tr>
				<tr>
					<td><input name="Numero" type="text"  id="Numero" value="<?php echo $Numero; ?>" ></td>
					<td><input name="Demandeur" type="text"  id="Developpeur" value="<?php echo $Demandeur; ?>"></td>
					<td><input name="Nomduprojet" type="text"  id="Nom du projet" value="<?php echo $Nomduprojet; ?>" ></td>
					<td><select name="Region" id="Region"  onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" >
                    <option value="" <?php echo ($Region== '') ?  "selected" : "" ;?>>REGION</option>
                <option value="Tanger – Tétouan – Al Hoceima" <?php echo ($Region== 'Tanger – Tétouan – Al Hoceima') ?  "selected" : "" ;?>>Tanger – Tétouan – Al Hoceima</option>
                <option value="Oriental" <?php echo ($Region== 'Oriental') ?  "selected" : "" ;?>>Oriental</option>
                <option value="Fès - Meknès" <?php echo ($Region== 'Fès - Meknès') ?  "selected" : "" ;?>>Fès - Meknès</option>
                <option value="Rabat-Salé-Kénitra" <?php echo ($Region== 'Rabat-Salé-Kénitra') ?  "selected" : "" ;?>>Rabat-Salé-Kénitra</option>
                <option value="Béni Mellal-Khénifra" <?php echo ($Region== 'Béni Mellal-Khénifra') ?  "selected" : "" ;?>>Béni Mellal-Khénifra</option>
                <option value="Casablanca-Settat" <?php echo ($Region== 'Casablanca-Settat') ?  "selected" : "" ;?>>Casablanca-Settat</option>
                <option value="Marrakech-Safi" <?php echo ($Region== 'Marrakech-Safi') ?  "selected" : "" ;?>>Marrakech-Safi</option>
                <option value="Drâa-Tafilalet" <?php echo ($Region== 'Drâa-Tafilalet') ?  "selected" : "" ;?>>Drâa-Tafilalet</option>
                <option value="Souss-Massa" <?php echo ($Region== 'Souss-Massa') ?  "selected" : "" ;?>>Souss-Massa</option>
                <option value="Guelmim-Oued Noun" <?php echo ($Region== 'Guelmim-Oued Noun') ?  "selected" : "" ;?>>Guelmim-Oued Noun</option>
                <option value="Laâyoune-Sakia El Hamra" <?php echo ($Region== 'Laâyoune-Sakia El Hamra') ?  "selected" : "" ;?>>Laâyoune-Sakia El Hamra</option>
                <option value="Dakhla-Oued Ed Dahab" <?php echo ($Region== 'Dakhla-Oued Ed Dahab') ?  "selected" : "" ;?>>Dakhla-Oued Ed Dahab</option>
                        </select></td>
					<td>
						<select name="province" value="" id="Province" > 
                            <option value="<?php echo $Province; ?>"><?php echo $Province; ?></option>
                            
                        </select>
					</td>
					<td><input name="Localite" type="text"  id="Localite" value="<?php echo $Localite; ?>" ></td>
					<td><input name="Puissance" type="text"  id="Puissance" value="<?php echo $Puissance; ?>" ></td>
					<td><input name="Productibleprevisionnel" type="text"  id="Productible Prévisionnel" value="<?php echo $Productibleprevisionnel; ?>"></td>
                    <td> <input name="Co2eviteTCO2an" type="text"  id="Co2 évité TCO2/an" value="<?php echo $Co2eviteTCO2an; ?>" ></td>
                    <td><input name="Sourceenergie" type="text"  id="Source energie" value="<?php echo $Sourceenergie; ?>" ></td>
                    <td><input name="CoordonneesGeographique/CoordonneesLambert" type="text"  id="Coordonnées Géographique" value="<?php echo $CoordonneesGeographiqueCoordonneesLambert; ?>" ></td> 
                   <td><input name="Investissementduprojet" type="text"  id="Investissement du projet" value="<?php echo $Investissementduprojet; ?>" ></td> 
                    <td><input name="Etatavancement" type="text" class="form-input-inv" id="Etat avancement" value="<?php echo $Etatavancement; ?>" ></td> 
                   <td><input name="DepotalaDEREE" type="text"   id="Depot à la DEREE" value="<?php echo $DepotalaDEREE; ?>" ></td> 
                    <td><input name="EnvoidudossieraONEE" type="text"   id="Envoi du dossier a l'ONEE" value="<?php echo $EnvoidudossieraONEE; ?>" > </td>
                   <td><input name="ReponseONEE" type="text"  id="Réponse ONEE" value="<?php echo $ReponseONEE; ?>" ></td> 
                   <td><input name="Depotducomplementdudossierparledeveloppeur" type="text"   id="Dépôt du complément du dossier par le développeur" value="<?php echo $Depotducomplementdudossierparledeveloppeur; ?>" ></td>
                   <td> <input name="EnvoiducomplementdudossieraONEE" type="text"   id="Envoi du  complement du dossier à l'ONEE" value="<?php echo $EnvoiducomplementdudossieraONEE; ?>" ></td> 
                   <td><input name="AvisdeONEE" type="text"  id="Avis de l'ONEE" value="<?php echo $AvisdeONEE; ?>" ></td>
                   <td><input name="Envoidudossieraudepartementeau" type="text"  value="<?php echo $Envoidudossieraudepartementeau; ?>" id="Envoi du dossier au departement eau" ></td>
                   <td><input name="ReponseDepartement" type="text" value="<?php echo $ReponseDepartement; ?>" id="Reponse du Departement de l'eau" ></td>
                   <td><input name="DepotduABH" type="text" value="<?php echo $DepotduABH; ?>"  id="Dépôt du complément du dossier par le développeur" ></td>
                   <td><input name="EnvoiduABH" type="text" value="<?php echo  $EnvoiduABH; ?>" id="Envoi du complement du dossier à l'ABH" ></td>
                   <td><input name="AvisAgenceBassin" type="text" value="<?php echo $AvisAgenceBassin; ?>" id="Avis Agence Bassin" ></td>
                   <td> <input name="AvisMEME" type="text"  id="Avis MEMEE" value="<?php echo $AvisMEME; ?>" > </td> 
                   <td> <input name="Observations" type="text" id="Observations" value="<?php echo $Observations; ?>" ></td> 
				</tr>
			</table>
           
            <input type="submit" name="sub" value='Modifier le Projet' class="btn"></input>
    </form>
</section>
    <!-- Back top -->
    <a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- partial -->
 
<script src="js_/jquery.js"></script>
<script src="js_/bootstrap.min.js"></script>
<script src="js_/jquery.parallax.js"></script>
<script src="js_/owl.carousel.min.js"></script>
<script src="js_/smoothscroll.js"></script>
<script src="js_/wow.min.js"></script>
<script src="js_/custom.js"></script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
       
</body>
</html>