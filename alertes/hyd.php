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
        $req_m = "update alertes_hyd set nbr = nbr +1 where quoi = 'Avis ONEE'";
        $link->query($req_m);
    }
    else {
        $input1=substr($row["Avis de l'ONEE"], -10);
        $date2=date('Y-m-d', strtotime($input1. ' + 1 month'));
        if($date2<=$today and $row["Avis Agence Bassin"]==NULL)
        {
            $req_m = "update alertes_hyd set nbr = nbr +1 where quoi = 'Avis Agence Bassin'";
            $link->query($req_m);
        }
        else
        {
            $input2=substr($row["Avis Agence Bassin"], -10);
            $date3=date('Y-m-d', strtotime($input2. ' + 3 months'));
            if($date3<=$today and $row["Avis MEME"]==NULL)
            {
                $req_m = "update alertes_hyd set nbr = nbr +1 where quoi = 'Avis MEME'";
                $link->query($req_m);
            }
        }
    }
}

?>
