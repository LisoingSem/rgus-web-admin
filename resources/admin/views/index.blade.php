<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('meta')
    @vite(['resources/admin/sass/app.scss', 'resources/admin/js/app.js',])
</head>
<body>
    @yield('index')
</body>
</html>
