<?php 

    require_once('connection.php');

    if(isset($_POST['signup']))
    {

        if(empty($_POST['Email']) || empty($_POST['UserName']) || empty($_POST['password']))
        {
            header("location: ./signupdesign.php?empty");
        }
        else
        {
            $Email=mysqli_real_escape_string($con,$_POST['Email']);
            $UserName=mysqli_real_escape_string($con,$_POST['UserName']);
            $Password=mysqli_real_escape_string($con,$_POST['password']);

            if(!preg_match("/^[a-zA-Z\.\-\_]*$/",$UserName))
            {
                header("location: ./signupdesign.php?Invalid");
                exit();
            }
            else
            {
                if(!filter_var($Email,FILTER_VALIDATE_EMAIL))
                {
                    header("location: ./signupdesign.php?VEmail");
                    exit();
                }
                else
                {
                    $query = " select * from Users where UserName='".$UserName."'";
                    $result = mysqli_query($con,$query);

                    if(mysqli_fetch_assoc($result))
                    {
                        header("location: ./signupdesign.php?User");
                        exit();
                    }
                    else
                    {
                        $query = " select * from Users where Email='".$Email."'";
                        $result = mysqli_query($con,$query);

                        if(mysqli_fetch_assoc($result))
                        {
                            header("location: ./signupdesign.php?Email");
                            exit();
                        }
                        else
                        {
                            $Hash = password_hash($Password, PASSWORD_DEFAULT);
                            $query = " insert into Users (Email,UserName,Password) values ('$Email', '$UserName','$Hash')";
                            $result = mysqli_query($con,$query);
                            header("location: ./signupdesign.php?success");
                            exit();                                
                            
                        }
                    }
                }
            }
        }

    }
    else
    {
        header("location: ./index.php");
        exit();
    }

?>