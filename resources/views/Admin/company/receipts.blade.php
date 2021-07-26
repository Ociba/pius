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
   <link rel="stylesheet" href="{{ asset('assets/css/pages/file-manager.css')}}">
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
                                <!-- Content -->
                                <div class="container-fluid flex-grow-1 container-p-y">

                                    <div class="bg-lightest container-m--x container-m--y mb-3">

                                        <hr class="m-0">

                                        <div class="file-manager-actions container-p-x py-2">
                                            <div>
                                                <button type="button" class="btn btn-primary mr-2">
                                                    <i class="ion ion-md-cloud-upload"></i>&nbsp; Upload</button>
                                                <button type="button" class="btn btn-secondary mr-2" disabled>
                                                    <i class="ion ion-md-cloud-download"></i>
                                                </button>
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

                                        <div class="file-item">
                                            <div class="file-item-icon file-item-level-up fas fa-level-up-alt text-secondary"></div>
                                            <a href="javascript:void(0)" class="file-item-name">
                                                ..
                                            </a>
                                        </div>

                                        <div class="file-item">
                                            <div class="file-item-select-bg bg-primary"></div>
                                            <label class="file-item-checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                            <div class="file-item-icon far fa-folder text-secondary"></div>
                                            <a href="javascript:void(0)" class="file-item-name">
                                                Images
                                            </a>
                                            <div class="file-item-changed">02/13/2018</div>
                                            <div class="file-item-actions btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-round icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="ion ion-ios-more"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Rename</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Move</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Copy</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="file-item">
                                            <div class="file-item-select-bg bg-primary"></div>
                                            <label class="file-item-checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                            <div class="file-item-icon far fa-folder text-secondary"></div>
                                            <a href="javascript:void(0)" class="file-item-name">
                                                Scripts
                                            </a>
                                            <div class="file-item-changed">02/14/2018</div>
                                            <div class="file-item-actions btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-round icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="ion ion-ios-more"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Rename</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Move</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Copy</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="file-item">
                                            <div class="file-item-select-bg bg-primary"></div>
                                            <label class="file-item-checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                            <div class="file-item-icon far fa-folder text-secondary"></div>
                                            <a href="javascript:void(0)" class="file-item-name">
                                                assets
                                            </a>
                                            <div class="file-item-changed">02/15/2018</div>
                                            <div class="file-item-actions btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-round icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="ion ion-ios-more"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Rename</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Move</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Copy</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="file-item">
                                            <div class="file-item-select-bg bg-primary"></div>
                                            <label class="file-item-checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                            <div class="file-item-icon far fa-file-archive text-secondary"></div>
                                            <a href="javascript:void(0)" class="file-item-name">
                                                Archive.zip
                                            </a>
                                            <div class="file-item-changed">02/16/2018</div>
                                            <div class="file-item-actions btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-round icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="ion ion-ios-more"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Rename</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Move</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Copy</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="file-item">
                                            <div class="file-item-select-bg bg-primary"></div>
                                            <label class="file-item-checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                            <div class="file-item-icon fab fa-js text-secondary"></div>
                                            <a href="javascript:void(0)" class="file-item-name">
                                                Build.js
                                            </a>
                                            <div class="file-item-changed">02/17/2018</div>
                                            <div class="file-item-actions btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-round icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="ion ion-ios-more"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Rename</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Move</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Copy</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="file-item">
                                            <div class="file-item-select-bg bg-primary"></div>
                                            <label class="file-item-checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                            <div class="file-item-icon far fa-file-word text-secondary"></div>
                                            <a href="javascript:void(0)" class="file-item-name">
                                                Checklist.doc
                                            </a>
                                            <div class="file-item-changed">02/18/2018</div>
                                            <div class="file-item-actions btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-round icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="ion ion-ios-more"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Rename</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Move</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Copy</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="file-item">
                                            <div class="file-item-select-bg bg-primary"></div>
                                            <label class="file-item-checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                            <div class="file-item-icon fab fa-html5 text-secondary"></div>
                                            <a href="javascript:void(0)" class="file-item-name">
                                                Index.html
                                            </a>
                                            <div class="file-item-changed">02/19/2018</div>
                                            <div class="file-item-actions btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-round icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="ion ion-ios-more"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Rename</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Move</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Copy</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="file-item">
                                            <div class="file-item-select-bg bg-primary"></div>
                                            <label class="file-item-checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                            <div class="file-item-img" style="background-image: url(assets/img/bg/5.jpg)"></div>
                                            <a href="javascript:void(0)" class="file-item-name">
                                                Image-1.jpg
                                            </a>
                                            <div class="file-item-changed">02/20/2018</div>
                                            <div class="file-item-actions btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-round icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="ion ion-ios-more"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Rename</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Move</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Copy</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="file-item">
                                            <div class="file-item-select-bg bg-primary"></div>
                                            <label class="file-item-checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                            <div class="file-item-img" style="background-image: url(assets/img/bg/6.jpg)"></div>
                                            <a href="javascript:void(0)" class="file-item-name">
                                                Image-2.png
                                            </a>
                                            <div class="file-item-changed">02/21/2018</div>
                                            <div class="file-item-actions btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-round icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="ion ion-ios-more"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Rename</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Move</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Copy</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="file-item">
                                            <div class="file-item-select-bg bg-primary"></div>
                                            <label class="file-item-checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                            <div class="file-item-img" style="background-image: url(assets/img/bg/7.jpg)"></div>
                                            <a href="javascript:void(0)" class="file-item-name">
                                                Image-3.gif
                                            </a>
                                            <div class="file-item-changed">02/22/2018</div>
                                            <div class="file-item-actions btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-round icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="ion ion-ios-more"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Rename</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Move</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Copy</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="file-item">
                                            <div class="file-item-select-bg bg-primary"></div>
                                            <label class="file-item-checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                            <div class="file-item-icon fab fa-js text-secondary"></div>
                                            <a href="javascript:void(0)" class="file-item-name">
                                                Main.js
                                            </a>
                                            <div class="file-item-changed">02/23/2018</div>
                                            <div class="file-item-actions btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-round icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="ion ion-ios-more"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Rename</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Move</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Copy</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="file-item">
                                            <div class="file-item-select-bg bg-primary"></div>
                                            <label class="file-item-checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                            <div class="file-item-icon far fa-file text-secondary"></div>
                                            <a href="javascript:void(0)" class="file-item-name">
                                                MAKEFILE
                                            </a>
                                            <div class="file-item-changed">02/24/2018</div>
                                            <div class="file-item-actions btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-round icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="ion ion-ios-more"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Rename</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Move</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Copy</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="file-item">
                                            <div class="file-item-select-bg bg-primary"></div>
                                            <label class="file-item-checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                            <div class="file-item-icon far fa-file-pdf text-secondary"></div>
                                            <a href="javascript:void(0)" class="file-item-name">
                                                Presentation.pdf
                                            </a>
                                            <div class="file-item-changed">02/25/2018</div>
                                            <div class="file-item-actions btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-round icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="ion ion-ios-more"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Rename</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Move</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Copy</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="file-item">
                                            <div class="file-item-select-bg bg-primary"></div>
                                            <label class="file-item-checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                            <div class="file-item-icon far fa-file-alt text-secondary"></div>
                                            <a href="javascript:void(0)" class="file-item-name">
                                                README.txt
                                            </a>
                                            <div class="file-item-changed">02/26/2018</div>
                                            <div class="file-item-actions btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-round icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="ion ion-ios-more"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Rename</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Move</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Copy</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="file-item">
                                            <div class="file-item-select-bg bg-primary"></div>
                                            <label class="file-item-checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                            <div class="file-item-icon fab fa-css3 text-secondary"></div>
                                            <a href="javascript:void(0)" class="file-item-name">
                                                Style.css
                                            </a>
                                            <div class="file-item-changed">02/27/2018</div>
                                            <div class="file-item-actions btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-round icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="ion ion-ios-more"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Rename</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Move</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Copy</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="file-item">
                                            <div class="file-item-select-bg bg-primary"></div>
                                            <label class="file-item-checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                            <div class="file-item-icon far fa-file-audio text-secondary"></div>
                                            <a href="javascript:void(0)" class="file-item-name">
                                                Test.mp3
                                            </a>
                                            <div class="file-item-changed">02/28/2018</div>
                                            <div class="file-item-actions btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-round icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="ion ion-ios-more"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Rename</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Move</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Copy</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="file-item">
                                            <div class="file-item-select-bg bg-primary"></div>
                                            <label class="file-item-checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                            <div class="file-item-icon far fa-file-video text-secondary"></div>
                                            <a href="javascript:void(0)" class="file-item-name">
                                                Tutorial.avi
                                            </a>
                                            <div class="file-item-changed">03/01/2018</div>
                                            <div class="file-item-actions btn-group">
                                                <button type="button" class="btn btn-default btn-sm btn-round icon-btn borderless md-btn-flat hide-arrow dropdown-toggle" data-toggle="dropdown">
                                                    <i class="ion ion-ios-more"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Rename</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Move</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Copy</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Remove</a>
                                                </div>
                                            </div>
                                        </div>

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

