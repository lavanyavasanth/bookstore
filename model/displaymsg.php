    <?php
    if(isset($_SESSION['error'])){
        if ( $_SESSION[ 'error' ] != "" ) {
        echo '<div class="alert alert-danger">' . $_SESSION[ 'error' ] . '</div>';
        unset($_SESSION['error']);
        }
    }
    if(isset($_SESSION['message'])){
        if ( $_SESSION[ 'message' ] != "" ) {
        echo '<div class="alert alert-success">' . $_SESSION[ 'message' ] . '</div>';
        unset($_SESSION['message']);
        }
    }
    ?>