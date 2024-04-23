<?php

    $cena = $_GET["cena"];
    
    if($_GET["izbornik"] == "Hrana")
    {
        if(isset($_GET["porez"]))
        {
            echo 1.1 * ($cena + 50);
        }
        else
        {
            echo $cena + 50;
        }
            
    }
    else
    {
        if(isset($_GET["porez"]))
        {
            echo 1.1 *($cena + 350);
        }
        else
        {
            echo $cena + 350;
        }
    }
    
    

    
?>