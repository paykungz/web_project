<!DOCTYPE html>
<html>

<head>
    <?php require('config.inc.php')?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Comfortaa|Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="font.css">
    <link rel="stylesheet" href="bg.css">
    <link rel="stylesheet" href="regis.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                $('#menu').hide();
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 250) {
                        $('#menu').fadeIn();
                    } else {
                        $('#menu').fadeOut(500);
                    }
                });
            });
        })(jQuery);
    </script>
    
    <?php
        $first_name = trim($_POST['first_name']);
        $last_name = trim($_POST['last_name']);
        $email = trim($_POST['email']);
        $gender = trim($_POST['gender']);
        $pc = trim($_POST['pc']);
        $pro = trim($_POST['pro']);
        $pass = trim($_POST['password']);
    ?>
    <?php
        $conn = new mysqli($dbserver, $dbuser, $dbpass,$dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        mysqli_query($conn,"SET NAME utf8");
        $sql = "INSERT INTO member(name,last,email,pass,gender,post_code,province) VALUES ('$first_name','$last_name','$email','$pass','$gender',$pc,'$pro')";
    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
        <a class="navbar-brand fontHead" href="#" style="font-size: 50px;color:white"><i class="fa fa-store"></i>Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav"></div>
        </div>
        <a class="nav-item nav-link" style="color: white" href="#"> Contact us: </i></a>
        <img src="img/fb.png" width="38px">
        <img src="img/ig.png" width="50px">
        <a class="nav-item nav-link active" href="#"><button type="button" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Login<span class="sr-only">(current)</span></button></a> |
        <a class="nav-item nav-link active" href="#"> Register <i class="fas fa-user-plus"></i></a>
    </nav>
    <nav id="menu" class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-center fixed-top">
        <a class="navbar-brand fontHead" href="#" style="font-size: 50px;color:white"><i class="fa fa-store"></i>Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav"></div>
        </div>
        <a class="nav-item nav-link" style="color: white" href="#"> Contact us: </i></a>
        <img src="img/fb.png" width="38px">
        <img src="img/ig.png" width="50px">
        <a class="nav-item nav-link active" href="#"><button type="button" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Login<span class="sr-only">(current)</span></button></a> |
        <a class="nav-item nav-link active" href="register.html"> Register <i class="fas fa-user-plus"></i></a>
    </nav>
    <!-- <section>
        <div class="mid" style="padding: 50px 50px">
            <div style="color: rgb(255,255,255);;background: rgba(160, 160, 160, 0.5);padding: 20px 20px;height:500px;">
                <h1><i class="fas fa-address-book"></i> Register Form</h1>
                <div class="containter justify-content-around">
                    <div class="row justify-content-around row-mar">
                        <div class="col-md-6">
                            <div class="input-group input-group-lg" style="width: 100%">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">Name</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group input-group-lg" style="width: 100%">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">LastName</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-around row-mar">
                        <div class="col-md-12">
                            <div class="input-group input-group-lg" style="width: 100%">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-lg" style="width:150px">E-mail</span>
                                </div>
                                <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-around row-mar">
                        <div class="col-md-12">
                            <div class="input-group input-group-lg" style="width: 100%">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-lg" style="width:150px">Password</span>
                                </div>
                                <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section> -->
    <?php
        $sql = 'SELECT id,name,last,email,pass,gender,post_code,province FROM member';
        $result = $conn->query($sql);
        if(mysqli_query($conn,$sql)){
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $name = $row['name'];
                    $last = $row['last'];
                    $email = $row['email'];
                    $pass = $row['pass'];
                    $gender = $row['gender'];
                    $post = $row['post_code'];
                    $pro = $row['province'];
                    echo 
            '<div>
                <div style="padding: 50px 50px">';
                    echo '
                <div class="signup-form2">
                    <form action="confirm.php" method="post">
                        <a href="viewrecord.php?id='.$id.'"><h2>Member ID:'.$id.'</h2></a>
                        <div class="form-group">
                            <div class="row">
                                
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">ชื่อจริง</label>
                                <input type="int" class="form-control" name="pc" placeholder="'.$name.'" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">นามสกุล</label>
                                <input type="int" class="form-control" name="pc" placeholder="'.$last.'" disabled>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="'.$email.'" aria-label="Username" aria-describedby="addon-wrapping" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>เพศ</label>
                                    <select name="gender" class="form-control" disabled>
                                        <option value="male" selected>'.$gender.'</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">รหัสไปรษณีย์</label>
                                <input type="int" class="form-control" name="pc" placeholder="'.$post.'" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">จังหวัด</label>
                                <select name="pro" class="form-control" disabled>
                                        <option selected >'.$pro.'</option>
                                </select>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            ';
            echo '</div>
            </div>';
        }
                }
        }else{
            echo 'ERROR: $sql'.mysqli_error($conn);
        }
    ?>
    
    <?php
        $conn = my
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
</body>

</html>