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
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.min.css'>
<link rel='stylesheet' href='https://rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/css/bootstrap-editable.css'><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/ele.css">
	<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>
	<script type="text/javascript">
             $(document).ready(function () {
    
    var myform = $('#myform'),
        iter = 2;
    $('#btnAddCol').click(function () {
        myform.find('tr').each(function(){
          var trow = $(this);
            if(trow.index() === 0){
               
               $("#add tr th:nth-last-child(4)").after("<th>Réponse ONEE/GRD Concerné en Cas Du "+iter+" Complément</th>");
               $("#add tr th:nth-last-child(4)").after("<th>Dépôt du "+iter+" Complément du Dossier Par le Développeur</th>");
               $("#add tr th:nth-last-child(4)").after("<th>Envoi du "+iter+" Complément du Dossier à l'ONEE/GRD Concerné</th>");
            }else{

                var tester ;
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
                $("#add tr td:nth-last-child(4)").after('<td>'+test1+'></td>');
                $("#add tr td:nth-last-child(4)").after('<td>'+test2+'></td>');
                $("#add tr td:nth-last-child(4)").after('<td>'+test3+'></td>');
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
                    <li><a href="energieEolienne.php" class="smoothScroll">Ajouter Un Projet</a></li>
                    <li><a href="#search" class="smoothScroll">Rechercher</a></li>
                    <li> <a href="alertes_eo.php"  class="smoothScroll">Alertes <span class="badge"><i class="fa fa-bell" aria-hidden="true"></i>
</span></a></li>
                    <li><a href="report_eo.php" class="smoothScroll">Reporting</a></li>
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

                <div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="0.6s">
                    <h2 style="color: black;">Direction des Energies Renouvelables et de l'energie eolienne</h2>
                    <h4 style="color: white;">Dossiers de demande d'autorisation provisoire pour le développement des
                        projets EnR dans le cadre de la loi 13-09</h4>
                </div>

            </div>
        </div>
    </section>

	<section id="search" class="parallax-section">
		
<div class="contain">
<div class="search-container" >
                 <form action="update_eo.php" method="POST" >
                   <input type="text" placeholder="Modifier.." name="search"  required>
                     <button type="submit" class="btn" name="sus"><i class="fa fa-pencil-square-o"  aria-hidden="true"></i></button>
                         </form>
                     </div>
					 <?php
					 if (isset($_POST['sus'])) {
						$keyword = mysqli_real_escape_string($link, $_POST['search']);
						 }
					 ?>
<div id="toolbar">
		<select class="form-control">
				<option value="all">Exporter Tout</option>
				<option value="selected">Exporter La Sélection</option>
		</select>
		
</div>

<table id="table" 
			 data-toggle="table"
			 data-search="true"
			 data-filter-control="true" 
			 data-show-export="true"
			 data-click-to-select="true"
			 data-toolbar="#toolbar">
	<thead>
		<tr>
		 
			<th data-field="state" data-checkbox="true"></th>
            <th  data-filter-control="select" data-sortable="true">Situation</th>
			<th  data-filter-control="input" data-sortable="true">Numéro</th>
			<th  data-filter-control="input" data-sortable="true">Développeur</th>
			<th  data-filter-control="input" data-sortable="true">Nom du projet</th>
			<th  data-filter-control="select" data-sortable="true">Région</th>
			<th  data-filter-control="select" data-sortable="true">Province</th>
			<th  data-filter-control="input" data-sortable="true">Localité</th>
			<th  data-filter-control="input" data-sortable="true">Puissance (MW)</th>
			<th  data-filter-control="input" data-sortable="true">Productible prévisionnel (GWh/an)</th>
			<th  data-filter-control="input" data-sortable="true">Co2 évité TCO2/an</th>
			<th  data-filter-control="input" data-sortable="true">Source Énergie</th>
			<th  data-filter-control="input" data-sortable="true">Coordonnées Géographiques/Coordonnées Lambert (m)</th>
			<th  data-filter-control="input" data-sortable="true">Investissement du projet (MDH)</th>
			<th  data-filter-control="input" data-sortable="true">Etat d'Avancement</th>
			<th  data-filter-control="input" data-sortable="true">Dépôt à la DEREE</th>
			<th  data-filter-control="input" data-sortable="true">Envoi du Dossier à l'ONEE/GRD Concerné</th>
			<th  data-filter-control="input" data-sortable="true">Réponse ONEE/GRD Concerné</th>
			<th  data-filter-control="input" data-sortable="true">Dépôt du Complément du Dossier Par le Développeur</th>
			<th  data-filter-control="input" data-sortable="true">Envoi du Complément du Dossier à l'ONEE/GRD Concerné</th>
			<th  data-filter-control="input" data-sortable="true">Réponse ONEE/GRD Concerné en Cas Du 2 Complément</th>
			<th  data-filter-control="input" data-sortable="true">Dépôt du 2 Complément du Dossier Par le Développeur</th>
			<th  data-filter-control="input" data-sortable="true">Envoi du 2 Complément du Dossier à l'ONEE/GRD Concerné</th>
			<th  data-filter-control="input" data-sortable="true">Réponse ONEE/GRD Concerné en Cas Du 3 Complément</th>
			<th  data-filter-control="input" data-sortable="true">Dépôt du 3 Complément du Dossier Par le Développeur</th>
			<th  data-filter-control="input" data-sortable="true">Envoi du 3 Complément du Dossier à l'ONEE/GRD Concerné</th>
			<th  data-filter-control="input" data-sortable="true">Réponse ONEE/GRD Concerné en Cas Du 4 Complément</th>
			<th  data-filter-control="input" data-sortable="true">Dépôt du 4 Complément du Dossier Par le Développeur</th>
			<th  data-filter-control="input" data-sortable="true">Envoi du 4 Complément du Dossier à l'ONEE/GRD Concerné</th>
			<th  data-filter-control="input" data-sortable="true">Avis de l'ONEE</th>
			<th  data-filter-control="input" data-sortable="true">Avis MEME</th>
			<th  data-filter-control="input" data-sortable="true">Observations</th>
		</tr>
	</thead>
	<tbody>
		
			<?php
	  require_once('db.php');
	  $sql="SELECT *  FROM `energieeolienne`";
	  $result = mysqli_query($link,$sql);
	 
	  if (mysqli_num_rows($result) > 0) {
		  while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
              echo '<td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox"></td>';
              if(strpos($row['Avis MEME'], 'refus') !== false)
              {echo "<td>Refus</td>";}
              else if(strpos($row['Avis MEME'], 'Autorisation') !== false)
              {echo "<td>Autorisation</td>";}
              else
              {echo "<td>En cours</td>";}
			echo "<td>" .$row['Numero']."</td>";
			  echo "<td>" .$row['Developpeur']."</td>";
			  echo "<td>" .$row['Nom du projet']."</td>";
			  echo "<td>" .$row['Region']."</td>";
			  echo "<td>" .$row['Province']."</td>";
			  echo "<td>" .$row['Localite']."</td>";
			  echo "<td>" .$row['Puissance']."</td>";
			  echo "<td>" .$row['Productible previsionnel']."</td>";
			  echo "<td>" .$row['Co2 evite TCO2/an']."</td>";
			  echo "<td>" .$row['Source energie']."</td>";
			  echo "<td>" .$row['Coordonnees Geographique/Coordonnees Lambert']."</td>";
			  echo "<td>" .$row['Investissement du projet']."</td>";
			  echo "<td>" .$row['Etat avancement']."</td>";
			  echo "<td>" .$row['Depot a la DEREE']."</td>";
			  echo "<td>" .$row["Envoi du dossier a l'ONEE"]."</td>";
			  echo "<td>" .$row['Reponse ONEE']."</td>";
			  echo "<td>" .$row['Depot du complement du dossier par le developpeur']."</td>";
			  echo "<td>" .$row["Envoi du complement du dossier a l'ONEE"]."</td>";
			  echo "<td>" .$row['Reponse ONEE en Cas Du 2 Complement']."</td>";
			  echo "<td>" .$row['Depot du 2 complement du dossier par le developpeur']."</td>";
			  echo "<td>" .$row["Envoi du 2 complement du dossier a l'ONEE"]."</td>";
			  echo "<td>" .$row['Reponse ONEE en Cas Du 3 Complement']."</td>";
			  echo "<td>" .$row['Depot du 3 complement du dossier par le developpeur']."</td>";
			  echo "<td>" .$row["Envoi du 3 complement du dossier a l'ONEE"]."</td>";
			  echo "<td>" .$row['Reponse ONEE en Cas Du 4 Complement']."</td>";
			  echo "<td>" .$row['Depot du 4 complement du dossier par le developpeur']."</td>";
			  echo "<td>" .$row["Envoi du 4 complement du dossier a l'ONEE"]."</td>";
			  echo "<td>" .$row["Avis de l'ONEE"]."</td>";
			  echo "<td>" .$row['Avis MEME']."</td>";
			  echo "<td>" .$row['Observations']."</td>";
			  echo "</tr>";
		  }
	  }
	 ?>	
		
	</tbody>
</table>
</div>
</section>
    <!-- Back top -->
    <a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/editable/bootstrap-table-editable.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/export/bootstrap-table-export.js'></script>
<script src='https://rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/filter-control/bootstrap-table-filter-control.js'></script><script  src="./script.js"></script>
<script src="js_/jquery.js"></script>
   
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