<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartBrgy.ph</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: red;
            color: black;
        }

        .header {
            background-color: lightgray;
            padding: 100px 20px;
            /* Adjusted padding */
            text-align: center;
            border-radius: 0 0 50px 50px;
            position: relative;
            /* Added position relative */
        }

        .logo {
            max-width: 100%;
            height: auto;
            position: absolute;
            /* Added position absolute */
            top: 50%;
            /* Centering the logo vertically */
            left: 50%;
            /* Centering the logo horizontally */
            transform: translate(-50%, -50%);
            /* Centering trick */
        }

        .body {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .input-field,
        .button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 20px;
            margin-bottom: 10px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .input-field {
            background-color: lightgray;
            background-repeat: no-repeat;
            background-position: 10px center;
            background-size: 20px;
            padding-left: 40px;
        }

        .input-field.password {
            margin-top: 3px;
            background-image: url('lock.png');
        }

        .input-field.email {
            background-image: url('user.png');
        }

        .button {
            background-color: maroon;
            color: white;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
        }

        .remember-me {
            margin-top: -13px;
            color: #3685cd;
            display: flex;
            font-size: 10px;
            align-items: center;
        }

        .forgot-password {
            margin-left: auto;
        }

        .create-account-text {
            text-align: center;
            margin-top: 10px;
            font-size: 13px;
        }

        .create-account-link {
            color: #3685cd;
            text-decoration: none;
        }

        .create-account-link:hover {
            text-decoration: underline;
        }

        .copyright {
            font-size: 13px;
            color: black;
            margin-top: -10px;
        }

        .footer {
            background-color: lightgray;
            padding: 20px;
            text-align: center;
            border-radius: 50px 50px 0 0;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="logo.png" alt="Logo" class="logo">
    </div>
    <div class="body">
        <div class="container">
            <input type="email" class="input-field email" placeholder="Email">
            <input type="password" class="input-field password" placeholder="Password">
            <label class="remember-me">
                <input type="checkbox"> Remember Me
                <span class="forgot-password">Forgot Password?</span>
            </label>
            <button class="button">Login</button>
            <div class="create-account-text">
                <p>Don't have an account? <a href="account.html" class="create-account-link">Create an account</a></p>
            </div>
            <p class="copyright">Copyright 2024</p>
        </div>
    </div>
    <div class="footer">
    </div>
</body>

</html>