<?php
    session_start();
    require('config.inc.php');
    $name = trim($_POST["name"]);
    $pass = trim($_POST["pass"]);

    if($name != "" and $pass != ""){
        $conn = new mysqli($dbserver,$dbuser,$dbpass,$dbname);
        if(!$conn) { die("Conention failed");}

        $sql = "SELECT name,passworld FROM member WHERE name='$name'";
        $dbquery = mysqli_query($conn,$sql);
        $result = mysqli_fetch_array($dbquery);
        if(!$result){
            echo("Could not login! returning login page");
            $url = $_SERVER['HTTP_REFERER']; // right back to the referrer page from where you came.
            echo '<meta http-equiv="refresh" content="2;URL=' . $url . '">';
        }
        $hash_psw = hash('sha512',$pass);
        if($hash_psw == $result['passworld']){
            $_SESSION['ses_user'] = $name;
            $_SEESION['state'] = 1;
            echo '<html>';
            echo '<meta http-equiv="refresh" content="0.2;URL=home.php">';
            echo '</html>';
            exit;
        }else{
            echo'wrong login info!';
            $url = $_SERVER['HTTP_REFERER']; // right back to the referrer page from where you came.
            echo '<meta http-equiv="refresh" content="1;URL=' . $url . '">';
        }
    }else{
        echo 'please enter login info';
    }
?>