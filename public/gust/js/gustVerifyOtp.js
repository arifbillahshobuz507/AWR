const { default: axios } = require("axios")

async  function verifyOtp(){
    let postBody={"email":sessionStorage.getItem("email"), "otp":document.getElementById('otp').value}
    const resul = axios.post()
}