<script type="text/javascript">
             $(document).ready(function () {
    
                var myform = $('#myform'),
        iter = 2,abh=2;

    $('#btnAddCol').click(function () {
        myform.find('tr').each(function(){
          var trow = $(this);
            if(trow.index() === 0){
               
               $("#add tr th:nth-last-child(9)").after("<th>Réponse ONEE/GRD Concerné en Cas Du "+iter+" Complément</th>");
               $("#add tr th:nth-last-child(9)").after("<th>Dépôt du "+iter+" Complément du Dossier Par le Développeur</th>");
               $("#add tr th:nth-last-child(9)").after("<th>Envoi du "+iter+" Complément du Dossier à l'ONEE/GRD Concerné</th>");
               $("#add tr th:nth-last-child(4)").after("<th>Réponse du Département de l'Eau en Cas Du "+iter+" Complément</th>");
               $("#add tr th:nth-last-child(4)").after("<th>Dépôt du "+iter+" Complément du Dossier Par le Développeur/ABH</th>");
               $("#add tr th:nth-last-child(4)").after("<th>Envoi du "+iter+" Complément du Dossier à l'ABH</th>");
            }else{

                var tester ;
                if(iter ===2)
                  {
                   test1="<?php echo $Reponse2ONEE; ?>";
                   test2="<?php echo $Depotdu2complementdudossierparledeveloppeur; ?>";
                   test3="<?php echo $Envoidu2complementdudossieraONEE; ?>";
                   test4="<?php echo $Reponse2Departement; ?>";
                   test5="<?php echo $Depotdu2ABH; ?>";
                   test6="<?php echo $Envoidu2ABH; ?>";
                  }
                else if(iter ===3)
                  {
                   test1="<?php echo $Reponse3ONEE; ?>";
                   test2="<?php echo $Depotdu3complementdudossierparledeveloppeur; ?>";
                   test3="<?php echo $Envoidu3complementdudossieraONEE; ?>";
                   test4="<?php echo $Reponse3Departement; ?>";
                   test5="<?php echo $Depotdu3ABH; ?>";
                   test6="<?php echo $Envoidu3ABH; ?>";
                  }
                  else if(iter ===4)
                  {
                   test1="<?php echo $Reponse4ONEE; ?>";
                   test2="<?php echo $Depotdu4complementdudossierparledeveloppeur; ?>";
                   test3="<?php echo $Envoidu4complementdudossieraONEE; ?>";
                   test4="<?php echo $Reponse4Departement; ?>";
                   test5="<?php echo $Depotdu4ABH; ?>";
                   test6="<?php echo $Envoidu4ABH; ?>";
                  }
                
                  
                $("#add tr td:nth-last-child(9)").after('<td><input name="Reponse'+iter+'ONEE" type="text" id="Reponse'+iter+'ONEE" value="'+test1+'" ></td>');
                $("#add tr td:nth-last-child(9)").after('<td><input name="Depotdu'+iter+'" type="text" id="Envoi du complement du dossier a ONEE" value="'+test2+'" ></td>');
                $("#add tr td:nth-last-child(9)").after('<td><input name="Envoidu'+iter+'" type="text" id="Envoidu'+iter+'complementdudossieraONEE" value="'+test3+'" ></td>');
                $("#add tr td:nth-last-child(4)").after('<td><input name="Reponse'+iter+'Departement" type="text" id="Reponse'+iter+'ONEE" value="'+test4+'" ></td>');
                $("#add tr td:nth-last-child(4)").after('<td><input name="Depotdu'+iter+'ABH" type="text" id="Envoi'+iter+'du complement du dossier a ONEE" value="'+test5+'" ></td>');
                $("#add tr td:nth-last-child(4)").after('<td><input name="Envoidu'+iter+'ABH" type="text" id="Envoidu'+iter+'complementdudossieraONEE" value="'+test6+'" ></td>');
            } 
           
        });
        iter += 1;
    });
});


        </script>

$Reponse2Departement= mysqli_real_escape_string($link, $_REQUEST['Reponse2Departement']);
        $Depotdu2ABH= mysqli_real_escape_string($link, $_REQUEST['Depotdu2ABH']);
        $Envoidu2ABH= mysqli_real_escape_string($link, $_REQUEST['Envoidu2ABH']);
        $Reponse3Departement= mysqli_real_escape_string($link, $_REQUEST['Reponse3Departement']);
        $Depotdu3ABH= mysqli_real_escape_string($link, $_REQUEST['Depotdu3ABH']);
        $Envoidu3ABH= mysqli_real_escape_string($link, $_REQUEST['Envoidu3ABH']);
        $Reponse4Departement= mysqli_real_escape_string($link, $_REQUEST['Reponse4Departement']);
        $Depotdu4ABH= mysqli_real_escape_string($link, $_REQUEST['Depotdu4ABH']);
        $Envoidu4ABH= mysqli_real_escape_string($link, $_REQUEST['Envoidu4ABH']);

`Reponse Departement de l'eau en Cas Du 2 Complement`='$Reponse2Departement',
        `Depot du 2 complement du dossier par le developpeur/ABH`='$Depotdu2ABH',
        `Envoi du 2 complement du dossier a l'ABH`='$Envoidu2ABH',
        `Reponse Departement de l'eau en Cas Du 3 Complement`='$Reponse3Departement',
        `Depot du 3 complement du dossier par le developpeur/ABH`='$Depotdu3ABH',
        `Envoi du 3 complement du dossier a l'ABH`='$Envoidu3ABH',
        `Reponse Departement de l'eau en Cas Du 4 Complement`='$Reponse4Departement',
        `Depot du 4 complement du dossier par le developpeur/ABH`='$Depotdu4ABH',
        `Envoi du 4 complement du dossier a l'ABH`='$Envoidu4ABH',


        


        