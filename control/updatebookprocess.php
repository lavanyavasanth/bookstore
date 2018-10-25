<?php
require("../model/db.php");
require("../model/function.php");
//date_default_timezone_set('Australia/Brisbane');
//$mydate = date('Y-m-d H:i:s');
//        if(isset($_POST['authorid'])){
//            $authorid = $_POST['authorid'];
//            $name = $_POST['name'];
//            $surname = $_POST['surname'];
//            $nationality = $_POST['nationality'];
//            $birthyear = $_POST['birthyear'];
//            $deathyear = $_POST['deathyear'];  
if(isset($_POST['authorid'])){
    $authorid = $_POST['authorid'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $nationality = $_POST['nationality'];
    $birthyear = $_POST['birthyear'];
    $deathyear = $_POST['deathyear'];
    $bookid = $_POST['bookid'];
    $booktitle = $_POST['booktitle'];
    $originaltitle = $_POST['originaltitle'];
    $yearofpublication = $_POST['yearofpublication'];
    $genre = $_POST['genre'];
    $millionssold = $_POST['millionssold'];
    $languagewritten = $_POST['languagewritten'];
    $bookcover = $_POST['bookcover'];
    
 
        try{
            updateAuthor($authorid, $name, $surname, $nationality, $birthyear, $deathyear);
            updateBook($bookid, $booktitle, $originaltitle, $yearofpublication, $genre, $millionssold, $languagewritten, $bookcover);


            $myuser = $_SESSION['UserID'];

            updateBookLog($bookid,$myuser);

            header('location:../view/pages/viewall_book.php');
        }
        catch(PDOException $e){
            echo "Error".$e -> getMessage();
            die();
        }
    //} 
}
        
?>