<?php 
    require_once('header.php');
?>
<?php
$showalert = false;
$showerror = false;
if($showalert){
    echo '<div class="alert alert-success" role="alert">
    Your account is succesfully created.
</div>'; 
}
if($showerror){
    echo '<div class="alert alert-danger" role="alert">
    your password and confirm password is not same.
</div>'; 
}
?>
    <div id="home">
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
        <!-- Registration modal -->
        <div class="modal fade shadow border-0" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Registration Form</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex justify-content-center">
                        <form action="databaseconnection.php" method="post" style="width:70%">
                            <input class="form-control mb-3" id="fname" name="fname" type="text" placeholder="Name" aria-label="default input example">
                            <input type="email" class="form-control mb-3" id="email" name="email" placeholder="E-mail">
                            <input class="form-control mb-3" type="number" placeholder=" Mobile no" id="mobile_no" name="mobile_no" aria-label="default input example">
                            <input class="form-control mb-3" type="text" placeholder="Course" id="course" name="course" aria-label="default input example">
                            <input type="password" class="form-control mb-3" id="Password" name="password" placeholder="Password">
                            <input type="password" class="form-control mb-3" id="confirmPassword" name="confirmpassword" placeholder=" confirm password">
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade shadow border-0" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="loginModalLabel">Login</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="login.php" method="post" style="width:80%">
                            <input type="email" class="form-control mb-3" id="email" name="email" placeholder="E-mail">
                            <input type="password" class="form-control" id="inputPassword" placeholder="password" name="pass">
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Login</button>
                            </div>
                        </form>
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
<?php
    require_once('footer.php');
?>        