<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    @if(isset($categories))
                        <div class="form-group">
                            <label class="form-label" for="categoryParent">Choose parent category ?</label>
                            <select id="categoryParent" class="form-control @error('category_id') is-invalid @enderror"
                                    name="category_id" value="{{ old('category_id') }}" required>
                                <option value="{{ old('category_id') }}">Choose the account type</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->label }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    @endif
                    <div class="form-group">
                        <label class="form-label" for="label">Category name
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="label" class="form-control @error('label') is-invalid @enderror"
                               name="label" value="{{ old('label') }}" required placeholder="Enter the category name"/>
                        @error('label')
                        <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="last_name">Description
                            <span class="text-danger">*</span>
                        </label>
                        <textarea type="text" id="description"
                                  class="form-control @error('description') is-invalid @enderror" name="description"
                                  required placeholder="Enter your last name">{{ old('description') }}</textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>



