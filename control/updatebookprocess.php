<?php
require("../model/db.php");
require("../model/function.php");
//date_default_timezone_set('Australia/Brisbane');
//$mydate = date('Y-m-d H:i:s');
if(isset($_POST['bookid'])){
    $bookid = $_POST['bookid'];
    $booktitle = $_POST['booktitle'];
    $originaltitle = $_POST['originaltitle'];
    $yearofpublication = $_POST['yearofpublication'];
    $genre = $_POST['genre'];
    $millionssold = $_POST['millionssold'];
    $languagewritten = $_POST['languagewritten'];
    $bookcover = $_POST['bookcover'];
    try{
        updateBook($bookid, $booktitle, $originaltitle, $yearofpublication, $genre, $millionssold, $languagewritten, $bookcover);
//        $mydate = '2018-10-24 16:08:12';
        $myuser = $_SESSION['UserID'];
    
        updateBookLog($bookid,$myuser);
        
        header('location:../view/pages/viewall_book.php');
    }
    catch(PDOException $e){
        echo "Error".$e -> getMessage();
        die();
    }
} 
?>