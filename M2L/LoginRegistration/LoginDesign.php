<?php require_once('header.php'); ?>

    
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-light mt-5">
                    <div class="card-title bg-primary text-white mt-5">
                        <h3 class="text-center py-2">Connexion</h3>
                    </div>

                    <?php
                    
                        if(isset($_GET['empty']))
                        {
                            $Message=$_GET['empty'];
                            $Message= "Veuillez remplir les champs manquants";
                    ?>
                        <div class="alert alert-danger text-center"><?php echo $Message ?></div>                            
                    <?php                            
                        }
                    
                    ?>


                      <?php
                    
                        if(isset($_GET['U_Invalid']))
                        {
                            $Message=$_GET['U_Invalid'];
                            $Message= "Ce nom d'utilisateur n'existe pas";
                    ?>
                        <div class="alert alert-danger text-center"><?php echo $Message ?></div>                            
                    <?php                            
                        }
                    
                    ?>


                        <?php
                    
                        if(isset($_GET['P_Invalid']))
                        {
                            $Message=$_GET['P_Invalid'];
                            $Message= "Mauvais mot de passe";
                    ?>
                        <div class="alert alert-danger text-center"><?php echo $Message ?></div>                            
                    <?php                            
                        }
                    
                    ?>

                    <div class="card-body">

                        <form action="login.php" method="POST" >
                            <input type="text" name="UserName" placeholder="Nom d'utilisateur ou addresse mail" class="form-control my-2">
                            <input type="password" name="password" placeholder=" Mot de passe" class="form-control my-2">
                            <button class="btn btn-success" name="login" class="pt-3">Se connecter</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once('footer.php'); ?>