<?php
function testUserInput($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}

function addUser($firstname, $lastname, $email, $role, $username, $password){
 	global $conn;
    try
    {
    $conn->beginTransaction();
    $sql = "INSERT INTO user(FirstName, LastName, Email, Role) VALUES (:firstname, :lastname, :email, :role)";
 	$stmt = $conn->prepare($sql);
 	$stmt->bindValue(':firstname', $firstname);
 	$stmt->bindValue(':lastname', $lastname);
    $stmt->bindValue(':email', $email);
 	$stmt->bindValue(':role', $role);
 	$result = $stmt->execute();
        
    $lastUserid = $conn->lastInsertId();
    
    
    $sql = "INSERT INTO login(Username, Password, UserID) VALUES (:username, :password, :UserID)";   
    $stmt = $conn->prepare($sql);
 	$stmt->bindValue(':username', $username);
 	$stmt->bindValue(':password', $password);
    $stmt->bindValue('UserID', $lastUserid);
 	$stmt->execute();
        
    $conn->commit();
    }
 	
    catch (PDOException $ex){
        $conn->rollBack();
        echo $ex->getMessage();
    }
}

function addBook($name, $surname, $nationality, $birthyear, $deathyear, $booktitle, $originaltitle, $yearofpublication, $genre, $millionssold, $languagewritten, $bookcover){
    global $conn;
    try{
        $conn->beginTransaction();
        $displayauthor = "INSERT INTO author(Name, Surname, Nationality, BirthYear, DeathYear) VALUES(:name, :surname, :nationality, :birthyear, :deathyear)";
        $stmt = $conn->prepare($displayauthor);
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':surname', $surname);
        $stmt->bindValue(':nationality', $nationality);
        $stmt->bindValue(':birthyear', $birthyear);
        $stmt->bindValue(':deathyear', $deathyear);
        $result = $stmt->execute();
    
        $lastauthorid = $conn->lastInsertId();
        
        $displaybook = "INSERT INTO book(BookTitle, OriginalTitle, YearofPublication, Genre, MillionsSold, LanguageWritten, BookCover, AuthorID) VALUES(:booktitle, :originaltitle, :yearofpublication, :genre, :millionssold, :languagewritten, :bookcover, :AuthorID)";
        $stmt = $conn->prepare($displaybook);
 	    $stmt->bindValue(':booktitle', $booktitle);
 	    $stmt->bindValue(':originaltitle', $originaltitle);
        $stmt->bindValue('yearofpublication', $yearofpublication);
 	    $stmt->bindValue(':genre', $genre);
 	    $stmt->bindValue(':millionssold', $millionssold);
        $stmt->bindValue('languagewritten', $languagewritten);
        $stmt->bindValue(':bookcover', $bookcover);
        $stmt->bindValue('AuthorID', $lastauthorid);
 	    $stmt->execute();
        
//        $lastbookid = $conn->lastInsertId();
//        
//        $displaylog = "INSERT INTO booklog(CreatedDate, ModifiedDate, BookID, UserID) VALUES (NOW(), NOW(), :BookID, :UserID)";
//        $stmt = $conn->prepare($displaylog);
//        $stmt->bindValue(':BookID', $lastbookid);
//        $stmt->bindValue(':UserID', $lastUserid);
//        $stmt->execute();
        
        $conn->commit();
    }
      catch (PDOException $ex){
        $conn->rollBack();
        echo $ex->getMessage();
    }
}
?>