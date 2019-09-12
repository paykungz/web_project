<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<?php
    $email1 = $_POST["email1"];
    $pass1 = $_POST["pass1"];
    $email2 = $_POST["email2"];
    $pass2 = $_POST["pass2"];
    $email3 = $_POST["email3"];
    $pass3 = $_POST["pass3"];
    echo 'pass = '.$pass2.'
    <h1>Input </h1>
    <div class="jumbotron">
        <div class="container-fruid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                    <img src="'.$pass1.'.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">'.$email1.'</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                    <img src="'.$pass2.'.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">'.$email2.'</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                    <img src="'.$pass3.'.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">'.$email3.'</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
    echo '
    <h1>Check</h1>
    <div class="jumbotron">';
  echo $_SERVER['PHP_SELF'].'<br>';
  echo $_SERVER['SERVER_NAME'].'<br>';
  echo $_SERVER['HTTP_HOST'].'<br>';
  echo $_SERVER['HTTP_REFERER'].'<br>';
  echo $_SERVER['HTTP_USER_AGENT'].'<br>';
  echo $_SERVER['SCRIPT_NAME'].'<br>';
  echo $_SERVER['REMOTE_ADDR'].'<br>';
  echo '</div>';
?>
</body>

</html>