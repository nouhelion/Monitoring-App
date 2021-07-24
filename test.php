<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
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
        echo $row['Numero'] ."onee <br>";
    }
    else {
        $input1=substr($row["Avis de l'ONEE"], -10);
        $date2=date('Y-m-d', strtotime($input1. ' + 1 month'));
        if($date2<=$today and $row["Avis Agence Bassin"]==NULL)
        {
            echo $row['Numero'] ."abh <br>";
        }
        else
        {
            $input2=substr($row["Avis Agence Bassin"], -10);
            $date3=date('Y-m-d', strtotime($input2. ' + 3 months'));
            if($date3<=$today and $row["Avis MEME"]==NULL)
            {
                echo $row['Numero'] ." meme <br>";
            }
        }
    }
}

?>


</body>
</html>