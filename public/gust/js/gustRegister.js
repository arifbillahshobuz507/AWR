async function onRegistration() {
    let title = document.getElementById("title").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (title.length === 0) {
        errorToast("Name is required");
    } else if (email.length === 0) {
        errorToast("Email is required");
    } else if (!emailPattern.test(email)) {
        errorToast("Invalid email address");
    } else if (password.length === 0) {
        errorToast("Password is required");
    } else {
        try {
            showLoader();
            let res = await axios.post("/api/registration", {
                title: title,
                email: email,
                password: password,
            });
            hideLoader();
            console.log(res);
            if (res.data.code === 201 && res.data.status === "success") {
                successToast(res.data["message"]);
                window.location.href = "login";
            } else {
                errorToast(res.data["message"]);
                if (res.data.errors) {
                    const firstError = Object.values(res.data.errors)[0][0];
                    errorToast(firstError);
                }
            }
        } catch (error) {
            hideLoader();
            errorToast(error.response.data.message);
            console.log(error);
        }
    }
}
