<?php
require("../model/db.php");
require("../model/function.php");

if(!empty([$_POST]))
{ //sanitizing the input and fetching the values 
    $username = !empty($_POST['username'])? testUserInput(($_POST['username'])):null;
    $mypass = !empty($_POST['password'])? testUserInput(($_POST['password'])):null;
    $firstname = !empty($_POST['firstname'])? testUserInput(($_POST['firstname'])):null;
    $lastname = !empty($_POST['lastname'])? testUserInput(($_POST['lastname'])):null;
    $email = !empty($_POST['email'])? testUserInput(($_POST['email'])):null;
    $role = !empty($_POST['role'])? testUserInput(($_POST['role'])):null;
    $password = password_hash($mypass, PASSWORD_DEFAULT);
    try
    {        
        $querySuccess = addUser($firstname, $lastname, $email, $role, $username, $password);        
        $_SESSION[ "message" ] = "User created successfully!!!";
        header('location:../login.php');       
    }
      catch(PDOException $e)
        {
        echo "Error".$e -> getMessage();
        die();
        }
}

?>