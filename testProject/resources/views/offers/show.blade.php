@extends('layouts.default')

@section('css')
    <link rel="stylesheet" media="screen, print" href="{{asset('theme')}}/css/datagrid/datatables/datatables.bundle.css">
@endsection

@section('contenu')
    <div>
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">JobMaker</a></li>
            <li class="breadcrumb-item">Offer</li>
            <li class="breadcrumb-item active">Profile</li>
            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
        </ol>
        <div class="subheader">
            <h1 class="subheader-title">
                <i class="fas fa-user-circle"></i> Offers
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
                            List of all <span class="fw-300"><i>Offers</i></span>
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
                                    <th>Label</th>
                                    <th>Description</th>
                                    <th>Minimum price</th>
                                    <th>Maximum price</th>
                                    <th>Job ID</th>
                                    <th>User ID</th>
                                    <th>Delivery time (days) </th>
                                    <th>Creation Date</th>
                                    <th>Revisions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($offers) && count($offers) > 0)
                                    @foreach($offers as $key => $offer)
                                        <tr>
                                            <td>{{ $key }}</td>
                                            <td>{{ $offer->label }}</td>
                                            <td>{{ $offer->description }}</td>
                                            <td>{{ $offer->price_min }}</td>
                                            <td>{{ $offer->price_max }}</td>
                                            <td>{{ $offer->job_id }}</td>
                                            <td>{{ $offer->user_id }}</td>
                                            <td>{{ $offer->delivery_time }}</td>
                                            <td>{{ $offer->created_at->format('d-m-Y  H:m:s') }}</td>
                                            <td>{{ $offer->revision }}</td>
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

