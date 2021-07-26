<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

<head>
   @include('layouts.title')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template" />
    <meta name="keywords" content="">
    <meta name="author" content="Codedthemes" />
   @include('layouts.css')
   <link rel="stylesheet" href="{{ asset('assets/libs/datatables/datatables.css')}}">
</head>

<body>
    <!-- [ Preloader ] Start -->
    @include('layouts.preloader')
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            @include('layouts.sidebar')
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                @include('layouts.navbar')
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        @include('layouts.breadcrumb')

                        <div class="row">
                             <!-- customar project  start -->
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center m-l-0">
                                            <div class="col-sm-6">
                                            </div>
                                            <div class="col-sm-6 text-right">
                                                <button class="btn btn-success btn-sm mb-3 btn-round" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Asset</button>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Address</th>
                                                        <th>Phone</th>
                                                        <th>Options</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/img/user/avatar-1.jpg" class="img-fluid img-radius wid-40" alt="">
                                                        </td>
                                                        <td>Micheal Pewd</td>
                                                        <td>nurse@example.com</td>
                                                        <td>Some address</td>
                                                        <td>+984-46-9388638</td>
                                                        <td>
                                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/img/user/avatar-3.jpg" class="img-fluid img-radius wid-40" alt="">
                                                        </td>
                                                        <td>Erich Mcbride</td>
                                                        <td>xidim@gmail.com</td>
                                                        <td>Some address</td>
                                                        <td>+612-92-1385682</td>
                                                        <td>
                                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/img/user/avatar-1.jpg" class="img-fluid img-radius wid-40" alt="">
                                                        </td>
                                                        <td>Micheal Pewd</td>
                                                        <td>nurse@example.com</td>
                                                        <td>Some address</td>
                                                        <td>+984-46-9388638</td>
                                                        <td>
                                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/img/user/avatar-3.jpg" class="img-fluid img-radius wid-40" alt="">
                                                        </td>
                                                        <td>Erich Mcbride</td>
                                                        <td>xidim@gmail.com</td>
                                                        <td>Some address</td>
                                                        <td>+612-92-1385682</td>
                                                        <td>
                                                            <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                                            <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- customar project  end -->

                        </div>
                    </div>
                    <!-- [ content ] End -->

                    <!-- [ Layout footer ] Start -->
                    @include('layouts.footer')
                    <!-- [ Layout footer ] End -->

                </div>
                <!-- [ Layout content ] Start -->

            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper] End -->

    <!-- Core scripts -->
    @include('layouts.javascript')
    <script src="{{ asset('assets/libs/datatables/datatables.js')}}"></script>
    <script>
        // DataTable start
        $('#report-table').DataTable();
        // DataTable end
    </script>
</body>
</html>
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Asset</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="Name">Name</label>
                                    <input type="text" class="form-control" id="Name" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group fill">
                                    <label class="floating-label" for="Email">Email</label>
                                    <input type="email" class="form-control" id="Email" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group fill">
                                    <label class="floating-label" for="Password">Password</label>
                                    <input type="password" class="form-control" id="Password" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="Phone">Phone</label>
                                    <input type="text" class="form-control" id="Phone" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="floating-label" for="Address">Address</label>
                                    <textarea class="form-control" id="Address" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group fill">
                                    <label class="floating-label" for="Icon">Profie Image</label>
                                    <input type="file" class="form-control" id="Icon" placeholder="sdf">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button class="btn btn-primary">Submit</button>
                                <button class="btn btn-danger">Clear</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

