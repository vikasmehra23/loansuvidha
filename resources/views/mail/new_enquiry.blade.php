<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loan Suvidhaa</title>
</head>
<style>
body {
  background: #eaeaea;
  font-family: 'Open Sans', sans-serif;
}
/* .email-container {
  margin: 5% 25% 1% 25%;
  background: #ffffff;
} */
</style>
<body style="margin:0; padding:0; background-color:#F1F1F1;"> 

<div class="email-container">
    <div class="email-body">

        <div class="email-content">
        <p>Hi There,</p>

        <h4 style="font-size: medium"> This is an inquiry email. Someone tries to reach you.</h4>
            
            <p style="font-size: medium">
                Name: {{$data['name']}}
            </p>
            <p style="font-size: medium">
                Phone Number: {{$data['phone']}}
            </p>
            <p style="font-size: medium">
                Email: {{$data['email']}}
            </p>
            <p style="font-size: medium">
                Email: {{$data['state']}}
            </p>
            <p style="font-size: medium">
                Email: {{$data['city']}}
            </p>


        <hr style="margin-top: 2em; background: blue;">
            <p>Sincerely,</p>
            <p class="sig">Loan Suvidhaa</p>
        </div>
    </div>
</div>

</body>
</html>