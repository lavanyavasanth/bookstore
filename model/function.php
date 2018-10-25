<?php
session_start();
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
    $stmt->bindValue(':UserID', $lastUserid);
 	$stmt->execute();
    
    
    $conn->commit();
    }
 	
    catch (PDOException $ex){
        $conn->rollBack();
        echo $ex->getMessage();
    }
}
//*************Insert Book***********************//
date_default_timezone_set('Australia/Brisbane');
$date = date('Y-m-d H:i:s');
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
        $stmt->bindValue(':yearofpublication', $yearofpublication);
 	    $stmt->bindValue(':genre', $genre);
 	    $stmt->bindValue(':millionssold', $millionssold);
        $stmt->bindValue(':languagewritten', $languagewritten);
        $stmt->bindValue(':bookcover', $bookcover);
        $stmt->bindValue(':AuthorID', $lastauthorid);
 	    $result = $stmt->execute();
        
        $lastbookid = $conn->lastInsertId();
                
        $displaylog = "INSERT INTO booklog(CreatedDate, ModifiedDate, BookID, UserID) VALUES (NOW(),NOW(), :BookID, :UserID)";
        $stmt = $conn->prepare($displaylog);
        $stmt->bindValue(':BookID', $lastbookid);
        $stmt->bindValue(':UserID', $_SESSION['UserID']);
        $stmt->execute();
        
        $conn->commit();
    }
      catch (PDOException $ex){
        $conn->rollBack();
        echo $ex->getMessage();
    }
}
//*************Insert Book***********************//

//*************Update Book***********************//
function updateAuthor($authorid, $name, $surname, $nationality, $birthyear, $deathyear){
    global $conn;
    $updateauthor = "UPDATE author SET Name = :name, Surname = :surname, Nationality = :nationality, BirthYear = :birthyear, DeathYear =:deathyear WHERE AuthorID= :AuthorID";
    $stmt = $conn->prepare($updateauthor);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':surname', $surname);
    $stmt->bindValue(':nationality', $nationality);
    $stmt->bindValue(':birthyear', $birthyear);
    $stmt->bindValue(':deathyear', $deathyear);
    $stmt->bindValue(':AuthorID', $authorid);
    $result = $stmt->execute();    
}
function updateBook($bookid, $booktitle, $originaltitle, $yearofpublication, $genre, $millionssold, $languagewritten, $bookcover){
        global $conn;
        $updatebook = "UPDATE book SET BookTitle= :booktitle, YearofPublication= :yearofpublication, Genre= :genre, MillionsSold= :millionssold, LanguageWritten= :languagewritten, BookCover= :bookcover WHERE BookID= :BookID";
        $stmt = $conn->prepare($updatebook);
        $stmt->bindValue(':booktitle', $booktitle);
        $stmt->bindValue(':yearofpublication', $yearofpublication);
        $stmt->bindValue(':genre', $genre);
        $stmt->bindValue(':millionssold', $millionssold);
        $stmt->bindValue(':languagewritten', $languagewritten);
        $stmt->bindValue(':bookcover', $bookcover);
        $stmt->bindValue(':BookID', $bookid);
        $result = $stmt->execute();
    }
            
function updateBookLog($bookid,$myuser){
        global $conn;
        $displaylog = "Update booklog SET ModifiedDate = NOW(), UserID =:UserID WHERE BookID= :BookID";
//            $displaylog = "INSERT INTO booklog(ModifiedDate, BookID, UserID) VALUES (NOW(), :BookID,:UserID)";
        $stmt = $conn->prepare($displaylog);
        $stmt->bindValue(':BookID', $bookid);
        $stmt->bindValue(':UserID', $myuser);
        $stmt->execute();
}
//        $conn->commit();

//*************Update Book***********************//

