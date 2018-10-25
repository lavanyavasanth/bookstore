<?php 
include('header.php');
include('navbar.php');
include('../../model/db.php');


    
    if (isset($_GET['updateBook'])){
    $BookID = $_GET['updateBook'];
    $sel_book = $conn->prepare("SELECT * FROM book where BookID= :BookID");
    $sel_book->bindParam(':BookID', $BookID);
    $sel_book->execute();
    $row = $sel_book->fetch();

    $BookTitle = $row['BookTitle'];
    $OriginalTitle = $row['OriginalTitle'];
    $YearofPublication = $row['YearofPublication'];
    $Genre = $row['Genre'];
    $MillionsSold = $row['MillionsSold'];
    $LanguageWritten = $row['LanguageWritten'];
    $BookCover = $row['BookCover'];
        
    $AuthorID = $_GET['updateBook'];
    $sel_author = $conn->prepare("SELECT * FROM author WHERE AuthorID = :AuthorID");
    $sel_author->bindparam(':AuthorID', $AuthorID);
    $sel_author->execute();
    $rows = $sel_author->fetch();

    $Name = $rows['Name'];
    $Surname = $rows['Surname'];
    $Nationality = $rows['Nationality'];
    $BirthYear = $rows['BirthYear'];
    $DeathYear = $rows['DeathYear'];

?>
<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Update Book</div>
                <div class="panel-body">
                    <form role="Form" method="POST" action="../../control/updatebookprocess.php" accept-charset="UTF-8">
                        <input type="hidden" name="authorid" value="<?php echo $AuthorID; ?>">
                        <fieldset>
                            <legend>Author Detail</legend>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-control" name="name" value="<?php echo $Name; ?>">
                            </div>
                            <div class="form-group">
                                <label for="surname">Surname</label>
                                <input type="text" id="surname" class="form-control" name="surname" value="<?php echo $Surname; ?>">
                            </div>
                            <div class="form-group">
                                <label for="nationality">Nationality</label>
                                <input type="text" id="nationality" class="form-control" name="nationality" value="<?php echo $Nationality; ?>">
                            </div>
                             <div class="form-group">
                                <label for="birthyear">Birthyear</label>
                                <input type="text" id="birthyear" class="form-control" name="birthyear" value="<?php echo $BirthYear; ?>">
                            </div>
                            <div class="form-group">
                                <label for="deathyear">DeathYear</label>
                                <input type="text" id="deathyear" class="form-control" name="deathyear" value="<?php echo $DeathYear; ?>">
                            </div>                
                        </fieldset>
                        <fieldset>
                            <input type="hidden" name="bookid" value="<?php echo $BookID; ?>">
                            <legend>Book Detail</legend>
                            <div class="form-group">
                                <label for="booktitle">Book Title</label>
                                <input type="text" id="booktitle" class="form-control" name="booktitle" value="<?php echo $BookTitle; ?>">
                            </div>
                            <div class="form-group">
                                <label for="originaltitle">Original Title</label>
                                <input type="text" id="originaltitle" class="form-control" name="originaltitle" value = "<?php echo $OriginalTitle; ?>">
                            </div>
                            <div class="form-group">
                                <label for="yearofpublication">Year Of Publication</label>
                                <input type="text" id="yearofpublication" class="form-control" name="yearofpublication" value="<?php echo $YearofPublication; ?>" >
                            </div>
                             <div class="form-group">
                                <label for="genre">Genre</label>
                                <input type="text" id="genre" class="form-control" name="genre" value="<?php echo $Genre; ?>">
                            </div>
                            <div class="form-group">
                                <label for="millionssold">Millions Sold</label>
                                <input type="text" id="millionssold" class="form-control" name="millionssold" value="<?php echo $MillionsSold; ?>">
                            </div>
                            <div class="form-group">
                                <label for="language">Language Written</label>
                                <input type="text" id="language" name="languagewritten" class="form-control" value="<?php echo $LanguageWritten; ?>">
                            </div>

                            <div class="form-group">
                                <label for="bookcover">Book Cover</label>
                                <input type="file" id="bookcover" class="form-control" name="bookcover" value = "<?php echo $BookCover; ?>">
                            </div>                        
                            <div class="form-group text-center">
                                <input type="submit" class="btn btn-primary btn-lg" id="submitbtn" name="update" value="Update">
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php 
    
}
    include('footer.php'); 
?>