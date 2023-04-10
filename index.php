<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ddc1e328a4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>college</title>
</head>
<body>
    <div id="home">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="d-flex ms-4">
                    <img src="img/download.png" alt="" srcset="" style="width: 50px; border-radius: 50%;">
                    <h5 class="d-flex align-items-center ms-2 text-white">LNMCBM</h5>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
                </button> 
                <div class="collapse navbar-collapse justify-content-end me-5" id="navbarSupportedContent" style="flex-grow: 0;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item hover-underline-animation">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item hover-underline-animation">
                            <a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item hover-underline-animation">
                            <a class="nav-link" href="#">contact us</a>
                        </li>
                        <li class="nav-item hover-underline-animation">
                            <a class="nav-link" href="curriculam.html">curriculum</a>
                        </li>
                        <li class="nav-item dropdown hover-underline-animation">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               course
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">BBA</a></li>
                                <li><a class="dropdown-item" href="#">BCA</a></li>
                                <li><a class="dropdown-item" href="#">MBA</a></li>
                                <li><a class="dropdown-item" href="#">MCA</a></li>
                            </ul>
                        </li>
                        <li class="nav-item hover-underline-animation">
                            <a class="nav-link" href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal">Registration</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- carousel -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/carousel1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/crousel2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/carousel3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
          </div>
        <!-- modal -->
        <div class="modal fade shadow" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Registration Form</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex justify-content-center">
                        <form action="" style="width:70%">
                            <input class="form-control mb-3" type="text" placeholder="Name" aria-label="default input example">
                            <input type="email" class="form-control mb-3" id="exampleFormControlInput1" placeholder="E-mail">
                            <input class="form-control mb-3" type="number" placeholder=" Mobile no" aria-label="default input example">
                            <input class="form-control mb-3" type="text" placeholder="Course" aria-label="default input example">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Register</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <h3 class="text-center">COURSE OFFERED</h3>
            <div class="row mt-3 mb-4">
                <div class="col mb-4">
                    <div class="card border-0 shadow rounded" style="background-color: white;">
                        <div class="d-flex justify-content-center align-items-center rounded-top" style="background-color: rgb(223, 83, 64); height: 150px; clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);">
                            <h5 class="text-center text-white">Bachelor of Business Administration</h5>
                        </div>
                        <div class="img" style="z-index: 1;">
                            <img class="rounded-circle" src="img/bba2.png" alt="" srcset="" style="width: 50px; height: 50px; margin-top: -35px; margin-left: 35px;">
                        </div>
                        <div class="card-body pt-3">
                            <p class="card-text mb-1">BBA is a three-year degree course providing practical and theoretical experience in management, business......................... </p>
                            <div class="d-flex justify-content-end mt-2">
                                <h6><a href="#">Know more</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card border-0 shadow rounded" style="background-color: white;">
                        <div class="d-flex justify-content-center align-items-center rounded-top" style="background-color: rgb(223, 83, 64); height: 150px; clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);">
                            <h5 class="text-center text-white">Bachelors's in Computer Application</h5>
                        </div>
                        <div class="img" style="z-index: 1;">
                            <img class="rounded-circle" src="img/bca2.jpg" alt="" srcset="" style="width: 50px; height: 50px; margin-top: -35px; margin-left: 35px;">
                        </div>
                        <div class="card-body pt-3">
                            <p class="card-text mb-1">BCA is a three-year degree course for people who wish to dive into the world of programming language.................................</p>
                            <div class="d-flex justify-content-end mt-2">
                                <h6><a href="#">Know more</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card border-0 shadow rounded" style="background-color: white;">
                        <div class="d-flex justify-content-center align-items-center rounded-top" style="background-color: rgb(223, 83, 64); height: 150px; clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);">
                            <h5 class="text-center text-white"> Master of Computer Application</h5>
                        </div>
                        <div class="img" style="z-index: 1;">
                            <img class="rounded-circle" src="img/mca.jpg" alt="" srcset="" style="width: 50px; height: 50px; margin-top: -35px; margin-left: 35px;">
                        </div>
                        <div class="card-body pt-3">
                            <p class="card-text mb-1">MCA is a programme which comes with a three year duration and is targeted for those aspirants who are...................................</p>
                            <div class="d-flex justify-content-end mt-2">
                                <h6><a href="#">Know more</a></h6>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card border-0 shadow rounded" style="background-color: white;">
                        <div class="d-flex justify-content-center align-items-center rounded-top" style="background-color: rgb(223, 83, 64); height: 150px; clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);">
                            <h5 class="text-center text-white"> Master of Business Administration</h5>
                        </div>
                        <div class="img" style="z-index: 1;">
                            <img class="rounded-circle" src="img/mba.jpg" alt="" srcset="" style="width: 50px; height: 50px; margin-top: -35px; margin-left: 35px;">
                        </div>
                        <div class="card-body pt-3">
                            <p class="card-text mb-1 text-size">A Master of Business Administration is a postgraduate degree focused on business administration..................................</p>
                            <div class="d-flex justify-content-end mt-2">
                                <h6><a href="#">Know more</a></h6>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <footer class="mt-5">
                <div class="row">
                    <div class="col">
                        <h3>L. N. Mishra College Of Business Management, Muzaffarpur</h3>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>