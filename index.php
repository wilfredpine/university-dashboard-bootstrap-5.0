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
                        <li class="breadcrumb-item"> index </li>
                    </ul>
                </nav>
                <!-- End BreadCrumb -->

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> Dashboard <small></small></h5>
                </div>
                <!-- end title -->


                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">

                    <div class="col-12 p-0 m-0 mt-0 mb-3">

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="icon fa fa-download"></i>
                            <a href="https://github.com/redmalmon/university-dashboard-bootstrap-5.0">Download on
                                Github!</a>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    </div>

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

                    <!-- Col- -->
                    <div class="col-md-12 float-sm-start">
                        <div class="col-md-7 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-map"></i></span> Rice Disease Cases<i
                                        class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show p-0" id="collapseTable-disable">

                                    <div id="map" style="height: 300px; width: auto;">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d391977.5613234561!2d121.25357434693518!3d13.083599438225725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1642480320330!5m2!1sen!2sph"
                                            height="300px" width="100%" style="border:0;" allowfullscreen=""
                                            loading="lazy"></iframe>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="col-md-5 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-bar-chart"></i></span> Reported Rice
                                    Diseases<i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseTable-disable"
                                    style="height: 300px;">
                                    <canvas id="myBarChart" height="180"></canvas>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End Col- -->


                    <!-- Col- -->
                    <div class="col-md-12 float-sm-start">
                        <div class="col-md-6 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-bar-chart"></i></span> Line
                                    <i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseTable-disable">

                                    <canvas id="myLineChart" height="auto"></canvas>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-bar-chart"></i></span> Bar
                                    <i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseTable-disable">

                                    <canvas id="myLineChart-a" height="auto"></canvas>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Col- -->


                    <!-- Col- -->
                    <div class="col-md-12 float-sm-start">
                        <div class="col-md-12 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-map"></i></span> Rice Disease Cases<i
                                        class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show p-0" id="collapseTable-disable">

                                    <!-- Table Div -->
                                    <div class="table-responsive">

                                        <!-- Table -->
                                        <table class="table table-bordered table-hover table-sm mb-0">

                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>ID Number</th>
                                                    <th>First name</th>
                                                    <th>Middle name</th>
                                                    <th>Last name</th>
                                                    <th>Contact Number</th>
                                                    <th>Program</th>
                                                    <th>Year Level</th>
                                                    <th>Options</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                <tr class="odd">
                                                    <td>1</td>
                                                    <td>1234</td>
                                                    <td>Juan</td>
                                                    <td>M.</td>
                                                    <td>dela Cruz</td>
                                                    <td>09xxxxxxxxx</td>
                                                    <td>BSIT</td>
                                                    <td>First Year</td>

                                                    <td>
                                                        <a href="#"><button
                                                                class="btn btn-mini btn-info">View</button></a>
                                                        <a href="#"><button
                                                                class="btn btn-mini btn-warning">Edit</button></a>
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td>2</td>
                                                    <td>1234</td>
                                                    <td>Juan</td>
                                                    <td>M.</td>
                                                    <td>dela Cruz</td>
                                                    <td>09xxxxxxxxx</td>
                                                    <td>BSIT</td>
                                                    <td>First Year</td>

                                                    <td>
                                                        <a href="#"><button
                                                                class="btn btn-mini btn-info">View</button></a>
                                                        <a href="#"><button
                                                                class="btn btn-mini btn-warning">Edit</button></a>
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td>3</td>
                                                    <td>1234</td>
                                                    <td>Juan</td>
                                                    <td>M.</td>
                                                    <td>dela Cruz</td>
                                                    <td>09xxxxxxxxx</td>
                                                    <td>BSIT</td>
                                                    <td>First Year</td>

                                                    <td>
                                                        <a href="#"><button
                                                                class="btn btn-mini btn-info">View</button></a>
                                                        <a href="#"><button
                                                                class="btn btn-mini btn-warning">Edit</button></a>
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td>4</td>
                                                    <td>1234</td>
                                                    <td>Juan</td>
                                                    <td>M.</td>
                                                    <td>dela Cruz</td>
                                                    <td>09xxxxxxxxx</td>
                                                    <td>BSIT</td>
                                                    <td>First Year</td>

                                                    <td>
                                                        <a href="#"><button
                                                                class="btn btn-mini btn-info">View</button></a>
                                                        <a href="#"><button
                                                                class="btn btn-mini btn-warning">Edit</button></a>
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td>5</td>
                                                    <td>1234</td>
                                                    <td>Juan</td>
                                                    <td>M.</td>
                                                    <td>dela Cruz</td>
                                                    <td>09xxxxxxxxx</td>
                                                    <td>BSIT</td>
                                                    <td>First Year</td>

                                                    <td>
                                                        <a href="#"><button
                                                                class="btn btn-mini btn-info">View</button></a>
                                                        <a href="#"><button
                                                                class="btn btn-mini btn-warning">Edit</button></a>
                                                    </td>
                                                </tr>


                                            </tbody>

                                            <tfoot>
                                                <tr></tr>
                                            </tfoot>
                                        </table>
                                        <!-- End Table -->


                                        <!-- pagination -->
                                        <nav class="mt-2 ml-2 mb-0">
                                            <ul class="pagination pagination-sm">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1"
                                                        aria-disabled="true">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active" aria-current="page">
                                                    <a class="page-link" href="#">2 <span
                                                            class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <!-- End pagination -->


                                    </div>
                                    <!-- End Table Div -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Col- -->


                    <!-- Col- -->
                    <div class="col-md-12 float-sm-start">
                        <div class="col-md-3 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-bar-chart"></i></span> Line
                                    <i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseTable-disable">

                                    <canvas id="myLineChart-b" height="auto"></canvas>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-bar-chart"></i></span> Bar
                                    <i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseTable-disable">

                                    <canvas id="myLineChart-c" height="auto"></canvas>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-bar-chart"></i></span> Bar
                                    <i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseTable-disable">

                                    <canvas id="myLineChart-d" height="auto"></canvas>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-bar-chart"></i></span> Bar
                                    <i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseTable-disable">

                                    <canvas id="myLineChart-e" height="auto"></canvas>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End Col- -->


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

    <script src="public/chart.js/chart.js"></script>

    <?php require_once("includes/footer.html"); ?>


    <script>
    var ctx = document.getElementById('myBarChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>

    <script>
    var ctx = document.getElementById('myLineChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>

    <script>
    var ctx = document.getElementById('myLineChart-a').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 0
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>

    <script>
    var ctx = document.getElementById('myLineChart-b').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Red', 'Blue', 'Yellow'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 23],
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 0
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>

    <script>
    var ctx = document.getElementById('myLineChart-c').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Red', 'Blue', 'Yellow'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 23],
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 0
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>


    <script>
    var ctx = document.getElementById('myLineChart-d').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Red', 'Blue', 'Yellow'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 23],
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 0
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>


    <script>
    var ctx = document.getElementById('myLineChart-e').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Red', 'Blue', 'Yellow'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 23],
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 0
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>