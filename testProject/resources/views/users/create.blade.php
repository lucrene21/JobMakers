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
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label class="form-label" for="first_name">First Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="fisrt_name" class="form-control @error('first_name') is-invalid @enderror"
                                   name="first_name" value="{{ old('first_name') }}" required placeholder="Enter your first name"/>
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="last_name">last Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="last_name" class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                   value="{{ old('last_name') }}" required placeholder="Enter your last name">
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="phone">Phone
                                <span class="text-danger">*</span>
                            </label>
                            <input type="numeric" id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone"
                                   value="{{ old('phone') }}" required placeholder="Enter your phone number">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="role">Account type</label>
                            <select id="role" class="form-control @error('role_id') is-invalid @enderror" name="role_id" value="{{ old('role_id') }}" required>
                                <option value="{{ old('role_id') }}">Choose the account type</option>
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->label }}</option>
                                @endforeach
                            </select>
                            @error('role_id')
                            <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="emailverify">Email
                                <span class="text-danger">*</span>
                            </label>
                            <input type="email" id="emailverify" class="form-control @error('email') is-invalid @enderror" name="email"
                                   value="{{ old('email')  }}" required placeholder="Enter your email" >
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="userpassword">Pick a password:
                                <span class="text-danger">*</span>
                            </label>
                            <input type="password" id="userpassword" class="form-control @error('password') is-invalid @enderror" name="password"
                                   required autocomplete="current-password" placeholder="Enter your password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                            <div class="help-block">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="password-confirm">Confirm password:
                                <span class="text-danger">*</span>
                            </label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                   required autocomplete="new-password" placeholder="Confirm your password">
                            <div class="invalid-feedback">Sorry, you missed this one.</div>
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



