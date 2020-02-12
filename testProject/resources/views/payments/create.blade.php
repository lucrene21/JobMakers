


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
                <form action="{{ route('payments.store') }}" method="POST">
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label class="form-label" for="amount">Amount
                            <span class="text-danger">*</span>
                        </label>
                        <input type="numeric" id="amount" class="form-control @error('amount') is-invalid @enderror"
                               name="amount" value="{{ old('amount') }}" required placeholder="Enter the amount"/>
                        @error('amount')
                        <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="identifiant">Identifiant
                            <span class="text-danger">*</span>
                        </label>
                        <input type="numeric" id="identifiant" class="form-control @error('identifiant') is-invalid @enderror" name="identifiant"
                               value="{{ old('identifiant') }}" required placeholder="Enter your ID">
                        @error('identifiant')
                        <span class="invalid-feedback" role="alert">
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label class="form-label" for="fee">Fee
                            <span class="text-danger">*</span>
                        </label>
                        <input type="numeric" id="fee" class="form-control @error('fee') is-invalid @enderror" name="fee"
                               value="{{ old('fee') }}" required placeholder="Enter the fee">
                        @error('fee')
                        <span class="invalid-feedback" role="alert">
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="reference">Reference
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="reference" class="form-control @error('reference') is-invalid @enderror" name="reference"
                               value="{{ old('reference') }}" required placeholder="Enter the transaction ID">
                        @error('reference')
                        <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

{{--                    <div class="form-group">--}}
{{--                        <label class="form-label" for="status">Status--}}
{{--                            <span class="text-danger">*</span>--}}
{{--                        </label>--}}
{{--                        <input type="text" id="status" class="form-control @error('status') is-invalid @enderror" name="status"--}}
{{--                               value="{{ old('status')  }}" required placeholder="Enter your signature" >--}}
{{--                        @error('status')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                                      <strong>{{ $message }}</strong>--}}
{{--                                </span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                   --}}


                    <div class="form-group">
                        <label class="form-label" for="payment_method">Payment Method</label>
                        <select id="role" class="form-control @error('payment_method') is-invalid @enderror" name="payment_method" value="{{ old('payment_method') }}" required>
                            <option value="{{ null  }}">Choose a payment method</option>
                            @foreach($payments as $payment)
                                <option value="{{ $payment->id }}">{{ $payment->label }}</option>
                            @endforeach
                        </select>
                        @error('payment_method')
                        <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="order-id">transaction id
                            <span class="text-danger">*</span>
                        </label>
                        <input id="order_id" type="text" class="form-control" name="order_id"
                               required autocomplete="new-password" placeholder="order_id">
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




