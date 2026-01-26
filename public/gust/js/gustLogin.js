async function userLogin() {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email === "") {
        errorToast("Email is required");
        return;
    }
    if (!emailPattern.test(email)) {
        errorToast("Invalid email format");
        return;
    }
    if (password === "") {
        errorToast("Password is required");
        return;
    }
    try {
        showLoader();
        let res = await axios.post("/api/login", {
            email: email,
            password: password,
        });
        hideLoader();
        if (res.data.status === "success" && res.data.code === 200) {
            successToast(res.data.message);
            setTimeout(() => {
                window.location.href = "/dashboard";
            }, 1500);
        }
    } catch (error) {
        hideLoader();
        if (error.response) {
            errorToast(error.response.data.message);
        } else {
            errorToast("Server not responding");
        }
    }
}
