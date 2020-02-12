@extends('layouts.default')

@section('css')
    <link rel="stylesheet" media="screen, print" href="{{asset('theme')}}/css/datagrid/datatables/datatables.bundle.css">
@endsection

@section('contenu')
    <div>
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">JobMaker</a></li>
            <li class="breadcrumb-item">Order</li>
            <li class="breadcrumb-item active">Profile</li>
            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
        </ol>
        <div class="subheader">
            <h1 class="subheader-title">
                <i class="fas fa-user-circle"></i> Orders
                <small>
                    Profile layout
                </small>
            </h1>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            List of all <span class="fw-300"><i>Orders</i></span>
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
                                    <th>Job ID</th>
                                    <th>Price</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>State</th>
                                    <th>Creation Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($orders) && count($orders) > 0)
                                    @foreach($orders as $key => $order)
                                        <tr>
                                            <td>{{ $key }}</td>
                                            <td>{{ $order->job_id}}</td>
                                            <td>{{ $order->price }}</td>
                                            <td>{{ $order->started_at }}</td>
                                            <td>{{ $order->ended_at }}</td>
                                            <td>{{ $order->state }}</td>
                                            <td>{{ $order->created_at->format('d-m-Y  H:m:s') }}</td>
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

