@extends('layouts.default')

@section('css')
    <link rel="stylesheet" media="screen, print" href="{{asset('theme')}}/css/datagrid/datatables/datatables.bundle.css">
@endsection

@section('contenu')
    <div>
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">JobMaker</a></li>
            <li class="breadcrumb-item">User</li>
            <li class="breadcrumb-item active">Profile</li>
            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
        </ol>
        <div class="subheader">
            <h1 class="subheader-title">
                <i class="fas fa-user-circle"></i> Users
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
                            List of all <span class="fw-300"><i>Users</i></span>
                        </h2>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Add User</button>
                        @include('users.create')

                        {{--                        <div class="panel-toolbar">--}}
{{--                            <a href="{{ route('users.create') }}"><button class="btn btn-primary btn-sm">--}}
{{--                               <span class="fas fa-user-plus mr-1"></span> Add User--}}
{{--                            </button></a>--}}
{{--                        </div>--}}
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
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Start date</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @if(isset($users) && count($users) > 0)
                                        @foreach($users as $key => $user)
                                            <tr>
                                                <td>{{ $key }}</td>
                                                <td>{{ $user->role_id }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                                                <td>{{ $user->phone }}</td>
                                                <td>{{ $user->created_at->format('d-m-Y  H:m:s') }}</td>
                                                <td>
                                                    <div class="row justify-content-center">
                                                        <div class="col-auto">
                                                            <a title="show users profile" href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-icon rounded-circle waves-effect waves-themed">
                                                                <i class="fal fa-eye"></i>
                                                            </a>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a title="update user" href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-icon rounded-circle waves-effect waves-themed">
                                                                <i class="fal fa-edit"></i>
                                                            </a>
                                                        </div>
                                                        <div class="col-auto">
                                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-danger btn-icon rounded-circle waves-effect waves-themed">
                                                                    <i class="fal fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
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
@endsection
