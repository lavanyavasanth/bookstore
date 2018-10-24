<?php
require("../model/db.php");
require("../model/function.php");
//require("../control/pagesecurity.php");
if (!empty([$_POST]))
{
 $username = !empty($_POST['username'])? testUserInput(($_POST['username'])): null;
 $password = !empty($_POST['password'])? testUserInput(($_POST['password'])): null;
 try
{
$stmt = $conn->prepare("SELECT Username, Password, Role, user.UserID FROM login INNER JOIN user ON user.UserID = login.UserID WHERE username = :user");
$stmt->bindParam(':user', $username);
$stmt->execute();
$rows = $stmt -> fetch();
$user = $rows['Username'];
$pass = $rows['Password'];
$role = $rows['Role'];
$UserID = $rows['UserID'];
if($username == $user && password_verify($password, $pass) ){
    session_start();
    $_SESSION["username"] = $username;
	$_SESSION["password"] = $password;
    $_SESSION['role'] = $role;
    $_SESSION['UserID'] = $UserID;
	   header('location:../view/pages/viewall_book.php');
    
}  
else {
	  header('location:../login.php');
}
}
	catch(PDOException $e)
	{
	echo "Account creation problems".$e -> getMessage();
	die();
	}
}
?>

