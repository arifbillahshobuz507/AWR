const inputs = document.querySelectorAll(".otp-input");

// input move
inputs.forEach((input, index) => {
    input.addEventListener("input", () => {
        input.value = input.value.replace(/\D/g, "");
        if (input.value && index < inputs.length - 1) {
            inputs[index + 1].focus();
        }
    });

    input.addEventListener("keydown", (e) => {
        if (e.key === "Backspace" && !input.value && index > 0) {
            inputs[index - 1].focus();
        }
    });
});

// paste support
inputs[0].addEventListener("paste", (e) => {
    e.preventDefault();
    const otp = e.clipboardData
        .getData("text")
        .replace(/\D/g, "")
        .slice(0, inputs.length);

    otp.split("").forEach((d, i) => {
        inputs[i].value = d;
    });

    inputs[Math.min(otp.length, inputs.length) - 1].focus();
});

// get otp
function getOtp() {
    return Array.from(inputs)
        .map((i) => i.value)
        .join("");
}

// VERIFY OTP (easy version)
async function verifyOtp() {
    const otp = getOtp();
    const email = sessionStorage.getItem("email");

    if (!email) {
        errorToast("Session expired. Please request OTP again");
        return;
    }

    if (otp.length !== inputs.length) {
        errorToast("Please enter complete OTP");
        return;
    }

    try {
        showLoader();

        const res = await axios.post("/api/verify-otp", {
            email: email,
            otp: otp,
        });

        hideLoader();

        if (res.data.status === "success") {
            successToast(res.data.message || "OTP verified successfully");

            setTimeout(() => {
                window.location.href = "/login";
            }, 1500);
        } else {
            errorToast(res.data.message || "Invalid OTP");
        }
    } catch (error) {
        hideLoader();

        if (error.response) {
            errorToast(error.response.data.message || "Server error");
        } else {
            errorToast("Network error. Please try again");
        }

        console.error("Verify OTP Error:", error);
    }
}
