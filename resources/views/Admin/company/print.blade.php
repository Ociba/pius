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
                            <div class="col-xl-12 col-md-12">
                                <div class="card">
                                @foreach($get_transaction_to_be_printed as $transaction)
                                <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-sm-6 pb-4">
                                        <div class="media align-items-center mb-4">
                                            <a href="index.html" class="navbar-brand app-brand demo py-0 mr-4">
                                                <span class="app-brand-logo demo">
                                                    <img src="{{ asset('assets/img/logo-dark.png')}}" alt="Brand Logo" class="img-fluid">
                                                </span>
                                                <span class="app-brand-text demo font-weight-bold text-dark ml-2">Empire</span>
                                            </a>
                                        </div>
                                        <div class="mb-1">Office 154, 330 North Brand Boulevard</div>
                                        <div class="mb-1">Glendale, CA 91203, USA</div>
                                        <div>+0 (123) 456 7891, +9 (876) 543 2198</div>
                                    </div>
                                    <div class="col-sm-6 text-right pb-4">
                                        <h6 class="text-big text-large font-weight-bold mb-3">INVOICE #49029</h6>
                                        <div class="mb-1">Date:
                                            <strong class="font-weight-semibold">{{ date('d M, Y', strtotime($transaction->created_at))}}</strong>
                                        </div>
                                        <div>Due date:
                                            <strong class="font-weight-semibold">{{ date('d M, Y', strtotime($transaction->end_date))}}</strong>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-4">
                                <div class="row">
                                    <div class="col-sm-6 mb-4">
                                        <div class="font-weight-bold mb-2">Invoice To:</div>
                                        <div>{{$transaction->company}}</div>
                                        <div>{{$transaction->company}}</div>
                                        <div>{{$transaction->phone}}</div>
                                        <div>{{$transaction->email}}</div>
                                    </div>
                                    <div class="col-sm-6 mb-4">
                                        <div class="font-weight-bold mb-2">Payment Details:</div>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="pr-3">Total Due:</td>
                                                    <td>
                                                        <strong>sh. {{$transaction->amount}}</strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-3">Deposited:</td>
                                                    <td>{{$transaction->deposit}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-3">Balance:</td>
                                                    <td>{{$transaction->balance}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="table-responsive mb-4">
                                    <table class="table m-0">
                                        <thead>
                                            <tr>
                                                <th class="py-3">
                                                    Task description
                                                </th>
                                                <th class="py-3">
                                                    Rate
                                                </th>
                                                <th class="py-3">
                                                    Hours
                                                </th>
                                                <th class="py-3">
                                                    Line total
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="py-3">
                                                    <div class="font-weight-semibold">{{$transaction->item}}</div>
                                                </td>
                                                <td class="py-3">
                                                    <strong>{{$transaction->quantity}}</strong>
                                                </td>
                                                <td class="py-3">
                                                    <strong>{{$transaction->created_at}}</strong>
                                                </td>
                                                <td class="py-3">
                                                    <strong>sh. {{$transaction->amount}}</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-right py-3">
                                                    Subtotal:
                                                    <br> Tax(0%):
                                                    <br>
                                                    <span class="d-block text-big mt-2">Total:</span>
                                                </td>
                                                <td class="py-3">
                                                    <strong>{{$transaction->amount}}</strong>
                                                    <br>
                                                    <strong>0</strong>
                                                    <br>
                                                    <strong class="d-block text-big mt-2">{{$transaction->amount}}</strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-muted">
                                    <strong>Note:</strong> This document is invalid without original Official Stamp from right person for this company.
                                </div>
                                <input type="hidden" value="{{$transaction->id}}" >
                            </div>
                            <div class="card-footer text-right">
                                <a href="/print-copy-now/{{$transaction->id}}" target="_blank" class="btn btn-default"><i class="ion ion-md-print"></i>&nbsp; Print</a>
                                <button type="button" class="btn btn-primary ml-2"><i class="ion ion-ios-paper-plane"></i>&nbsp; Send</button>
                            </div>
                            @endforeach
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
</body>
</html>

