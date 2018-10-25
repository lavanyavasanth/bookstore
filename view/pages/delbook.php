<?php 
include('../../model/db.php');
if (isset($_GET['deleteBook'])){
    $bookid = $_GET['deleteBook'];
   
    $bookid = $_GET['deleteBook'];
    $deletebook = "DELETE FROM book WHERE BookID = '$bookid'";    
    $stmt = $conn->prepare($deletebook);
    $stmt->execute();
    
    
    $deletelog = "DELETE FROM booklog WHERE BookID = '$bookid'";
     $stmt = $conn->prepare($deletelog);
    $stmt->execute();
    
    header('location: viewall_book.php');
}
?>