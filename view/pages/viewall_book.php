<?php include('header.php');?>
<?php include('navbar.php');?>
<div class="flex-container">    
    <article>    
<?php 
    echo "Role:".$_SESSION["role"];
    include("../../control/displaybook.php");
?>        
    </article>
</div>
<?php include('footer.php');?>