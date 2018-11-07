<?php   
    require("../../model/db.php");// selecting book table from database
    $select_query = $conn->prepare("SELECT * FROM book INNER JOIN author ON book.AuthorID = author.AuthorID ");
    $select_query->execute();
    $select_query->setFetchMode(PDO:: FETCH_ASSOC);    
    
    while($row = $select_query->fetch()) {
?>
<div class="holder">
<?php
//    include("../../model/displaymsg.php");
    if($row['BookCover'] == ""){
        echo'<img src = "../img/BookCovers/default.png">';// display default image if user doesn't select image
    }else{
        echo '<img src="../img/BookCovers/'.$row['BookCover'].'">';//display the selected image
    }
        
    echo "<h5 class='name'><b>Name: </b>".$row['Name']."</h5><h5 class='sur'><b>Surname: </b>".$row['Surname']."</h5><h5 class='title'><b>Title: </b>".$row['BookTitle']."</h5><h5 class='sold'><b>MillionsSold: </b>".$row['MillionsSold']."</h5><h5 class='yop'><b>YOP: </b>".$row['YearofPublication']."</h5>";
?> 
<!--    displays book and author detail-->
    <div class="link" style="padding-left: 13%;">
        <a href ="updatebook.php?updateBook=<?php echo $row['BookID']; ?>">Edit</a>

        <a href = "delbook.php?deleteBook=<?php echo $row['BookID']; ?>">Delete</a>
    </div>
</div>
    
<?php
    }
?>