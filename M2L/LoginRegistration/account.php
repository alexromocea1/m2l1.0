<?php

require_once("header.php");
if(isset($_GET['Well']))
{
    if(isset($_SESSION['U_D']))
    {
        echo '<div class="display-4 mt-5 text-center">Vous êtes connecté';
    }
    else
    {
        
    }
}
else
{
    header("location:./logindesign.php");
    exit();
}
require_once("footer.php");
?>