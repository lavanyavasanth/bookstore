<?php include('header.php');?>
<?php include('navbar.php');?>
<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Add Book</div>
                <div class="panel-body">
                    <form role="Form" method="POST" action="../../control/managebook.php" accept-charset="UTF-8">
                        <fieldset>
                            <legend>Author Detail</legend>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-control" name="name" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label for="surname">Surname</label>
                                <input type="text" id="surname" class="form-control" name="surname" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label for="nationality">Nationality</label>
                                <input type="text" id="nationality" class="form-control" name="nationality" placeholder="" required>
                            </div>
                             <div class="form-group">
                                <label for="birthyear">Birthyear</label>
                                <input type="text" id="birthyear" class="form-control" name="birthyear" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label for="deathyear">DeathYear</label>
                                <input type="text" id="deathyear" class="form-control" name="deathyear" placeholder="" required>
                            </div>                
                        </fieldset>
                        <fieldset>
                            <legend>Book Detail</legend>
                            <div class="form-group">
                                <label for="booktitle">Book Title</label>
                                <input type="text" id="booktitle" class="form-control" name="booktitle" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label for="originaltitle">Original Title</label>
                                <input type="text" id="originaltitle" class="form-control" name="originaltitle" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label for="yearofpublication">Year Of Publication</label>
                                <input type="text" id="yearofpublication" class="form-control" name="yearofpublication" placeholder="" required>
                            </div>
                             <div class="form-group">
                                <label for="genre">Genre</label>
                                <input type="text" id="genre" class="form-control" name="genre" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label for="millionssold">Millions Sold</label>
                                <input type="text" id="millionssold" class="form-control" name="millionssold" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label for="language">Language Written</label>
                                <input type="text" id="language" class="form-control" name="languagewritten" placeholder="" required>
                            </div>

                            <div class="form-group">
                                <label for="bookcover">Book Cover</label>
                                <input type="file" id="bookcover" class="form-control" name="bookcover" placeholder="" required>
                            </div>                        
                            <div class="form-group text-center">
                                <input type="submit" class="btn btn-primary btn-lg" id="submitbtn" name="submit" value="Add">
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>