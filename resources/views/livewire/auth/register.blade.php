<div>
    {{-- Register View --}}
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('auth/images/register.png') }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 order-md-2 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Sign In to <strong>Colorlib</strong></h3>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur
                                    adipisicing.</p>
                            </div>
                            <form wire:submit.prevent="register">
                                <div class="form-group first">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" wire:model.defer="name">
                                </div>
                                @error('name')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                <div class="form-group first">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" wire:model.defer="email">
                                </div>
                                @error('email')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                <div class="form-group first">
                                    <label for="phone">phone number</label>
                                    <input type="text" class="form-control" id="phone" wire:model.defer="phone">
                                </div>
                                @error('phone')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                <div class="form-group first">
                                    <label for="gender">Gender</label>
                                    <select class="form-control" id="gender" wire:model.defer="gender">
                                        <option selected style="font-size: 5px;"></option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                @error('gender')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                <div class="form-group first">
                                    <label for="code">Tool Code</label>
                                    <input type="text" class="form-control" id="code" wire:model.defer="code">
                                </div>
                                @error('code')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password"
                                        wire:model.defer="password">
                                </div>
                                @error('password')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                <input type="submit" value="Register" class="btn text-white btn-block btn-primary">
                            </form>
                        </div>
                        <span style="padding-top: 20px;">if you already have an account please go to<a href="/project/scale" style="color: blue;"> Login</a></span>
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
