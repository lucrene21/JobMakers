


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('jobs.store') }}" method="POST">
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label class="form-label" for="label">label
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="label" class="form-control @error('label') is-invalid @enderror"
                               name="amount" value="{{ old('label') }}" required placeholder="Enter the label"/>
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
                        <input type="text" id="description" class="form-control @error('description') is-invalid @enderror" name="description"
                               value="{{ old('description') }}" required placeholder="Enter your ID">
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label class="form-label" for="type">type
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="type" class="form-control @error('type') is-invalid @enderror" name="type"
                               value="{{ old('type') }}" required placeholder="Enter the type">
                        @error('type')
                        <span class="invalid-feedback" role="alert">
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="price_max">Maximum Price
                            <span class="text-danger">*</span>
                        </label>
                        <input type="numeric" id="price_max" class="form-control @error('price_max') is-invalid @enderror" name="price_max"
                               value="{{ old('price_max') }}" required placeholder="Enter the max price">
                        @error('price_max')
                        <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="price_min">Minimum price
                            <span class="text-danger">*</span>
                        </label>
                        <input type="numeric" id="price_min" class="form-control @error('price_min') is-invalid @enderror" name="price_min"
                               value="{{ old('price_min') }}" required placeholder="Enter the max price">
                        @error('price_min')
                        <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="delivery_time">Delivery Time
                            <span class="text-danger">*</span>
                        </label>
                        <input type="date" id="delivery_time" class="form-control @error('delivery_time') is-invalid @enderror" name="delivery_time"
                               value="{{ old('delivery_time') }}" required placeholder="Enter the max price">
                        @error('delivery_time')
                        <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="{{ route('payments.store') }}"><button type="submit" class="btn btn-primary">Add</button></a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>





