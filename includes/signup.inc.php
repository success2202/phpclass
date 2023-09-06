<?php
if(isset($_POST['submit'])){

    //grabbing the data
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $rep_pass = $_POST['repassword'];
    $email = $_POST['email'];


    //instantiate signup controller class
    include "../classes/dbh.class.php";
    include "../classes/signup.class.php";
    include "../classes/signup-contr.class.php";

    $signup = new SignupContr($username, $pass, $rep_pass, $email);
    //sunning error handlers and user signup
    $signup->signupUser();
    //going back to the front page 
    header("location: ../index.php?errornone");
}