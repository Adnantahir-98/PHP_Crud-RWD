

<?php

session_start();
$con = mysqli_connect('localhost','root','','crud');
$userprofile = $_SESSION['username'];
if($userprofile==true){

}
else{
    header('Location: signin.php');
}
$sql = "SELECT * FROM INSERTION WHERE username = '$userprofile'";
$query = mysqli_query($con, $sql);
$result = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update | Home</title>
    <!-- Bootstrap CSS and CSS Style Sheets -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/home.css">

</head>
<body>


    <header class="pb-5 mb-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand text-info font-weight-bolder" href="home.php">3ManDev*</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
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
                    <button class="btn btn-outline-info  my-2 my-sm-0 border-left-0 mr-2" type="submit"><a href="#" class="btn btn-outline-info text-danger border-right-0"> <?php echo "".$userprofile; ?> </a></button>
                    <button class="btn btn-outline-success  my-2 my-sm-0 border-left-0 mr-2" type="submit"><a href="signout.php" class="btn btn-outline-success text-secondary border-top-0 border-bottom-0"> Sign Out </a></button>
                </form>
            </div>
        </nav>

    </header>
    <br />


    <?php
    error_reporting(0);
    $con = mysqli_connect('localhost','root','','crud');

    if(isset($_POST['submit'])){
        $id = $_GET['id'];
        $user = $_POST['username'];
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        $ph = $_POST['phone'];
        $date = $_POST['date'];

        $query = "UPDATE`insertion` SET username='$user', email='$email', password='$pwd', phone='$ph',date='$date' WHERE id='$id' ";
        $result = mysqli_query($con, $query);

        if($result){
            echo "<div class='alert alert-success text-center m-auto w-25 my-2'>Record Updated Successfuly!</div>";
            header('refresh:1.6, crud.php');
        }
        else{
            echo "Record not updated Please try again!";
        }
    }
    else{
        $mes =  "Click on update to save changes.";
    }

    ?>


    <div class="m-auto text-center">
        <h1><i class="fa fa-user-circle-o m-auto h1" aria-hidden="true" style="font-size: 4.8rem;"></i></h1>
        <h1 class="text-center">Update User's Data.</h1>
    </div>
    
     <div class="container">
         <div class="row">
             <div class="col-md-4 m-auto">
                 <form action="" method="POST" class="form-group">

                     <h3 class="text-center text-success">Update <i class="fa fa-address-book text-success"></i> </h3>    <hr>
                     <label for="id">User Id:</label>
                     <input type="number"  name="id" disabled value="<?php echo $_GET['id']; ?>" class="form-control">
                     <label for="id">Username:</label>
                     <input type="text" name="username" value="<?php echo $_GET['un']; ?>" class="form-control">
                     <label for="id">Email:</label>
                     <input type="email" placeholder="Email" name="email" value="<?php echo $_GET['em']; ?>" class="form-control">
                     <label for="id">Password:</label>
                     <input type="password" name="password" value="<?php echo $_GET['pwd']; ?>" class="form-control">
                     <label for="id">Phone:</label>
                     <input type="number" name="phone" value="<?php echo $_GET['ph']; ?>" class="form-control">
                     <font color="blue" class="pt-2 text-info"><?php echo $mes; ?></font>
                     <br><br>
                     <button class="btn btn-outline-success" name="submit" value="submit"> Update </button>
                     <button class="btn btn-outline-info" name="submit" value="Back"><a href="crud.php">Back</a></button>

                 </form>
             </div>
         </div>
     </div>



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