<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous'/>
    <title>Admin</title>
</head>
<body class="bg-dark">
    @include('Admin.partials.header')

    <div class="main-wrapper d-flex">
        <div class="aside">
            @include('Admin.partials.aside')
        </div>
        <div class="content p-5 bg-secondary bg-gradient">
            @yield('content')
        </div>
    </div>
</body>
</html>
