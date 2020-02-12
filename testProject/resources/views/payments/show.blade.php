@extends('layouts.default')

@section('css')
    <link rel="stylesheet" media="screen, print" href="{{asset('theme')}}/css/datagrid/datatables/datatables.bundle.css">
@endsection

@section('contenu')
    <div>
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">JobMaker</a></li>
            <li class="breadcrumb-item">Payment</li>
            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
        </ol>
        <div class="subheader">
            <h1 class="subheader-title">
                <i class="fas fa-user-circle"></i>  {{ Auth::user()->first_name .' '. Auth::user()->last_name }}<br/>
                <small>
                    Payment Details
                </small>
            </h1>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            List of all <span class="fw-300"><i>Payments</i></span>
                        </h2>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            @if(isset($message))
                                <div class="panel-tag">{{ $message }}</div>
                        @endif
                        <!-- datatable start -->
                            <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>reference</th>
                                    <th>Payment Method</th>
                                    <th>Fee</th>
                                    <th>status</th>
                                    <th>amount</th>
                                    <th>Initiation day</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($payments) && count($payments) > 0)
                                    @foreach($payments as $key => $payment)
                                        <tr>
                                            <td>{{ $key }}</td>
                                            <td>{{ $payment->reference }}</td>
                                            <td>{{ $payment->payment_method_id}}</td>
                                            <td>{{ $payment->fee}}</td>
                                            <td>{{ $payment->status}}</td>
                                            <td>{{ $payment->amount }}</td>
                                            <td>{{ $payment->created_at->format('d-m-Y  H:m:s') }}</td>
                                        </tr>
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                            <!-- datatable end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('theme')}}/js/datagrid/datatables/datatables.bundle.js"></script>

    <script>
        $(document).ready(function() {

        });
        });
    </script>
@endsection

