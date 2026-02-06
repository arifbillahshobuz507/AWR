<div class="hero-content d-flex min-vh-100">
    <div class="container my-auto">
        <div class="row">
            <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                <div class="hero-wrap rounded shadow-lg p-4 py-sm-5 px-sm-5 my-4">
                    <div class="hero-mask opacity-9 bg-dark"></div>
                    <div class="hero-content text-center">
                        <div class="text-center mb-3">
                            <img src="{{ asset('gust/img/logo.png') }}" height="100" width="100"
                                style="border-radius:10px;" alt="AWR">
                        </div>
                        <h4 class="text-white mb-4">Forgot password?</h4>
                        <p class="text-light mb-4">Enter the email address</p>
                        <div class="form-dark">
                            <div class="mb-3 icon-group">
                                <input type="text" class="form-control" id="email" required
                                    placeholder="Enter Email Address">
                                <span class="icon-inside"><i class="fas fa-envelope"></i></span>
                            </div>
                            <div class="d-grid mt-4">
                                <button class="btn btn-primary shadow-none" onclick="sendOtp()">Continue</button>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mt-2 mb-3">
                            <hr class="flex-grow-1 border-light">
                            <span class="mx-2 text-white-50 text-2">Or Login with</span>
                            <hr class="flex-grow-1 border-light">
                        </div>
                        <p class="text-2 text-white-50 text-center mb-0">Return to <a class="text-3 link-light"
                                href="{{ route('login') }}" style="text-decoration: none;">Sign in now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
