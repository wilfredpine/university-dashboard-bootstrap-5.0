<?php 
require_once("landing/header.php");
require_once("landing/navbar.php");
require_once("landing/secondary_navbar.php");
?>



<div id="myCarousel" class="carousel slide p-0 m-0" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">

            <img src="public/img/banner.png" width="100%" alt="">

            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>University Dashboard</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Faucibus purus in massa tempor nec feugiat nisl
                        pretium
                        fusce. A erat nam at lectus urna duis convallis. Amet mattis vulputate enim nulla aliquet.
                        Quam
                        pellentesque nec nam aliquam sem et. Congue quisque egestas diam in arcu cursus euismod.
                        Elementum
                        sagittis vitae et leo duis ut diam quam. </p>
                    <p><a class="btn btn-sm btn-danger" href="">Get In Touch</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="carousel-item">

            <img src="public/img/banner.png" width="100%" alt="">

            <div class="container">
                <div class="carousel-caption">
                    <h1>Who We Are</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Faucibus purus in massa tempor nec feugiat nisl
                        pretium
                        fusce. A erat nam at lectus urna duis convallis. Amet mattis vulputate enim nulla aliquet.
                        Quam
                        pellentesque nec nam aliquam sem et. Congue quisque egestas diam in arcu cursus euismod.
                        Elementum
                        sagittis vitae et leo duis ut diam quam. </p>
                    <p><a class="btn btn-sm btn-danger" href="">Be With Us</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="carousel-item">

            <img src="public/img/banner.png" width="100%" alt="">

            <div class="container">
                <div class="carousel-caption text-end">
                    <h1>University Dashboard</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Faucibus purus in massa tempor nec feugiat nisl
                        pretium
                        fusce. A erat nam at lectus urna duis convallis. Amet mattis vulputate enim nulla aliquet.
                        Quam
                        pellentesque nec nam aliquam sem et. Congue quisque egestas diam in arcu cursus euismod.
                        Elementum
                        sagittis vitae et leo duis ut diam quam. </p>
                    <p><a class="btn btn-sm btn-danger" href="">Browse gallery</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Main -->
<main class="container pb-5">

    <!--  -->
    <div class="row g-5 mt-3">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 border-bottom">
                <b>Latest Trends</b>
            </h3>

            <article class="blog-post">
                <!-- title -->
                <h2 class="blog-post-title">Landing Page</h2>

                <!-- author -->
                <p class="blog-post-meta">January 3, 2022 by <a href="#">Juan dela Cruz</a>
                </p>

                <!-- description -->
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Faucibus purus in massa tempor nec feugiat nisl
                    pretium
                    fusce. A erat nam at lectus urna duis convallis. Amet mattis vulputate enim nulla aliquet. Quam
                    pellentesque nec nam aliquam sem et. Congue quisque egestas diam in arcu cursus euismod.
                    Elementum
                    sagittis vitae et leo duis ut diam quam.
                </p>

                <hr>


                <img src="public/img/photo/1.jpg" alt="" class="mb-3" width="100%">



                <!-- content -->
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Faucibus purus in massa tempor nec feugiat nisl pretium
                fusce. A erat nam at lectus urna duis convallis. Amet mattis vulputate enim nulla aliquet. Quam
                pellentesque nec nam aliquam sem et. Congue quisque egestas diam in arcu cursus euismod. Elementum
                sagittis vitae et leo duis ut diam quam.

                <hr>
            </article>


        </div>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="">Dashboard</h4>
                    <p class="mb-0">"University Template"</p>
                </div>

                <div class="p-4">
                    <h4 class="">Topics</h4>
                    <ol class="list-unstyled mb-0">

                        <li><a href="#">Category1</a></li>

                    </ol>
                </div>

                <div class="p-4">
                    <h4 class="">Socialmedias</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </div>
        </div>

    </div>

    <!--  -->
    <div class="d-flex align-items-center p-3 my-3 text-white bg-danger rounded shadow-sm">
        <!-- <img class="me-3" src="public/img/logo.png" alt="" width="48" height="38"> -->
        <div class="lh-1">
            <h1 class="h4 mb-0 text-white lh-1">Blogs</h1>
        </div>
    </div>


    <article class="blog-post">
        <!-- title -->
        <a href="">
            <h4 class="blog-post-title">Dashboard</h4>
        </a>
        <!-- author -->
        <p class="blog-post-meta">January 4, 2022 by <a href="#">Juan dela Cruz</a>
        </p>

        <!-- description -->
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Faucibus purus in massa tempor nec feugiat nisl pretium
            fusce. A erat nam at lectus urna duis convallis. Amet mattis vulputate enim nulla aliquet. Quam
            pellentesque nec nam aliquam sem et. Congue quisque egestas diam in arcu cursus euismod. Elementum
            sagittis vitae et leo duis ut diam quam.
        </p>

        <hr>
    </article>


    <!-- pagination -->
    <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
    </nav>



</main>

<?php 
require_once("landing/footer.php");
?>