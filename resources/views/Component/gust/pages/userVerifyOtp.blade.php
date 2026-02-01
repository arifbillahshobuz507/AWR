<div class="hero-content d-flex min-vh-100">
    <div class="container my-auto">
        <div class="row">
            <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                <div class="hero-wrap rounded shadow-lg p-4 py-sm-5 px-sm-5 my-4">
                    <div class="hero-mask opacity-9 bg-dark"></div>
                    <div class="hero-content text-center">
                        <div class="logo mb-4"> <a class="d-flex justify-content-center" href="index.html"
                                title="Oxyy"><img src="{{ asset('gust/img/logo.png') }}" height="100" width="100"
                                    style="border-radius:10px;" alt="AWR"></a> </div>
                        <h4 class="text-white mb-4">Verify Your Email</h4>
                        <p class="text-light mb-4">Enter the verification code<br>
                        </p>
                        <div class="form-dark">
                            <div class="row g-2 justify-content-center mb-5">
                                <div class="col-2"><input class="form-control text-center otp-input" maxlength="1"
                                        inputmode="numeric"></div>
                                <div class="col-2"><input class="form-control text-center otp-input" maxlength="1"
                                        inputmode="numeric"></div>
                                <div class="col-2"><input class="form-control text-center otp-input" maxlength="1"
                                        inputmode="numeric"></div>
                                <div class="col-2"><input class="form-control text-center otp-input" maxlength="1"
                                        inputmode="numeric"></div>
                                <div class="col-2"><input class="form-control text-center otp-input" maxlength="1"
                                        inputmode="numeric"></div>
                                <div class="col-2"><input class="form-control text-center otp-input" maxlength="1"
                                        inputmode="numeric"></div>
                            </div>
                            <button class="btn btn-primary w-100 mb-3" onclick="verifyOtp()">Verify OTP</button>
                        </div>
                        <p class="text-white-50 text-2 mb-0">Not received your code? <a class="text-3 link-light"
                                href="#" style="text-decoration: none" onclick="sendOtpAgen()">Resend code</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
