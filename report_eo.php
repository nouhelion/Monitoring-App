<?php
include("db.php");
$quer="SELECT * FROM region_eo_auto";
$result2=mysqli_query($link,$quer);
$quer3="SELECT * FROM region_eo_cours";
$result3=mysqli_query($link,$quer3);
$quer4="SELECT * FROM region_eo_refus";
$result4=mysqli_query($link,$quer4);
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Main Style Css -->

    <!-- Main css -->
    <link rel="stylesheet" href="css/rep_eo.css">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});

        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data1 = google.visualization.arrayToDataTable([
                ['Regions', 'nombre de Projets Autorisées'],
                <?php
                while($ch=mysqli_fetch_assoc($result2))
                {
                    echo "['".$ch['nom']."',".$ch['nbr']."],";
                }
                ?>
            ]);
            var options1 = {
                title: 'Les Projets Autorisées par Régions',
                is3D: true,
            };
            var chart1 = new google.visualization.PieChart(document.getElementById('region_auto'));
            chart1.draw(data1, options1);

            var data2 = google.visualization.arrayToDataTable([
                ['Regions', 'nombre de Projets En cours'],
                <?php
                while($ch=mysqli_fetch_assoc($result3))
                {
                    echo "['".$ch['nom']."',".$ch['nbr']."],";
                }
                ?>
            ]);
            var options2 = {
                title: 'Les Projets En cours par Régions',
                is3D: true,
            };
            var chart2 = new google.visualization.PieChart(document.getElementById('region_cours'));
            chart2.draw(data2, options2);

            var data3 = google.visualization.arrayToDataTable([
                ['Regions', 'nombre de Projets Refusé'],
                <?php
                while($ch=mysqli_fetch_assoc($result4))
                {
                    echo "['".$ch['nom']."',".$ch['nbr']."],";
                }
                ?>
            ]);
            var options3 = {
                title: 'Les Projets Refusés par Régions',
                is3D: true,
            };
            var chart3 = new google.visualization.PieChart(document.getElementById('region_refus'));
            chart3.draw(data3, options3);
        }
    </script>

</head>

<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse" >

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
            <img src="images/roy.png">
        </div>

        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="home.php" class="smoothScroll">Home</a></li>
                <li><a href="energieEolienne.php" class="smoothScroll">Ajouter Un Projet</a></li>
                <li><a href="eo_search.php" class="smoothScroll">Rechercher</a></li>
                <li> <a href="#speakers"  class="smoothScroll">Alertes <span class="badge"><i class="fa fa-bell" aria-hidden="true"></i>
</span></a></li>
                <li><div class="dropdown">
                        <button class="dropbtn"><a href="#report" class="smoothScroll">Reporting</a>
                            <i class="fa fa-angle-down" style="color:rgb(129, 129, 129);" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="#region">Par Région</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div> </li>
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


<!-- =========================
REGISTER SECTION
============================== -->



<!-- =========================
PROGRAM SECTION
============================== -->
<br><br>
<section id="report" class="parallax-section">
    <table id="region">
        <tr>
            <td> <div id="region_auto" style="width: 500px; height: 500px;"></div></td>
            <td> <div id="region_cours" style="width: 500px; height: 500px;"></div></td>
            <td> <div id="region_refus" style="width: 500px; height: 500px;"></div></td>
        </tr>
    </table>
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
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
</body>

</html>