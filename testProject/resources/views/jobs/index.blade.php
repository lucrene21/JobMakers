@extends('layouts.default')

@section('css')
    <link rel="stylesheet" media="screen, print" href="{{asset('theme')}}/css/datagrid/datatables/datatables.bundle.css">
@endsection

@section('contenu')
    <div>
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">JobMaker</a></li>
            <li class="breadcrumb-item">Job</li>
            <li class="breadcrumb-item active">Profile</li>
            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
        </ol>
        <div class="subheader">
            <h1 class="subheader-title">
                <i class="fas fa-user-circle"></i> Jobs
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
                            List of all <span class="fw-300"><i>Jobs</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-primary btn-sm">
                                <span class="fas fa-user-plus mr-1"></span> Add Job
                            </button>
                        </div>
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
                                    <th>Job Label</th>
                                    <th>Type</th>
                                    <th>Minimum price</th>
                                    <th>Maximum price</th>
                                    <th>Delivery time (days) </th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($jobs) && count($jobs) > 0)
                                    @foreach($jobs as $key => $job)
                                        <tr>
                                            <td>{{ $key }}</td>
                                            <td>{{ $job->label }}</td>
                                            <td>{{ $job->type }}</td>
                                            <td>{{ $job->price_min }}</td>
                                            <td>{{ $job->price_max }}</td>
                                            <td>{{ $job->delivery_time }}</td>
                                            <td>{{ $job->created_at->format('d-m-Y  H:m:s') }}</td>
                                            <td>
                                                <a title="show jobs profile" href="{{ route('jobs.show', $job->id) }}" class="btn btn-info btn-icon rounded-circle waves-effect waves-themed">
                                                    <i class="fal fa-eye"></i>
                                                </a>
                                                <a title="update job" href="{{ route('jobs.edit', $job->id) }}" class="btn btn-warning btn-icon rounded-circle waves-effect waves-themed">
                                                    <i class="fal fa-edit"></i>
                                                </a>
                                                <a title="delete job" class="btn btn-danger btn-icon rounded-circle waves-effect waves-themed">
                                                    <form action="{{ route('jobs.destroy', $job->id) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fal fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </a>
                                            </td>
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

