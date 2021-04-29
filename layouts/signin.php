
<?php
session_start();
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS and CSS Style Sheets -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/home.css">
    <title>Home | Sign Up</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand text-info font-weight-bolder" href="Home.php">3ManDev*</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Products
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="webdev.php">Web Development</a>
                        <a class="dropdown-item" href="crud.php">CRUD System</a>
                        <a class="dropdown-item" href="apidev.php">Api Development</a>
                        <a class="dropdown-item" href="seo.php">SEO Management</a>
                        <a class="dropdown-item" href="appdev.php">Application Development</a>
                        <a class="dropdown-item" href="wrdpress.php">Wordpress Development</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php" tabindex="-1" aria-disabled="true">Contact Us</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">             
                <a href="signup.php" class="btn btn-outline-info  my-2 my-sm-0 border-left-0 mr-2" type="submit">signup</a>
            </form>
        </div>
    </nav>

    <?php

    //  Db connection!.
    $con = mysqli_connect('localhost','root','','crud');
    if($con){

    }
    else{
        echo "<h4>Db not connected please check your connection!</h4>";
    }

    //  db connection end here

    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pwd = $_POST['password'];
        $sql = "SELECT * FROM insertion WHERE username='$user' && password='$pwd'";
        $query = mysqli_query($con, $sql);
        $fetch = mysqli_num_rows($query);

        if($query){

        }
        if($fetch==1){
            $_SESSION['username'] = $user;
            header('Location: Home.php');
        }
        else{
            echo "<h4 class='text-danger text-center mt-2'>Failed to Login!</h4>";
        }
    }

    ?>


    <!--  Login form -->
    <section class="my-5">
        <div class="container">
            
            <div class="row">
                <div class="col-md-6 m-auto bg-light p-5">
                    <h1 class="text-center text-info border-bottom mb-4 pb-3">Sign In</h1>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Username</label>
                            <input type="text" class="form-control" placeholder="john doe" name="username" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Password</label>
                            <input type="password" class="form-control" placeholder="***" name="password">
                          </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-outline-dark" value="Sign In" name="submit">
                        </div>
                      </form>
                      
                      <div class="border-top pt-2">
                        Need an account?
                        <a href="signup.php">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    <footer class="mt-5 bg-light pt-3 pb-1">
        <p class="text-center">&copy; copyright 2021, WebApp.Inc. All right reserved.</p>
    </footer>
    

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>