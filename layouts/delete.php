<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete | Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        h3{
            color: green;
        }
        .a{
            font-size: 18px;
        }
        a{
            color: #fff;
        }
        a:hover{
            color: #ddd;
            text-decoration: none;
        }
        h4{
            color: red;
            font-size: 20px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<?php

    $con = mysqli_connect('localhost','root','','crud');
    if($con){

    }
    else{
        echo "<h4>No connection, Please check your connection and try again!</h4>";
    }

    $id = $_GET['id'];
    $query = "DELETE FROM `insertion` WHERE ID='$id'";
    $sql = mysqli_query($con, $query);

    if($sql){
        echo "<script> alert('Record has been deleted.'); </script>";
    ?>
        <meta HTTP-EQUIV="Refresh" CONTENT="0; http://localhost/Hanan/layouts/Home.php">

    <?php
        // php break ...
    }
    else{
        echo "<h4 class='text-danger text-center mt-2'>Something Went Wrong Please check your Program</h4>";
    }



?>

</body>
</html>