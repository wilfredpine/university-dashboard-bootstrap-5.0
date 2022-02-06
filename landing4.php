<?php 
require_once("landing/header.php");
require_once("landing/navbar.php");
require_once("landing/secondary_navbar.php");
?>


<!-- Main -->
<main class="container pb-5">

    <!--  -->
    <div class="row g-5 mt-3">
        <div class="col-md-8">

            <article class="blog-post">
                <!-- title -->
                <h2 class="blog-post-title">Dashboard</h2>

                <!-- author -->
                <p class="blog-post-meta">January 3, 2022 by <a href="#">Juan dela Cruz</a>
                </p>

                <!-- description -->
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Faucibus purus in massa tempor nec feugiat nisl
                    pretium
                    fusce. A erat nam at lectus urna duis convallis. Amet mattis vulputate enim nulla aliquet.
                    Quam
                    pellentesque nec nam aliquam sem et. Congue quisque egestas diam in arcu cursus euismod.
                    Elementum
                    sagittis vitae et leo duis ut diam quam.
                </p>

                <hr>


                <img src="public/img/photo/1.jpg" alt="" class="mb-3" width="100%">



                <!-- content -->
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Faucibus purus in massa tempor nec feugiat nisl
                pretium
                fusce. A erat nam at lectus urna duis convallis. Amet mattis vulputate enim nulla aliquet.
                Quam
                pellentesque nec nam aliquam sem et. Congue quisque egestas diam in arcu cursus euismod.
                Elementum
                sagittis vitae et leo duis ut diam quam.

                <hr>
            </article>

            <!-- pagination -->
            <nav class="blog-pagination" aria-label="Pagination">
                <a class="btn btn-outline-primary" href="">Previous</a>
                <a class="btn btn-outline-secondary" href="">Next</a>
            </nav>

        </div>

        <!-- Right -->
        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="">University</h4>
                    <p class="mb-0">"Dashboard."</p>
                </div>

                <div class="p-4">
                    <h4 class="">Topics</h4>
                    <ol class="list-unstyled mb-0">

                        <li><a href="#">Category 1</a></li>

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

        <div class="lh-1">
            <h1 class="h4 mb-0 text-white lh-1">Blogs</h1>
        </div>
    </div>

    <article class="blog-post">
        <!-- title -->
        <a href="">
            <h4 class="blog-post-title">University</h4>
        </a>
        <!-- author -->
        <p class="blog-post-meta">January 3, 2022 by <a href="#">Juan dela Cruz</a>
        </p>

        <!-- description -->
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Faucibus purus in massa tempor nec feugiat nisl
            pretium
            fusce. A erat nam at lectus urna duis convallis. Amet mattis vulputate enim nulla aliquet.
            Quam
            pellentesque nec nam aliquam sem et. Congue quisque egestas diam in arcu cursus euismod.
            Elementum
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