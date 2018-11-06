<?php 
include('header.php');
include('navbar.php');?>
<div class="container" style=" height:10%;"><?php echo "<b>Role:</b>".$_SESSION["role"]; ?></div>
<div class="fluid-container" style=" height:10%;"><?php include("../../model/displaymsg.php"); ?></div>

<div class="flex-container"> 
    
    <article>    
<?php 
    if ( $_SESSION[ 'role' ] == 'Admin' || $_SESSION[ 'role' ] == 'User' ) {
        $_SESSION[ "message" ] = "Book added successfully!!!";
        include("../../control/displaybook.php");
    }
    else{
        header( "location: ../../login.php" );  
    }
?>        
    </article>
</div>
<?php include('footer.php');?>