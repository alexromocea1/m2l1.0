<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../style.css">
    <title>Login M2L</title>
</head>
<body style="background:#CCC;">
    
    <nav class="navbar navbar-expand-sm ">
        <div class="container">
            <a href="index.php" class="navbar-brand"><img src="../img/M2L_logo.png"></a>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar ml-auto">

                
                <?php 

                if(isset($_SESSION['U_D']))
                {
                    echo    '<form action="logout.php" method="POST">
                                <li class="nav-item"><button type="submit" name="logout" class="btn btn-outline-light">Se déconnecter</button></li>
                            </form>';
                }
                else
                {
                    echo '<li class="nav-item"><a href="logindesign.php" class="btn btn-outline-light">Se connecter</a></li>
                    <li class="nav-item"><a href="signupdesign.php" class="btn btn-outline-light ml-3">S\'inscrire</a></li>';
                }

                ?>
                  
                </ul>
            </div>                

        </div>
    </nav>