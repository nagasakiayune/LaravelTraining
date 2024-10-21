@stack('styles')
<html>
<head>
    <title>@yield('title')</title>
    <style>
        .body{
            margin-left: auto;
        }
        .menutitle{
            font-weight: 350;
            font-size: 30px;
            width: 900px;
        }
    </style>
</head>
<body>
    <div class = "body">
        @section('menubar')
        <h2 class = "menutitle">@show</h2>

        <div class = "content">
            @yield('content')
        </div>
        <div class = "footer">
            @yield('footer')
        </div>
    </div>
</body>
</html>
