<div class="hero-content d-flex min-vh-100">
    <div class="container my-auto">
        <div class="row">
            <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                <div class="hero-wrap rounded shadow-lg p-4 py-sm-5 px-sm-5 my-4">
                    <div class="hero-mask opacity-9 bg-dark"></div>
                    <div class="hero-content">
                        <div class="logo mb-4"> <a class="d-flex justify-content-center" href="index.html"
                                title="Oxyy"><img src="{{ asset('gust/img/logo.png') }}" height="100" width="100"
                                    style="border-radius:10px;" alt="AWR"></a> </div>
                        <div class="form-dark">
                            <div class="mb-3 icon-group">
                                <input type="password" class="form-control" id="password" required
                                    placeholder="New Password">
                                <span class="icon-inside"><i class="fas fa-envelope"></i></span>
                            </div>
                            <div class="mb-3 icon-group">
                                <input type="password" class="form-control" id="cPassword" required
                                    placeholder="Confirm Password">
                                <span class="icon-inside"><i class="fas fa-lock"></i></span>
                            </div>
                            <div class="d-grid my-4">
                                <button class="btn btn-primary shadow-none" onclick="resetPassword()"
                                    type="submit">Reset Password</button>
                            </div>
                            <div class="row mt-4">
                                <div class="col">
                                    <div class="form-check">
                                        <input id="remember-me" name="remember" class="form-check-input"
                                            type="checkbox">
                                        <label class="form-check-label text-light text-2" for="remember-me">Remember
                                            Me</label>
                                    </div>
                                </div>
                                <div class="col text-end"><a class="text-2 link-light" href="{{ route('sendOtp') }}"
                                        style="text-decoration: none">Forgot Password ?</a></div>
                            </div>

                        </div>
                        <div class="d-flex align-items-center mt-2 mb-3">
                            <hr class="flex-grow-1 border-light">
                            <span class="mx-2 text-white-50 text-2">Or Login with</span>
                            <hr class="flex-grow-1 border-light">
                        </div>
                        <p class="text-2 text-white-50 text-center mb-0">New to Oxyy? <a class="text-3 link-light"
                                href="{{ route('register') }}" style="text-decoration: none">Sign up now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
