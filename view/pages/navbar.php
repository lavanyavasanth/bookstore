<?php session_start(); ?>
<body>
    <nav class="navbar navbar-inverse" style="background-color: #f2eff4; color: black;">
        <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <a class="navbar-brand" href="viewall_book.php">BOOKSTORE</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav" style="color: black; font-weight:bold">
    
                  <?php if($_SESSION["role"] == 'User'){
                    echo'<li><a href="viewall_book.php">Home</a></li>';
                    
                    echo'<li><a href="addbook.php">Add Book</a></li>';
                    echo'<li><a href="viewall_book.php">View Book</a></li>';
                    echo'<li><a href="logout.php">Log Out</a></li>';
                    
                
                  }
                  ?>
                  <?php if($_SESSION["role"] == 'Admin'){
                    echo'<li><a href="viewall_book.php">Home</a></li>';
                    echo '<li><a href="signup.php">Add User</a></li>';
                    echo'<li><a href="addbook.php">Add Book</a></li>';
                    echo'<li><a href="viewall_book.php">View Book</a></li>';
                    echo'<li><a href="logout.php">Log Out</a></li>';
                  }
                  ?>
              </ul>
            </div>
<!--
            <div class="navbar-header" style="float:left;padding-left:45%;font-weight:bold;">
                  <?php echo "Role:".$_SESSION["role"]; ?>
        </div>
-->
        </div>
        
    </nav>