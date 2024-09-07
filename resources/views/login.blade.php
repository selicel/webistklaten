
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login EPSS</title>
    <link href="img/logo_epss.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg, #FC6843, #F8B400);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            text-align: center;
        }

        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .login-container img {
            max-width: 100px; /* Adjust the size of the logo if necessary */
            margin-bottom: 20px;
        }

        .login-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .login-container input[type="email"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .login-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #103863;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-container input[type="submit"]:hover {
            background-color: #2980b9;
        }

        .login-container .error {
            color: #e74c3c;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="img/logo_epss.png" alt="EPSS Logo">
        <h2>Login</h2>
        <form action="/login" method="post">
            @csrf
            <input type="email" name="email" placeholder="Email" required autofocus class="@error('email') is-invalid @enderror" value="{{old('email')}}">
            @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
