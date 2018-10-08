<?php   
    require("../../model/db.php");
    $select_query = $conn->prepare("SELECT BookTitle, LanguageWritten, BookCover FROM book");
    $select_query->execute();
    $select_query->setFetchMode(PDO:: FETCH_ASSOC);    
    
    while($row = $select_query->fetch()):
?>
    <div class="holder">
<?php
    echo '<img src="'.$row['BookCover'].'">';
    echo "<h5>".$row['BookTitle']."</h5><h5> ".$row['LanguageWritten']."</h5>";
?>
    <form method = 'post'>
        <button id='but' name = 'edit'>Edit</button>
        <button id='but' name = 'delete'>Delete</button>
    </form>
    </div>
    
<?php
    endwhile;
?>
        
        

