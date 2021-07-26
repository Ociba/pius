<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

<head>
   @include('layouts.title')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Codedthemes" />
   @include('layouts.css')
   <link rel="stylesheet" href="{{ asset('assets/libs/fullcalendar/fullcalendar.css')}}">
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
                             <div class="card mb-4">
                            <div class="card-body">
                            <div class="row align-items-center m-l-0">
                                <div class="col-sm-6">

                                </div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-success btn-sm btn-round mb-3" data-toggle="modal" data-target="#fullcalendar-default-view-modal"><i class="feather icon-plus"></i> Add Event</button>
                                </div>
                            </div>
                                <div id='fullcalendar-default-view'></div>
                            </div>
                        </div>

                        {{--<div class="card">
                            <div class="card-body">
                                <div id='fullcalendar-list-view'></div>
                            </div>
                        </div>
                        --}}
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
    <script src="{{ asset('assets/libs/moment/moment.js')}}"></script>
    <script src="{{ asset('assets/libs/fullcalendar/fullcalendar.js')}}"></script>

    <!-- Demo -->
    <script src="{{ asset('assets/js/analytics.js')}}"></script>
    <script src="{{ asset('assets/js/pages/ui_fullcalendar.js')}}"></script>
</body>
</html>
<!-- Event modal -->
<form class="modal modal-top fade" id="fullcalendar-default-view-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add an event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control">
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <label class="form-label">Type</label>
                    <select class="custom-select">
                        <option value="" selected>Default</option>
                        <option value="fc-event-success">Success</option>
                        <option value="fc-event-info">Info</option>
                        <option value="fc-event-warning">Warning</option>
                        <option value="fc-event-danger">Danger</option>
                        <option value="fc-event-dark">Dark</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default md-btn-flat" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary md-btn-flat">Save</button>
            </div>
        </div>
    </div>
</form>
<!-- / Event modal -->



