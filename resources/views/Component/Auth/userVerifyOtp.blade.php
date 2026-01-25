@extends('Admin.layout.gust')
@section('title')
    Verify Otp
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
                            <h4 class="text-white mb-4">Two-Step Verification</h4>
                            <p><img class="img-fluid" src="images/otp-icon-light.png" alt="verification"></p>
                            <p class="text-light mb-4">Enter the verification code we sent to <br>
                                <span class="text-white text-4">+1*******179</span></p>
                            <form id="otp-screen" class="form-dark" method="post">
                                <div class="row g-3">
                                    <div class="col">
                                        <input type="text" class="form-control text-center text-6 py-2" maxlength="1" required autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control text-center text-6 py-2" maxlength="1" required autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control text-center text-6 py-2" maxlength="1" required autocomplete="off">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control text-center text-6 py-2" maxlength="1" required autocomplete="off">
                                    </div>
                                </div>
                                <div class="d-grid my-4">
                                    <button class="btn btn-primary shadow-none" type="submit">Verify</button>
                                </div>
                            </form>
                            <p class="text-white-50 text-2 mb-0">Not received your code? <a class="text-3 link-light" href="#">Resend code</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
