async function resetPassword() {
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("cPassword").value;
    if (password.length < 8) {
        errorToast("Password must be at least 8 characters long.");
        return;
    } else if (password !== confirmPassword) {
        errorToast("Passwords do not match!");
        return;
    } else {
        try {
            showLoader();
            const result = await axios.post("/api/reset-password", {
                password: password,
            });
            console.log(result);
            hideLoader();
            if (result.data.status === "success") {
                successToast(
                    result.data.message || "Password reset successfully",
                );
                setTimeout(() => {
                    window.location.href = "/login";
                }, 1500);
            } else {
                errorToast(result.data.message || "Failed to reset password");
            }
        } catch (error) {
            hideLoader();
            console.log(error);
            if (error.response) {
                errorToast(error.response.data.message || "Server error");
            } else {
                errorToast("Network error. Please try again");
            }
            console.error("Reset Password Error:", error);
        }
    }
    // Proceed with password reset logic
    console.log("Resetting password for:", password);
}
