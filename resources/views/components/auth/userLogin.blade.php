@extends('Admin.layout.gust')
@section('title')
    Login
@endsection
@section('content')
    <div class="hero-content d-flex min-vh-100">
        <div class="container my-auto">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                    <div class="hero-wrap rounded shadow-lg p-4 py-sm-5 px-sm-5 my-4">
                        <div class="hero-mask opacity-9 bg-dark"></div>
                        <div class="hero-content">
                            <div class="logo mb-4"> <a class="d-flex justify-content-center" href="index.html" title="Oxyy"><img src="images/logo-lg-light.png" alt="Oxyy"></a> </div>
                            <form id="loginForm" class="form-dark" method="post">
                                <div class="mb-3 icon-group">
                                    <input type="email" class="form-control" id="emailAddress" required placeholder="Email Address">
                                    <span class="icon-inside"><i class="fas fa-envelope"></i></span> </div>
                                <div class="mb-3 icon-group">
                                    <input type="password" class="form-control" id="loginPassword" required placeholder="Password">
                                    <span class="icon-inside"><i class="fas fa-lock"></i></span>
                                </div>
                                <div class="d-grid my-4">
                                    <button class="btn btn-primary shadow-none" type="submit">Sign In</button>
                                </div>
                                <div class="row mt-4">
                                    <div class="col">
                                        <div class="form-check">
                                            <input id="remember-me" name="remember" class="form-check-input" type="checkbox">
                                            <label class="form-check-label text-light text-2" for="remember-me">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col text-end"><a class="text-2 link-light" href="forgot-password-11.html">Forgot Password ?</a></div>
                                </div>
                            </form>
                            <div class="d-flex align-items-center mt-2 mb-3">
                                <hr class="flex-grow-1 border-light">
                                <span class="mx-2 text-white-50 text-2">Or Login with</span>
                                <hr class="flex-grow-1 border-light">
                            </div>
                            <div class="d-flex  flex-column align-items-center mb-3">
                                <ul class="social-icons social-icons-rounded">
                                    <li class="social-icons-facebook"><a href="#" data-bs-toggle="tooltip" data-bs-original-title="Log In with Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-twitter"><a href="#" data-bs-toggle="tooltip" data-bs-original-title="Log In with Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-icons-google"><a href="#" data-bs-toggle="tooltip" data-bs-original-title="Log In with Google"><i class="fab fa-google"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="#" data-bs-toggle="tooltip" data-bs-original-title="Log In with Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <p class="text-2 text-white-50 text-center mb-0">New to Oxyy? <a class="text-3 link-light" href="register-11.html">Sign up now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
