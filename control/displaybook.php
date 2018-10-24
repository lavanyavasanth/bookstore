<?php   
    require("../../model/db.php");
    $select_query = $conn->prepare("SELECT * FROM book");
    $select_query->execute();
    $select_query->setFetchMode(PDO:: FETCH_ASSOC);    
    
    while($row = $select_query->fetch()):
?>
    <div class="holder">
<?php
    
    echo '<img src="../img/BookCovers/'.$row['BookCover'].'">';
    echo "<h5>".$row['BookTitle']."</h5><h5> ".$row['LanguageWritten']."</h5>";
?>          
    <a href ="updatebook.php?updateBook=<?php echo $row['BookID']; ?>">Edit</a>

        <a href = "deletebook.php?deleteBook=<?php echo $row['BookID']; ?>">Delete</a>
    </div>
    
<?php
    endwhile;
?>