<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Comfortaa|Russo+One&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="font.css">
    <link rel="stylesheet" href="bg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        nav{
            position: fixed;
            background: rgba(0, 0, 0, 0.2);
            padding: 0px 20px;

        }
        nav li a:hover{
            background: red;
        }
    </style>
</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Shop</a>
            <ul class="right hide-on-med-and-down">
                <li><a>Home</a></li>
                <li><a>Test1</a></li>
                <li><a>Test2</a></li>
            </ul>
        </div>
    </nav>
    <section>
    <div class="bgMain" style="height: 700px;margin:0px 0px 0px 0px" width="100%">
        <div style="background: violet" width="100%" height="1000px">
            <div class="bg-in" style="background:black;width:500px;height:95%;float:left">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/hyperX.jpg" height=200px class="w-100" style="height:625px" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/2.jpg" height=200px class="w-100" style="height:625px" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/hyperX.jpg" height=200px class="w-100" style="height:625px" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="bg-left" style="width:700px;height:60%;float:left">
                <p class="fontDetail">Best Experience</p>
                <a href="main.php"><button type="button" class="btn btn-primary" style="font-size:30px;width:300px" >Go <i class="fas fa-chevron-circle-right"></i></button></a>
            </div>
        </div>
    </div>
    </section>
    <center>
        <div class="bg2" style="height:1000px">
            <div style="background:white;width:80%;height:100%">
                <div class="container" style="width:80%;">
                    <div class="row justify-content-around" style="padding:10px 0px 0px 0px;">
                        <div class="col-md-4 bg-mouse" style="vertical-align: middle;padding: 60px">
                            <p class="fontMain" style="color:rgb(255, 255, 255);font-size:50px">Mouse</p>
                            <a href="main.php"><button type="button" class="btn btn-primary" style="font-size:30px" > <i class="fas fa-eye"></i> View</button></a>
                        </div>
                        <div class=" col-md-4 bg-key" style="vertical-align: middle;padding: 60px">
                            <p class="fontMain " style="color:rgb(255, 255, 255);font-size:50px ">Keyboard</p>
                            <a href="main.php"><button type="button" class="btn btn-primary" style="font-size:30px" ><i class="fas fa-eye"></i> View </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
    <script>
        $(document).ready(function(){
            $(window).scroll(function(){
                if($(window).scrollTop()>50){
                    $('nav').addClass('red');
                }else{
                    $('nav').removeClass('red');
                }
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
</body>

</html>