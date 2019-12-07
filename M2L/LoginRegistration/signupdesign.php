<?php require_once('header.php'); ?>

     <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-light mt-5">

                    <div class="card-title bg-primary text-white mt-5">
                        <h3 class="text-center py-2">Inscription</h3>
                    </div>

                    <!--Display Empty Fiels-->
                    <?php 
                    
                        if(isset($_GET['empty']))
                        {
                            $Message=$_GET['empty'];
                            $Message="Veuillez remplir les champs manquants";
                    ?>
                         <div class="alert alert-danger text-center"><?php echo $Message?></div>   
                    <?php                            
                        }
                    
                    ?>


                     <!--Invalid Character-->
                    <?php 
                    
                        if(isset($_GET['Invalid']))
                        {
                            $Message=$_GET['Invalid'];
                            $Message="Caractères spéciaux interdits ( . - _ autorisé)";
                    ?>
                         <div class="alert alert-danger text-center"><?php echo $Message?></div>   
                    <?php                            
                        }
                    
                    ?>


                      <!--Invalid Email-->
                    <?php 
                    
                        if(isset($_GET['VEmail']))
                        {
                            $Message=$_GET['VEmail'];
                            $Message="Email invalide";
                    ?>
                         <div class="alert alert-danger text-center"><?php echo $Message?></div>   
                    <?php                            
                        }
                    
                    ?>


                      <!--User Invalid-->
                    <?php 
                    
                        if(isset($_GET['User']))
                        {
                            $Message=$_GET['User'];
                            $Message="Nom d'utilisateur déjà existant";
                    ?>
                         <div class="alert alert-danger text-center"><?php echo $Message?></div>   
                    <?php                            
                        }
                    
                    ?>


                       <!--User Invalid-->
                    <?php 
                    
                        if(isset($_GET['Email']))
                        {
                            $Message=$_GET['Email'];
                            $Message="Email déjà existant";
                    ?>
                         <div class="alert alert-danger text-center"><?php echo $Message?></div>   
                    <?php                            
                        }
                    
                    ?>


                      <?php 
                    
                        if(isset($_GET['success']))
                        {
                            $Message=$_GET['success'];
                            $Message="Inscription terminée";
                    ?>
                         <div class="alert alert-success text-center"><?php echo $Message?></div>   
                    <?php                            
                        }
                        if(isset($_GET['success']))
                        {
                            header( "refresh:2;url=./logindesign.php" );
                        }
                    
                    ?>


                    <div class="card-body">

                        <form action="signup.php" method="POST">
                            <input type="text" name="Email" placeholder="Email" class="form-control my-2">
                            <input type="text" name="UserName" placeholder="Nom d'utilisateur" class="form-control my-2">
                            <input type="password" name="password" placeholder="Mot de passe" class="form-control mb-3">
                            <button class="btn btn-success" name="signup" class="pt-3">S'inscrire</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once('footer.php'); ?>