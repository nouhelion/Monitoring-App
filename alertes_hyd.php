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
    <link rel="stylesheet" href="css/hydr.css">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
                <li><a href="EnergieHydro.php" class="smoothScroll">Ajouter Un Projet</a></li>
                <li><a href="hyd_search.php" class="smoothScroll">Rechercher</a></li>
                <li> <a href="#alertes"  class="smoothScroll">Alertes <span class="badge"><i class="fa fa-bell" aria-hidden="true"></i>
               </span></a></li>

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
                <h2  style="text-align: center; color: black;">Direction des Energies Renouvelables et de l'energie hydroelectrique		</h2>
                <h4 >Dossiers de demande d'autorisation provisoire pour le développement des projets EnR dans le cadre de la loi 13-09</h4>
            </div>

        </div>
    </div>
</section>



<!-- =========================
    PROGRAM SECTION
============================== -->
<br><br>
<section id="alertes" class="parallax-section">
    <table id="center">
         <tr>
             <th>Numéro du Projet</th>
             <th>Genre d'Alertes</th>
             </tr>

             <?php
             require_once("db.php");
             $today = date("Y-m-d");
             $sqli="select * from `energiehydroelectrique` ";
             $result=mysqli_query($link,$sqli);
             while ($row = mysqli_fetch_assoc($result)) {
                 $input=substr($row['Depot a la DEREE'], 0, 10);
                 $date1=date('Y-m-d', strtotime($input. ' + 15 days'));
                 if($date1<=$today and $row["Avis de l'ONEE"]==NULL)
                 {
                     echo "<tr>";
                     echo "<td>".$row['Numero'] ."</td>";
                     echo "<td>Avis de l'ONEE</td>";
                     echo "</tr>";
                 }
                 else {
                     $input1=substr($row["Avis de l'ONEE"], -10);
                     $date2=date('Y-m-d', strtotime($input1. ' + 1 month'));
                     if($date2<=$today and $row["Avis Agence Bassin"]==NULL)
                     {
                         echo "<tr>";
                         echo "<td>".$row['Numero'] ."</td>";
                         echo "<td>Avis Agence Bassin</td>";
                         echo "</tr>";
                     }
                     else
                     {
                         $input2=substr($row["Avis Agence Bassin"], -10);
                         $date3=date('Y-m-d', strtotime($input2. ' + 3 months'));
                         if($date3<=$today and $row["Avis MEME"]==NULL)
                         {
                             echo "<tr>";
                             echo "<td>".$row['Numero'] ."</td>";
                             echo "<td>Avis MEME</td>";
                             echo "</tr>";
                         }
                     }
                 }
             }

             ?>
    </table>


    <br><br>
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