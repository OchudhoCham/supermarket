<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Munuki Top Supermarket</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background: url('munuki-top.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            width:800px;
            height:300px;
            text-align: center;
            border: 2px solid #5A6268; 
            border-radius: 8px;
            background:#EADB05;
        }

        .title {
            font-size: 42px;
        }
        .title-text {
            color:#75440B;
            text-transform: uppercase;
        }

        .links>a {
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 5px;
            margin: 5px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .logo {
            width: 100px;
            height: auto;
            border: 2px solid gray;
            border-radius: 50px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                <img src="logo.png" alt="Munuki Top Supermarket Logo" class="logo">
                <br>
                <strong><h1 class="title-text">Munuki Top Supermarket</h1></strong>
            </div>

            <div class="links">
                <a href="admin/" class="btn btn-primary">Admin Log In</a>
                <a href="cashier/" class="btn btn-secondary">Cashier Log In</a>
                <a href="customer/" class="btn btn-success">Customer Log In</a>
            </div>
        </div>
    </div>
</body>

</html>
