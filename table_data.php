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
                        <li class="breadcrumb-item"> Student </li>
                    </ul>
                </nav>
                <!-- End BreadCrumb -->

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> Student <small>List</small></h5>
                </div>
                <!-- end title -->


                <div class="container-fluid-xxl pb-2">

                    <div class="col-md-12 float-sm-start">

                        <div class="col-md-12 float-sm-start">

                            <!-- alert -->

                        </div>


                        <div class="col-md-12 p-2 float-sm-start">

                            <div class="card">

                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-th"></i></span>
                                    Students<i class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show p-0" id="collapseTable">

                                    <!-- Table Div -->
                                    <div class="table-responsive m-3">

                                        <!-- Table -->
                                        <table id="example2"
                                            class="table table-bordered table-hover table-striped table-sm">

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
                                                <tr class="">
                                                    <td>6</td>
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
                                                    <td>7</td>
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
                                                    <td>8</td>
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
                                                    <td>9</td>
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
                                                    <td>10</td>
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
                                                    <td>11</td>
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
                                                    <td>12</td>
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
                                                    <td>13</td>
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
                                                    <td>14</td>
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
                                                    <td>15</td>
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
                                                    <td>16</td>
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
                                                    <td>17</td>
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
                                                    <td>18</td>
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
                                                    <td>19</td>
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
                                                    <td>20</td>
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
                                                    <td>21</td>
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
                                                    <td>22</td>
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
                                                    <td>23</td>
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
                                                    <td>24</td>
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
                                                    <td>25</td>
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
                                                    <td>26</td>
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
                                                    <td>27</td>
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
                                                    <td>28</td>
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
                                                    <td>29</td>
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
                                                    <td>30</td>
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
                                                    <td>31</td>
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
                                            </tfoot>

                                        </table>
                                        <!-- End Table -->


                                    </div>
                                    <!-- End Table Div -->

                                </div>
                                <!-- End Card Body -->
                            </div>
                            <!-- End card -->

                        </div>
                        <!-- End Col-12 -->


                    </div>
                    <!-- End col -->

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

    <!-- DATA TABES SCRIPT -->
    <script src="public/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <!-- <script src="public/plugins/DataTables-1.11.4/js/jquery.dataTables.js" type="text/javascript"></script> -->

    <script src="public/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- <script src="public/plugins/DataTables-1.11.4/js/dataTables.bootstrap.js" type="text/javascript"></script> -->

    <!-- page script -->
    <script type="text/javascript">
    $(function() {
        $("#example1").dataTable();
        $('#example2').dataTable({
            "Paginate": true,
            "LengthChange": false,
            "Filter": false,
            "Sort": true,
            "Info": true,
            "AutoWidth": false
        });
    });
    </script>

    <style>
    .dataTables_paginate>ul.pagination>li>a {
        padding: 5px;
        background-color: #066CFB;
        color: #fff;
        margin: 0px;
        text-decoration: none;
    }

    .dataTables_paginate>ul.pagination>li>a:hover {
        background-color: #0760DC;
    }

    .dataTables_paginate>ul.pagination>li:first-child>a {
        border-radius: 5px 0px 0px 5px
    }

    .dataTables_paginate>ul.pagination>li:last-child>a {
        border-radius: 0px 5px 5px 0px
    }
    </style>