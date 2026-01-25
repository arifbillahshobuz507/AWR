<div class="hero-content d-flex min-vh-100">
        <div class="container my-auto">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                    <div class="hero-wrap rounded shadow-lg p-4 py-sm-5 px-sm-5 my-4">
                        <div class="hero-mask opacity-9 bg-dark"></div>
                        <div class="hero-content">
                            <div class="logo mb-4"> <a class="d-flex justify-content-center" href="index.html" title="Oxyy"><img src="images/logo-lg-light.png" alt="Oxyy"></a> </div>

                                <div class="mb-3 icon-group">
                                    <input type="text" class="form-control" id="title"  placeholder="Please Enter Name">
                                    <span class="icon-inside"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 940 610"><path fill="gray" d="M218.6 110.3C210.8 98.6 196.2 93.3 182.7 97.4C169.2 101.5 160 113.9 160 128L160 320L128 320C114.7 320 104 330.7 104 344C104 357.3 114.7 368 128 368L160 368L160 512C160 529.7 174.3 544 192 544C209.7 544 224 529.7 224 512L224 368L313.5 368L421.3 529.8C429.1 541.5 443.7 546.8 457.2 542.7C470.7 538.6 480 526.1 480 512L480 368L512 368C525.3 368 536 357.3 536 344C536 330.7 525.3 320 512 320L480 320L480 128C480 110.3 465.7 96 448 96C430.3 96 416 110.3 416 128L416 320L358.5 320L218.7 110.3zM390.5 368L416 368L416 406.3L390.5 368zM281.5 320L224 320L224 233.7L281.5 320z"/></svg></span>
                                </div>
                                <div class="mb-3 icon-group">
                                    <input type="email" class="form-control" id="email"  placeholder="Email Address">
                                    <span class="icon-inside"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 940 610"><path fill="gray" d="M112 128C85.5 128 64 149.5 64 176C64 191.1 71.1 205.3 83.2 214.4L291.2 370.4C308.3 383.2 331.7 383.2 348.8 370.4L556.8 214.4C568.9 205.3 576 191.1 576 176C576 149.5 554.5 128 528 128L112 128zM64 260L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 260L377.6 408.8C343.5 434.4 296.5 434.4 262.4 408.8L64 260z"/></svg></span>
                                </div>
                                <div class="mb-3 icon-group">
                                    <input type="password"  class="form-control" id="password"  placeholder="Password">
                                    <span class="icon-inside"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1040 610"><path fill="gray" d="M256 160L256 224L384 224L384 160C384 124.7 355.3 96 320 96C284.7 96 256 124.7 256 160zM192 224L192 160C192 89.3 249.3 32 320 32C390.7 32 448 89.3 448 160L448 224C483.3 224 512 252.7 512 288L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 288C128 252.7 156.7 224 192 224z"/></svg></span>
                                </div>
                                <div class="d-grid my-4">
                                    <button class="btn btn-primary shadow-none" onclick="onRegistration()">Sign up now </button>
                                </div>
                                <div class="row mt-4">
                                    <div class="col">
                                        <div class="form-check">
                                            <input id="remember-me" name="remember" class="form-check-input" type="checkbox">
                                            <label class="form-check-label text-light text-2" for="remember-me">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col text-end"><a class="text-2 link-light" href="{{route('sendOtp')}}">Forgot Password ?</a></div>
                                </div>

                            <div class="d-flex align-items-center mt-2 mb-3">
                                <hr class="flex-grow-1 border-light">
                                <span class="mx-2 text-white-50 text-2">Or Login</span>
                                <hr class="flex-grow-1 border-light">
                            </div>
                            <p class="text-2 text-white-50 text-center mb-0"><a class="text-3 link-light" href="{{route('login')}}">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    async function onRegistration(){
        let title = document.getElementById('title').value;
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;
        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if(title.length === 0){
            errorToast("Name is required")
        } else if (email.length ===0){
            errorToast("Email is required")
        }  else if (!emailPattern.test(email)){
            errorToast("Invalid email address")
        } else if (password.length ===0){
            errorToast("Password is required")
        }  else{
            showLoader()
            let res = await axios.post('/api/registration',{
                title:title,
                email:email,
                password:password,
            })
            hideLoader()
            if(res.data['code'] === 201 && res.data['status']==='success'){
                window.location.route = 'login';
            } else{
                errorToast(res.data['message'])
                if(res.data.errors) {
                    const firstError = Object.values(res.data.errors)[0][0];
                    errorToast(firstError);
                }
            }
        }
    }
</script>

