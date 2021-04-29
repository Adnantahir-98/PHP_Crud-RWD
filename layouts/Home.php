
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

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS and CSS Style Sheets -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/home.css">

    <title>Home</title>
  </head>
  <body>

    <header class="pb-5">
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
                            <a class="dropdown-item" href="crud.php" data-toggle="tooltip" data-placement="bottom" title="Login as admin to view">CRUD System</a>
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
        

    <!-- Developers Information Panel -->
    <div class="container mb-4 mt-4">
        <div class="alert alert-success m-auto w-50"><?php echo "Welcome to our site Mr/Ms ".$userprofile; ?></div>
        <div class="row m-auto">
            <div class="col-md-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../img/developers/2.png" alt="developers/2.png">
                    <div class="card-body">
                        <h3 class="text-center text-info">Usman Khan</h3>
                      <p class="card-text text-center">Roll # Bsem-f19-074, Computer Science Student at Superior University. Mentor Prof.Ali Ahmad subject Computer Science.</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../img/developers/2.png" alt="developers/2.png">
                    <div class="card-body">
                        <h3 class="text-center text-info">Abdul Hanan</h3>
                      <p class="card-text text-center">Roll # Bsem-f19-084, Computer Science Student at Superior University. Mentor Prof.Ali Ahmad subject Computer Science.</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../img/developers/2.png" alt="developers/2.png">
                    <div class="card-body">
                        <h3 class="text-center text-info">Haseeb Shahid</h3>
                      <p class="card-text text-center">Roll # Bsem-f19-087   , Computer Science Student at Superior University. Mentor Prof.Ali Ahmad subject Computer Science.</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    </header>
    <br /><br /><br />


    <section class="bg-light my-5">
        <main>
            <div class="container">
                <h3 class="text-center text-info pt-5">Fully Responsive Web Design(RWD)</h3>
                <p class="text-center text-info">We make this site keeping in mind that it should also run on Mobile browsers</p>
                <div class="row p-5">
                    <div class="col-md-4 text-right mt-3">
                        <p>Computer science, the study of computers and computing, including their theoretical and algorithmic foundations, hardware and software, and their uses for processing information. The discipline of computer science includes the study of algorithms and data structures, computer and network design, modeling data and information processes, artificial intelligence, data analysis and machine learning/deep learning.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="../img/download.png" alt="download.png" class="img-fluid mt-3" style="height: 260px;">
                    </div>
                    <div class="col-md-4 float-left mt-3">
                        <p>Computer science draws some of its foundations from mathematics and engineering and therefore incorporates techniques from areas such as queueing theory, probability and statistics, and electronic circuit design. Computer science also makes heavy use of hypothesis testing and experimentation during the conceptualization, design, measurement, and refinement of new algorithms, information structures, and computer.</p>
                    </div>
                </div>
            </div>
        </main>

    </section>
   
    <br />

    <!-- Our Services Section  -->
    <section class="bg-warning my-5 pb-5">
        <main class="pt-5">
            <h1 class="text-center text-white font-weight-bolder pt-5 text-uppercase">Our Services</h1>
            <div class="container mb-4 ">
                <div class="row m-auto">
                    <div class="col-md-4 mt-3">
                        <div class="card shadow-lg" style="width: 18rem;">
                            <img class="card-img-top px-2 pt-2" src="../img/web development.jpg" alt="Web development.jpg">
                            <div class="card-body">
                              <h5 class="card-title">Web Development</h5>
                              <p class="card-text">Web development is the work involved in developing a Web site for the Internet ...</p>
                              <a href="webdev.php" class="btn btn-info">Read More <i class="fa fa-arrow-right text-white ml-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="card shadow-lg" style="width: 18rem;">
                            <img class="card-img-top px-2 pt-2" src="../img/web development.jpg" alt="Web development.jpg">
                            <div class="card-body">
                              <h5 class="card-title">CRUD System</h5>
                              <p class="card-text">CRUD system is the work involved in developing a Web site for the Internet ...</p>
                              <a href="crud.php" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="login as admin to view">Read More <i class="fa fa-arrow-right text-white ml-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="card shadow-lg" style="width: 18rem;">
                            <img class="card-img-top px-2 pt-2 img-fluid" src="../img/API development.png" alt="Web development.jpg">
                            <div class="card-body">
                              <h5 class="card-title">Api Development</h5>
                              <p class="card-text">An application programming interface (API) is a computing interface that defines interactions between multiple...</p>
                              <a href="apidev.php" class="btn btn-info">Read More <i class="fa fa-arrow-right text-white ml-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="card shadow-lg" style="width: 18rem;">
                            <img class="card-img-top px-2 pt-2" src="../img/seo.jpg" alt="Web development.jpg">
                            <div class="card-body">
                              <h5 class="card-title">SEO Management</h5>
                              <p class="card-text">Search engine optimization (SEO) is the process of improving the quality and quantity of website traffic to a website...</p>
                              <a href="seo.php" class="btn btn-info">Read More <i class="fa fa-arrow-right text-white ml-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="card shadow-lg" style="width: 18rem;">
                            <img class="card-img-top px-2 pt-2" src="../img/App.jpg" alt="Web development.jpg">
                            <div class="card-body">
                              <h5 class="card-title">Application Development</h5>
                              <p class="card-text">Mobile app development is the act or process by which a mobile app...</p>
                              <a href="appdev.php" class="btn btn-info">Read More <i class="fa fa-arrow-right text-white ml-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3 pb-3">
                        <div class="card shadow-lg" style="width: 18rem;">
                            <img class="card-img-top px-2 pt-2" src="../img/wordpress development.jpg" alt="Web development.jpg">
                            <div class="card-body">
                              <h5 class="card-title">WordPress Development</h5>
                              <p class="card-text">WordPress (WP, WordPress.org) is a free and open-source..</p>
                              <a href="wrdpress.php" class="btn btn-info">Read More <i class="fa fa-arrow-right text-white ml-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </section>


    <!-- Privacy Policies and Terms Section -->
    <section class="terms">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <div class="content">
                            <h1>Terms And Conditions</h1>
                            <p>By accessing or using this website, you agree to be bound to the terms and conditions read our terms and conditions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <div class="content">
                            <h1>Private Policy</h1>
                            <p>We provide you end to end privacy. We believe to keep our customers data private from others.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <div class="content">
                            <h1>Contact Us</h1>
                            <p>For more information call us at 032323242412 or email us at Bsem-f19-084@superior.edu.pk</p>
                        </div>
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

