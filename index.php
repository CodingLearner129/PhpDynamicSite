<?php
    include "header.php";
?>
    <!-- Slider img Start -->
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="./img/bg_2.jpg" alt="Los Angeles" width="1100" height="500">
            <div class="carousel-caption">
                <h3>Los Angeles</h3>
                <p>We had such a great time in LA!</p>
            </div>   
            </div>
            <div class="carousel-item">
            <img src="./img/bg_0.jpg" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption">
                <h3>Chicago</h3>
                <p>Thank you, Chicago!</p>
            </div>   
            </div>
            <div class="carousel-item">
            <img src="./img/bg_1.jpg" alt="New York" width="1100" height="500">
            <div class="carousel-caption">
                <h3>New York</h3>
                <p>We love the Big Apple!</p>
            </div>   
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!-- Slider img End -->

    <!-- About Us Start -->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="./img/bg_10.jpg" class="img-fluid aboutimg" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">I am Dhgp</h2>
                    <p class="py-5" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum soluta ex consequatur assumenda tempore magni. Quos est veritatis fugiat dolorum, repellendus nesciunt omnis laboriosam aperiam quas eveniet corporis odio illum exercitationem suscipit pariatur ea, doloremque deserunt quis repellat placeat explicabo.</p>
                    <a href="about.php" class="btn btn-success"> Know More </a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->

<?php
    include "our_service.php";
    include "our_gallary.php";
    include "contact_us.php";
    include "footer.php";
?>