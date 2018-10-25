<?php
require("../model/db.php");
require("../model/function.php");
if(!empty([$_POST]))
{
    $name = !empty($_POST['name'])? testUserInput(($_POST['name'])):null;
    $surname = !empty($_POST['surname'])? testUserInput(($_POST['surname'])):null;
    $nationality = !empty($_POST['nationality'])? testUserInput(($_POST['nationality'])):null;
    $birthyear = !empty($_POST['birthyear'])? testUserInput(($_POST['birthyear'])):null;
    $deathyear = !empty($_POST['deathyear'])? testUserInput(($_POST['deathyear'])):null;
    $booktitle = !empty($_POST['booktitle'])? testUserInput(($_POST['booktitle'])):null;
    $originaltitle = !empty($_POST['originaltitle'])? testUserInput(($_POST['originaltitle'])):null;
    $yearofpublication =  !empty($_POST['yearofpublication'])? testUserInput(($_POST['yearofpublication'])):null;
    $genre = !empty($_POST['genre'])? testUserInput(($_POST['genre'])):null;
    $millionssold = !empty($_POST['millionssold'])? testUserInput(($_POST['millionssold'])):null;
    $languagewritten = !empty($_POST['languagewritten'])? testUserInput(($_POST['languagewritten'])):null;
    $bookcover = !empty($_POST['bookcover'])? testUserInput(($_POST['bookcover'])):null;

    try
    {
        
        $queryBook = addBook($name, $surname, $nationality, $birthyear, $deathyear, $booktitle, $originaltitle, $yearofpublication, $genre, $millionssold, $languagewritten, $bookcover);
        
        header('location:../view/pages/viewall_book.php');        
        
    }

      catch(PDOException $e)
        {
        echo "Error".$e -> getMessage();
        die();
        }
}
?>