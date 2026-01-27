async function sendOtp() {
    const email = document.getElementById("email").value;
    const validEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email === "") {
        errorToast("Email is required");
        return;
    }

    if (!validEmail.test(email)) {
        errorToast("Please enter a valid email address");
        return;
    }

    try {
        showLoader();
        const res = await axios.post("/api/send-otp", {
            email: email,
        });
        hideLoader();
        console.log(res.data);

        if (res.data.status === "success") {
            successToast(res.data.message);
            console.log(res.data.message);

            setTimeout(() => {
                window.location.href = "verifyOtp";
            }, 2000);
        } else {
            errorToast(res.data.message || "Something went wrong");
        }
    } catch (error) {
        hideLoader();
        if (error.response) {
            errorToast(error.response.data.message || "Server error");
        } else {
            errorToast("Network error. Please try again.");
        }
        console.error("OTP Error:", error);
    }
}
