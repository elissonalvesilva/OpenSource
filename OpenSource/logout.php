<?php @ob_start();session_start();?>
<?php
if(isset($_SESSION['Usuario'])|| isset($_SESSION['idRa']))

{

    session_destroy();

    header("location: Login.php");

    exit();

}
