<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
    <div style="margin:50px auto;width:70%;padding:20px 0">
        <div style="border-bottom:1px solid #eee">
            <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">{{env('app_name')}}</a>
        </div>
        <p style="font-size:1.1em">Hi {{$title}},</p>
        <p>Thank you for choosing {{env('app_name')}}. Use the following OTP to complete your Sign Up procedures. OTP is valid for 5 minutes</p>
        <h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">{{$otp}}</h2>
        <p style="font-size:0.9em;">Regards,<br />{{env('app_name')}}</p>
        <hr style="border:none;border-top:1px solid #eee" />
        <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
            <p>{{env('app_name')}}</p>
            <p> Pragpur, Daulotpur, Ksuhtia </p>
            <p>Bangladesh</p>
        </div>
    </div>
</div>
