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
    <title>Home | Register</title>
    <style>
        code{
            color: #006000;
            text-align: center;
            margin-top: 20px;
            position: absolute;
            left: 50%;
            transform: translate(-50%, 0);
        }
    </style>
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
                <a href="signin.php" class="btn btn-outline-info my-2 border-left-0 my-sm-0" type="submit">signin</a>
            </form>
        </div>
    </nav>


    <!-- Registration  -->
    <?php
        error_reporting(0);
        $con = mysqli_connect('localhost','root','','crud');
        if($con){
            //echo "<div class="alert alert-danger w-25">db connected!</div>";
        }
        else{
            echo "<div>No connection, please check your DB connection and try again!</div>";
        }
    
        if(isset($_POST['submit'])){
          $user = $_POST['username'];
          $email = $_POST['email'];
          $pwd = $_POST['password'];
          $ph = $_POST['phone'];
          $date=time();
          if(!empty($user) && !empty($email) && !empty($pwd) && !empty($ph)){
            $insert = "INSERT INTO `insertion` (username,email,password,phone,date) VALUES ('$user','$email','$pwd','$ph','$date')";
            $query = mysqli_query($con,$insert);
            if($query){
              echo "<div> <code>Congrats! Data Submitted Successfully! </code></div>";
              header('refresh:2, signin.php');
            }
            else{
               echo "Sorry! some error occur please try again.";
            }
          }
          else{
            echo "<div>All fields are required!</div>";
          }
        }
      ?>

    <!--  Registration form -->
    <section class="my-5">
        <div class="container">
            
            <div class="row">
                <div class="col-md-6 m-auto bg-light p-5">
                    <h1 class="text-center text-info border-bottom mb-4 pb-3">Register Now</h1>
                    
                    <form method="POST" action="">
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Username</label>
                          <input type="text" class="form-control" placeholder="e.g John Doe" name="username">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email Address</label>
                            <input type="email" class="form-control" placeholder="john@example.com" name="email" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Password</label>
                            <input type="password" class="form-control" placeholder="***" name="password">
                          </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Phone #</label>
                          <input type="number" class="form-control" placeholder="+93 245 3540932" name="phone">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-outline-info" value="Sign Up" name="submit"> 
                        </div>

                      </form>

                      <div class="form-group border-top pt-3">
                        Already have an account?
                        <a href="signin.php">Sign In</a>
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