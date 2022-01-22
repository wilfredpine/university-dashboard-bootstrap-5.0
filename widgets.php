<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once("includes/head.html"); ?>

<body class="d-flex flex-column h-100">


    <!-- topbar -->
    <?php require_once("includes/topbar.html"); ?>
    <!-- end topbar -->

    <!-- Container - Fluid -->
    <div class="container-fluid pt-5">
        <!-- Row -->
        <div class="row">


            <!-- sidebar -->
            <?php require_once("includes/sidebar.html"); ?>
            <!-- end side bar -->


            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                <!-- BreadCrumb -->
                <nav aria-label="breadcrumb" class="pt-3 mb-2 bg-white border-bottom mx-2">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="" class="breadcrumb-link"><i class="fa fa-dashboard"></i>
                                Dashboard</a></li>
                        <li class="breadcrumb-item"> Widgets </li>
                    </ul>
                </nav>
                <!-- End BreadCrumb -->

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> Widgets <small></small></h5>
                </div>
                <!-- end title -->


                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">

                    <!-- Widgets -->
                    <div class="row g-4 py-0 px-2 pb-3 row-cols-12 row-cols-lg-12 me-1">
                        <div class="feature col">
                            <div class="overflow-hidden rounded-2 shadow-sm border border-solid border-gray p-0">
                                <div class="feature-icon bg-success bg-gradient m-0" style="height: 0px">

                                </div>
                                <div class="p-3 bg-success bg-gradient" style="color:white">
                                    <h2> <i class="fa fa-users"></i> 10</h2>
                                    <p>Registered Users</p>

                                </div>
                            </div>
                        </div>
                        <div class="feature col">
                            <div class="overflow-hidden rounded-2 shadow-sm border border-solid border-gray p-0">
                                <div class="feature-icon bg-info bg-gradient m-0" style="height: 0px">

                                </div>
                                <div class="p-3 bg-primary bg-gradient" style="color:white">
                                    <h2> <i class="fa fa-industry"></i> 7</h2>
                                    <p>Active Productions</p>

                                </div>
                            </div>
                        </div>
                        <div class="feature col">
                            <div class="overflow-hidden rounded-2 shadow-sm border border-solid border-gray p-0">
                                <div class="feature-icon bg-warning bg-gradient m-0" style="height: 0px">

                                </div>
                                <div class="p-3 bg-secondary bg-gradient" style="color:white">
                                    <h2> <i class="fa fa-warning"></i> 5</h2>
                                    <p>Reported Diseases</p>

                                </div>
                            </div>
                        </div>
                        <div class="feature col">
                            <div class="overflow-hidden rounded-2 shadow-sm border border-solid border-gray p-0">
                                <div class="feature-icon bg-secondary bg-gradient m-0" style="height: 0px">

                                </div>
                                <div class="p-3 bg-warning bg-gradient" style="color:white">
                                    <h2> <i class="fa fa-map-o"></i> 11</h2>
                                    <p>Barangay/s User</p>

                                </div>
                            </div>
                        </div>
                        <div class="feature col">
                            <div class="overflow-hidden rounded-2 shadow-sm border border-solid border-gray p-0">
                                <div class="feature-icon bg-success bg-gradient m-0" style="height: 0px">

                                </div>
                                <div class="p-3 bg-danger bg-gradient" style="color:white">
                                    <h2> <i class="fa fa-comments"></i> 0</h2>
                                    <p>Consulted online</p>

                                </div>
                            </div>
                        </div>
                        <div class="feature col">
                            <div class="overflow-hidden rounded-2 shadow-sm border border-solid border-gray p-0">
                                <div class="feature-icon bg-danger bg-gradient m-0" style="height: 0px">

                                </div>
                                <div class="p-3 bg-primary bg-gradient" style="color:white">
                                    <h2> <i class="fa fa-info-circle"></i> 12</h2>
                                    <p>Recorded Healthy Rice</p>

                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <!-- End container-fluid -->



                <!-- Footer -->
                <?php require_once("includes/footbar.html"); ?>
                <!-- End Footer -->


            </main>
            <!-- End Main -->



        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->

    <?php require_once("includes/footer.html"); ?>