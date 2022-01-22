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
                        <li class="breadcrumb-item"> UI elements </li>
                    </ul>
                </nav>
                <!-- End BreadCrumb -->

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> UI Elements <small></small></h5>
                </div>
                <!-- end title -->


                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">



                    <!-- Col- -->
                    <div class="col-md-12 float-sm-start">
                        <div class="col-md-6 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-map"></i></span> Alerts<i
                                        class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show p-2" id="collapseTable-disable"
                                    style="height: 500px;">


                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <h4 class="alert-heading">Something went wrong!</h4>
                                        <p></p>
                                        <hr>
                                        <p class="mb-0"> Invalid Username </p>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Success
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <i class="icon fa fa-ban"></i> Danger Alert!
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                        <i class="icon fa fa-info"></i> Primary
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                        <i class="icon fa fa-check"></i> Secondary
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <i class="icon fa fa-warning"></i> Warning
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>



                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 p-2 float-sm-start">
                            <div class="card border-top-bottom-blue">
                                <div class="widget-box">
                                    <div class="widget-title">
                                        <ul class="nav nav-tabs">
                                            <li><a data-toggle="tab" class="active" href="#tab1">Tab1</a></li>
                                            <li><a data-toggle="tab" class="" href="#tab2">Tab2</a></li>
                                            <li><a data-toggle="tab" class="" href="#tab3">Tab3</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget-content tab-content p-3">
                                        <div id="tab1" class="tab-pane active">
                                            <p>And is full of waffle to It has multiple paragraphs and is full of waffle
                                                to pad out the comment. Usually, you just wish these sorts of comments
                                                would come to an end.multiple paragraphs and is full of waffle to pad
                                                out the comment. Usually, you just wish these sorts of comments would
                                                come to an end.multiple paragraphs and is full of waffle to pad out the
                                                comment. Usually, you just wish these sorts of comments would come to an
                                                end. </p>
                                        </div>
                                        <div id="tab2" class="tab-pane">
                                            <p> waffle to pad out the comment. Usually, you just wish these sorts of
                                                comments would come to an end.multiple paragraphs and is full of waffle
                                                to pad out the comment. Usually, you just wish these sorts of comments
                                                would come to an end. </p>
                                        </div>
                                        <div id="tab3" class="tab-pane">
                                            <p>full of waffle to pad out the comment. Usually, you just wish these sorts
                                                of comments would come to an end.multiple paragraphs and is full of
                                                waffle to pad out the comment. Usually, you just wish these sorts of
                                                comments would come to an end. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-map"></i></span> Collapsible Accordon<i
                                        class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show p-0" id="collapseTable-disable">

                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Accordion Item #1
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is
                                                    shown by default, until the collapse plugin adds the appropriate
                                                    classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS
                                                    transitions. You can modify any of this with custom CSS or
                                                    overriding our default variables. It's also worth noting that just
                                                    about any HTML can go within the <code>.accordion-body</code>,
                                                    though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Accordion Item #2
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the second item's accordion body.</strong> It is
                                                    hidden by default, until the collapse plugin adds the appropriate
                                                    classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS
                                                    transitions. You can modify any of this with custom CSS or
                                                    overriding our default variables. It's also worth noting that just
                                                    about any HTML can go within the <code>.accordion-body</code>,
                                                    though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Accordion Item #3
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the third item's accordion body.</strong> It is
                                                    hidden by default, until the collapse plugin adds the appropriate
                                                    classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS
                                                    transitions. You can modify any of this with custom CSS or
                                                    overriding our default variables. It's also worth noting that just
                                                    about any HTML can go within the <code>.accordion-body</code>,
                                                    though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>


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
                                    <span class="card-icon"><i class="fa fa-warning"></i></span> Progress Bar
                                    <i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseTable-disable">

                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-bullhorn"></i></span> Progress Bar
                                    <i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseTable-disable">

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar"
                                            style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>

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
                                    <span class="card-icon"><i class="fa fa-bar-chart"></i></span> Pagination
                                    <i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseTable-disable">

                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1"
                                                    aria-disabled="true">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-bar-chart"></i></span> Button Group
                                    <i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseTable-disable">

                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <button type="button" class="btn btn-danger">Left</button>
                                        <button type="button" class="btn btn-warning">Middle</button>
                                        <button type="button" class="btn btn-success">Right</button>
                                    </div>

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

                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-secondary">Secondary</button>
                                    <button type="button" class="btn btn-success btn-lg">Success</button>
                                    <button type="button" class="btn btn-danger btn-md">Danger</button>
                                    <button type="button" class="btn btn-warning btn-sm">Warning</button>
                                    <button type="button" class="btn btn-info btn-mini">Info</button>
                                    <button type="button" class="btn btn-light">Light</button>
                                    <button type="button" class="btn btn-dark">Dark</button>

                                    <button type="button" class="btn btn-link">Link</button>

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

                                    <button type="button" class="btn btn-outline-primary btn-lg">Primary</button>
                                    <button type="button" class="btn btn-outline-secondary btn-md">Secondary</button>
                                    <button type="button" class="btn btn-outline-success btn-sm">Success</button>
                                    <button type="button" class="btn btn-outline-danger btn-mini">Danger</button>
                                    <button type="button" class="btn btn-outline-warning">Warning</button>
                                    <button type="button" class="btn btn-outline-info">Info</button>
                                    <button type="button" class="btn btn-outline-light">Light</button>
                                    <button type="button" class="btn btn-outline-dark">Dark</button>

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
                                    <span class="card-icon"><i class="fa fa-bar-chart"></i></span> Demo Modal
                                    <i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseTable-disable">

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Launch demo modal
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-2 float-sm-start">
                            <div class="card">
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-bar-chart"></i></span> Static backdrop
                                    <i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show" id="collapseTable-disable">

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        Launch static backdrop modal
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Understood</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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

    <!-- Toast -->
    <div class="position-fixed bottom-0 end-0 p-3 toast-container" style="z-index: 5">
        <div class="toast" data-autohide="false">
            <div class="toast-header bg-danger text-white">
                <strong class="me-auto">Danger</strong>
                <small class="text-white">...</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" style="text-align:left;">
                Allert Message
            </div>
        </div>
    </div>

    <div class="position-fixed bottom-0 end-0 p-3 toast-container" style="z-index: 5">
        <div class="toast" data-autohide="false">
            <div class="toast-header bg-warning text-white">
                <strong class="me-auto">Warning</strong>
                <small class="text-white">...</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" style="text-align:left;">
                Allert Message
            </div>
        </div>
    </div>
    <!-- End Toast -->

    <?php require_once("includes/footer.html"); ?>