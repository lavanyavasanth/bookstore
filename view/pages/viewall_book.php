<?php 
include('header.php');
include('navbar.php');?>
<div class="flex-container">    
    <article>    
<?php 
    if ( $_SESSION[ 'role' ] == 'Admin' || $_SESSION[ 'role' ] == 'User' ) {
        echo "Role:".$_SESSION["role"];
        include("../../control/displaybook.php");
    }
    else{
        header( "location: ../../login.php" );  
    }
?>        
    </article>
</div>
<?php include('footer.php');?>