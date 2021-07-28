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
   <link rel="stylesheet" href="{{ asset('assets/css/pages/file-manager.css')}}">
   <link rel="stylesheet" href="{{ asset('assets/libs/blueimp-gallery/gallery.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/libs/blueimp-gallery/gallery-indicator.css')}}">
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
                        @include('layouts.message')
                        <div class="row">
                             <!-- customar project  start -->
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                <!-- Content -->
                                <div class="container-fluid flex-grow-1 container-p-y">

                                    <div class="bg-lightest container-m--x container-m--y mb-3">

                                        <hr class="m-0">

                                        <div class="file-manager-actions container-p-x py-2">
                                            <div>
                                                <button data-toggle="modal" data-target="#modal-report" class="btn btn-primary mr-2">
                                                    <i class="ion ion-md-cloud-upload"></i>&nbsp; Upload</button>
                                                    <div class="btn-group mr-2">
                                                    <button type="button" class="btn btn-default md-btn-flat dropdown-toggle px-2" data-toggle="dropdown">
                                                        <i class="ion ion-ios-settings"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0)">Move</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Copy</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-default md-btn-flat active">
                                                        <input type="radio" name="file-manager-view" value="file-manager-col-view" checked>
                                                        <span class="ion ion-md-apps"></span>
                                                    </label>
                                                    <label class="btn btn-default md-btn-flat">
                                                        <input type="radio" name="file-manager-view" value="file-manager-row-view">
                                                        <span class="ion ion-md-menu"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="m-0">
                                    </div>
                                   
                                    <div class="file-manager-container file-manager-col-view">

                                        <div class="file-manager-row-header">
                                            <div class="file-item-name pb-2">Filename</div>
                                            <div class="file-item-changed pb-2">Changed</div>
                                        </div>
                                        @foreach($get_receipt as $receipt)
                                        <div class="file-item">
                                            <div class="file-item-select-bg bg-primary"></div>
                                            <label class="file-item-checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                            <div  class="file-item-img" ><a href="{{ asset('receipts/images/'.$receipt->file)}}" class="img-thumbnail img-thumbnail-zoom-in"><img src="{{ asset('receipts/images/'.$receipt->file)}}" class="img-fluid img-radiu wid-30" alt=""></div>
                                            <a href="#" class="file-item-name">
                                                {{$receipt ->title}}
                                            </a>
                                            <div class="file-item-changed">{{$receipt->created_at}}</div>
                                            <div class="file-item-actions btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-round icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="ion ion-ios-more"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/rename-receipt/{{$receipt->id}}">Rename</a>
                                                    <a class="dropdown-item" href="/remove-receipt/{{$receipt->id}}">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                      @endforeach
                                    </div>
                                </div>
                                <!-- / Content -->
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
    <script src="{{ asset('assets/js/analytics.js')}}"></script>
    <script src="{{ asset('assets/libs/blueimp-gallery/gallery.js')}}"></script>
    <script src="{{ asset('assets/libs/blueimp-gallery/gallery-fullscreen.js')}}"></script>
    <script src="{{ asset('assets/libs/blueimp-gallery/gallery-indicator.js')}}"></script>
    <script src="{{ asset('assets/libs/masonry/masonry.js')}}"></script>

    <!-- Demo -->
    <script src="{{ asset('assets/js/pages/pages_gallery.js')}}"></script>
    <script>
        $(function() {

            // Checkboxes

            $('.file-manager-container').on('change', '.file-item-checkbox input', function() {
                $(this).parents('.file-item')[this.checked ? 'addClass' : 'removeClass']('selected');
            });

            // Focus

            $('.file-manager-container').on('focusin', '.file-item', function() {
                $(this).addClass('focused');
            });

            $('.file-manager-container').on('focusout', '.file-item', function() {
                if ($('.file-item-actions.show').length) return;
                $(this).removeClass('focused');
            });

            $('.file-manager-container').on('hide.bs.dropdown', '.file-item-actions', function() {
                if ($(this).parents('.file-item').find(':focus').length) return;
                $(this).parents('.file-item').removeClass('focused');
            });

            // Change view

            $('[name="file-manager-view"]').on('change', function() {
                $('.file-manager-container')
                    .removeClass('file-manager-col-view file-manager-row-view')
                    .addClass(this.value);
            });

            // RTL

            if ($('html').attr('dir') === 'rtl') {
                $('.file-manager-actions .dropdown-menu').addClass('dropdown-menu-right');
                $('.file-item-actions .dropdown-menu').removeClass('dropdown-menu-right');
            }

        });
    </script>
</body>
</html>
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Receipt</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/create-receipt" method="post" enctype ="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="floating-label" for="Name">Title</label>
                                    <input type="text" class="form-control" name="title" id="Name" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group fill">
                                    <label class="floating-label" for="Email">Receipt</label>
                                    <input type="file" class="form-control" name="file" id="Email" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <button type ="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

