@extends('layouts.default')
@section('css')
@endsection

@section('contenu')
    <div class="row">
        <div class="col-xl-12">
            <h2 class="fs-xxl fw-500 mt-4 text-center">
                Update Category Informations
            </h2>
        </div>
        <div class="col-xl-6 ml-auto mr-auto">
            <div class="card p-4 rounded-plus bg-faded">
                <form method="POST" action="{{ route('categories.update', $category->id) }}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label class="form-label" for="label">Label
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="label" class="form-control @error('label') is-invalid @enderror"
                               name="label" value="{{ $category->label }}" required
                               placeholder="Edit the category name"/>
                        @error('label')
                        <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="description">Description
                            <span class="text-danger">*</span>
                        </label>
                        <textarea type="text" id="description"
                                  class="form-control @error('description') is-invalid @enderror"
                                  name="description" required
                                  placeholder="Edit the category name">{{ $category->description }}</textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                            </span>
                        @enderror
                    </div>


                    <div class="row justify-content-center">
                        <a href="{{ route('categories.index') }}"
                           class="btn mr-2 btn-danger btn-lg mt-3">Cancel</a>
                        <button class="btn btn-primary btn-lg mt-3" type="submit">update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

