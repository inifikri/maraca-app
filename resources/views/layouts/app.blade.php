<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef" />
    <meta name="theme-color" content="#4188c9" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <link rel="icon" href="./favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <!-- Generated: 2018-04-06 16:33:39 +0200 -->
    <title>
        Tugas II - Maraca Book
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/fontawesome.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext" />
    <!-- Dashboard Core -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/2.3.3/css/dataTables.dataTables.css" rel="stylesheet" />
    <link href="./assets/css/dashboard.css" rel="stylesheet" />
    <script src="./assets/js/dashboard.js"></script>
    <style>
        .icon-box {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 8px;
            color: #fff;
            font-size: 1.5rem;
            margin-right: 1rem;
        }

        .bg-blue {
            background-color: #206bc4 !important;
        }

        .bg-green {
            background-color: #5eba00 !important;
        }

        .bg-black {
            background-color: #000000 !important;
        }
    </style>
</head>

<body class="">
    <div class="page">
        <div class="page-main">
            @include('layouts.topmenu')
            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="card card-custom p-3 mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box bg-blue">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>
                                    <div>
                                        <h4 class="mb-0 card-body-text">132 Sales</h4>
                                        <p class="mb-0 card-body-subtext">12 waiting payments</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="card card-custom p-3 mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box bg-blue">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>
                                    <div>
                                        <h4 class="mb-0 card-body-text">132 Sales</h4>
                                        <p class="mb-0 card-body-subtext">12 waiting payments</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="card card-custom p-3 mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box bg-blue">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>
                                    <div>
                                        <h4 class="mb-0 card-body-text">132 Sales</h4>
                                        <p class="mb-0 card-body-subtext">12 waiting payments</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="card card-custom p-3 mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box bg-blue">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>
                                    <div>
                                        <h4 class="mb-0 card-body-text">132 Sales</h4>
                                        <p class="mb-0 card-body-subtext">12 waiting payments</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <h1 class="page-title font-weight-bold">Dashboard</h1>
                            <div class="mt-5 mb-3">
                                <a href="#" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#exampleModal">+ Tambah Data</a>
                            </div>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Holy guacamole!</strong> You should check in on some
                                of those fields below.
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <table id="example" class="display nowrap">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011-04-25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011-07-25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011-07-25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011-07-25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011-07-25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011-07-25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011-07-25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011-07-25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011-07-25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011-07-25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011-07-25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011-07-25</td>
                                                <td>$170,750</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cards row-deck">
                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <a href="#"><img class="card-img-top"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRA02VX08uYi753iYkTd7ArnhSmO2uMK4kiEA&s"
                                        alt="And this isn&#39;t my nose. This is a false one." /></a>
                                <div class="card-body d-flex flex-column">
                                    <h4>
                                        <a href="#">And this isn't my nose. This is a false one.</a>
                                    </h4>
                                    <div class="text-muted">
                                        Look, my liege! The Knights Who Say Ni demand a sacrifice!
                                        …Are you suggesting that coconuts migr...
                                    </div>
                                    <div class="d-flex align-items-center pt-5 mt-auto">
                                        <div class="avatar avatar-md mr-3"
                                            style="
                          background-image: url(./demo/faces/female/18.jpg);
                        ">
                                        </div>
                                        <div>
                                            <a href="./profile.html" class="text-default">Rose Bradley</a>
                                            <small class="d-block text-muted">3 days ago</small>
                                        </div>
                                        <div class="ml-auto text-muted">
                                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i
                                                    class="fe fe-heart mr-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <a href="#"><img class="card-img-top"
                                        src="https://bintangpusnas.perpusnas.go.id/api/getImage/8408_prod_20db1fd2554195f78d60545f6e1ce927.png"
                                        alt="And this isn&#39;t my nose. This is a false one." /></a>
                                <div class="card-body d-flex flex-column">
                                    <h4>
                                        <a href="#">And this isn't my nose. This is a false one.</a>
                                    </h4>
                                    <div class="text-muted">
                                        Look, my liege! The Knights Who Say Ni demand a sacrifice!
                                        …Are you suggesting that coconuts migr...
                                    </div>
                                    <div class="d-flex align-items-center pt-5 mt-auto">
                                        <div class="avatar avatar-md mr-3"
                                            style="
                          background-image: url(./demo/faces/female/18.jpg);
                        ">
                                        </div>
                                        <div>
                                            <a href="./profile.html" class="text-default">Rose Bradley</a>
                                            <small class="d-block text-muted">3 days ago</small>
                                        </div>
                                        <div class="ml-auto text-muted">
                                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i
                                                    class="fe fe-heart mr-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <a href="#"><img class="card-img-top"
                                        src="https://images-platform.99static.com//MLpNbgbuuGmM9VqX0oFAVMehwAU=/0x0:2000x2000/fit-in/500x500/99designs-contests-attachments/138/138299/attachment_138299876"
                                        alt="And this isn&#39;t my nose. This is a false one." /></a>
                                <div class="card-body d-flex flex-column">
                                    <h4>
                                        <a href="#">And this isn't my nose. This is a false one.</a>
                                    </h4>
                                    <div class="text-muted">
                                        Look, my liege! The Knights Who Say Ni demand a sacrifice!
                                        …Are you suggesting that coconuts migr...
                                    </div>
                                    <div class="d-flex align-items-center pt-5 mt-auto">
                                        <div class="avatar avatar-md mr-3"
                                            style="
                          background-image: url(./demo/faces/female/18.jpg);
                        ">
                                        </div>
                                        <div>
                                            <a href="./profile.html" class="text-default">Rose Bradley</a>
                                            <small class="d-block text-muted">3 days ago</small>
                                        </div>
                                        <div class="ml-auto text-muted">
                                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i
                                                    class="fe fe-heart mr-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address<span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter email" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter email" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter email" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn btn-primary btn-sm">
                                <i class="fa-solid fa-floppy-disk"></i> Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.3/js/dataTables.js"></script>
    <script>
        new DataTable("#example", {
            scrollX: true,
        });
    </script>
</body>

</html>
