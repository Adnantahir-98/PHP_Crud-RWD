
<?php

    session_start();
    $con = mysqli_connect('localhost','root','','crud');
    $userprofile = $_SESSION['username'];

        if($userprofile== 'admin'){

        }
        else{
            header('location:home.php');
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

    <title>Home | Web Dev</title>
    <style>
        h1{
            font-weight: bold;
            font-size: 45px;
        }
        .admin{
            font-variant: small-caps;
            font-size: 25px;
        }
        span{
            background-color: greenyellow;
            width: 20px;
            height: 20px;
            border-radius: 12px;
        }
    </style>
  </head>
  <body>

    <header class="pb-5 mb-2" style="height: 250px;">
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
                    
                    <button class="btn btn-outline-info  my-2 my-sm-0 border-left-0 mr-2" type="submit"><a href="#" class="btn btn-outline-info text-dark border-right-0"> <?php echo "".$userprofile; ?> </a></button>
                    <button class="btn btn-outline-success  my-2 my-sm-0 border-left-0 mr-2" type="submit"><a href="signout.php" class="btn btn-outline-success text-dark border-top-0 border-bottom-0"> Sign Out </a></button>
                </form>
            </div>
        </nav>

    </header>
    <div class="text-center m-auto admin">administrator panel: <?php echo "".$userprofile; ?><span class="online ml-2"></span> </div>
    <br /> <br/ >

    <?php
        error_reporting(0);
        $con = mysqli_connect('localhost','root','','crud');

        $query = "SELECT * FROM insertion";
        $result = mysqli_query($con,$query);
        $data = mysqli_num_rows($result);
    ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 m-auto">
                    <a href="Home.php"><button class="btn btn-warning btn-block w-25">Back</button></a>

                    <h1 class="text-center">CRUD SYSTEM</h1>

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email  <i class="fa fa-id-card-o" aria-hidden="true"></i></th>
                            <th scope="col">Password</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Created_At</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if ($row  = mysqli_num_rows($result)){
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<tr>";
                                        echo "<td>".$row['id']."</td>";
                                        echo "<td> ".$row['username']." </td>";
                                        echo "<td>".$row['email']."</td>";
                                        echo "<td>".$row['password']."</td>";
                                        echo "<td>".$row['phone']."</td>";
                                        echo "<td>".$row['date']."</td>";
                                        echo "<td><a href='update.php?id=$row[id]& un=$row[username]& em=$row[email] & pwd=$row[password]& ph=$row[phone]& date=$row[date]' class='btn btn-outline-info border-0'>
                                              <i class='fa fa-edit'></i></a></td>";
                                        echo "<td><a href='delete.php?id=$row[id]' onclick='return checkdel()' class='btn btn-outline-danger border-0 del'><i class='fa fa-trash'></i></a></td>";
                                        echo "</tr>";

                                    }
                                }
                                else{
                                    echo "<h4>No record found, please add a new record.</h4>";
                                }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>

    <!-- Js alert to confirm before delete operation -->
    <script>
        function checkdel(){
            return confirm ('Press ok to Delete the record');
        }
    </script>


    <footer class="mt-5 bg-light pt-3 pb-1">
        <p class="text-center">&copy; copyright 2021, WebApp.Inc. All right reserved.</p>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


<!--    --><php
<!--//    while($row = mysqli_fetch_array($result)){-->
<!--//        ?>-->
<!--        <tr>-->
<!--            <th scope="row">--><php //echo $row['id']; ?><!--</th>-->
<!--            <td>--><php //echo $row['username']; ?><!--</td>-->
<!--            <td>--><php //echo $row['email']; ?><!--</td>-->
<!--            <td><php //echo $row['password']; ?></td>-->
<!--            <td>--><php //echo $row['phone']; ?><!--</td>-->
<!--            <td>--><php //echo $row['date']; ?><!--</td>-->
<!--            <td><a href='update.php?id=$row["id"]& un=$row["username"]& em=$row["email"] & pwd=$row["password"]& ph=$row["phone"]& date=$row["date"]' class='btn btn-outline-info border-0'>-->
<!--                    <i class='fa fa-edit'></i></a></td>-->
<!--            <td><a href='delete.php?id=$row[id]' onclick='return checkdel()' class="btn btn-outline-danger border-0 del"><i class="fa fa-trash"></i></a></td>-->
<!--        </tr>-->
<!--    --><php //} ?>

  </body>
</html>




