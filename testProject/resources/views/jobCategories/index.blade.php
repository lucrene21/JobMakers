@extends('layouts.default')

@section('css')
    <link rel="stylesheet" media="screen, print"
          href="{{asset('theme')}}/css/datagrid/datatables/datatables.bundle.css">
@endsection

@section('contenu')
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        List of all <span class="fw-300"><i>Job Categories</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#categoryModal"
                                data-whatever="@getbootstrap">
                            <span class="fas fa-plus mr-1"></span> Add Job Category
                        </button>
                        @include('jobCategories.create')
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
                                <th>Parent</th>
                                <th>Label</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($categories) && count($categories) > 0)
                                @foreach($categories as $key => $category)
                                    <tr>
                                        <td>{{ $key }}</td>
                                        <td>{{ $category->category !== null ? $category->category->label : 'No' }}</td>
                                        <td>{{ $category->label }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td>
                                            <div class="row justify-content-center">
                                                <div class="col-auto">
                                                    <a title="update user"
                                                       href="{{ route('categories.edit', $category->id) }}"
                                                       class="btn btn-warning btn-icon rounded-circle waves-effect waves-themed">
                                                        <i class="fal fa-edit"></i>
                                                    </a>
                                                </div>
                                                <div class="col-auto">
                                                    <form action="{{ route( 'categories.destroy', $category->id )}}"
                                                          method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                                class="btn btn-danger btn-icon rounded-circle waves-effect waves-themed">
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
@endsection

@section('script')
    <script src="{{asset('theme')}}/js/datagrid/datatables/datatables.bundle.js"></script>
@endsection
