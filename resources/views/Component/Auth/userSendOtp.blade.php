@extends('Admin.layout.gust')
@section('title')
    Send Otp
@endsection
@section('content')
    <div class="hero-content d-flex min-vh-100">
        <div class="container my-auto">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                    <div class="hero-wrap rounded shadow-lg p-4 py-sm-5 px-sm-5 my-4">
                        <div class="hero-mask opacity-9 bg-dark"></div>
                        <div class="hero-content text-center">
                            <div class="logo mb-4"> <a class="d-flex justify-content-center" href="index.html" title="Oxyy"><img src="images/logo-lg-light.png" alt="Oxyy"></a> </div>
                            <h4 class="text-white mb-4">Forgot password?</h4>
                            <p class="text-light mb-4">Enter the email address or mobile number associated with your account.</p>
                            <form id="forgotForm" class="form-dark" method="post">
                                <div class="mb-3 icon-group">
                                    <input type="text" class="form-control" id="emailAddress" required placeholder="Enter Email Address">
                                    <span class="icon-inside"><i class="fas fa-envelope"></i></span>
                                </div>
                                <div class="d-grid mt-4">
                                    <button class="btn btn-primary shadow-none" type="submit">Continue</button>
                                </div>
                            </form>
                            <div class="d-flex align-items-center mt-2 mb-3">
                                <hr class="flex-grow-1 border-light">
                                <span class="mx-2 text-white-50 text-2">Or Login with</span>
                                <hr class="flex-grow-1 border-light">
                            </div>
                            <div class="d-flex flex-column align-items-center mb-3">
                                <ul class="social-icons social-icons-rounded">
                                    <li class="social-icons-facebook"><a href="#" data-bs-toggle="tooltip" data-bs-original-title="Log In with Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-twitter"><a href="#" data-bs-toggle="tooltip" data-bs-original-title="Log In with Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-icons-google"><a href="#" data-bs-toggle="tooltip" data-bs-original-title="Log In with Google"><i class="fab fa-google"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="#" data-bs-toggle="tooltip" data-bs-original-title="Log In with Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <p class="text-2 text-white-50 text-center mb-0">Return to <a class="text-3 link-light" href="login-11.html">Sign in now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
