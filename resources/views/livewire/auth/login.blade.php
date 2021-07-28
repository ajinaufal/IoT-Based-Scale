<div>
    {{-- Login View --}}
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <img src="{{asset('auth/images/login2.png')}}" alt="Image" class="img-fluid">
                    <center> <h4><strong>your mass index reflects your health</strong></h4> </center>
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Login  <strong>Miot</strong></h3>
                                <h4>Welcome back!</h4>
                            </div>
                            <form wire:submit.prevent="authenticate">
                                <div class="form-group first">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" wire:model.defer="email">
                                    @error('email')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" wire:model.defer="password">
                                    @error('password')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">
                            </form>
                        </div>
                        <span style="padding-top: 20px;">if you don't have an account please go to<a href="/project/scale/register" style="color: blue;"> Register</a></span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- JS Login --}}
    <script src="{{ asset('auth/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('auth/js/popper.min.js') }}"></script>
    <script src="{{ asset('auth/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('auth/js/main.js') }}"></script>
</div>
