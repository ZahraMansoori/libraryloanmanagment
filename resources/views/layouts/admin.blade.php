<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Library admin panel</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">مدیریت امانت کتابخانه</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            {{--<li class="nav-item active">--}}
                {{--<a class="nav-link" href="#">خانه <span class="sr-only">(current)</span></a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">کتاب ها</a>--}}
            {{--</li>--}}

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
اعضا                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">ثبت کتاب جدید</a>
                    <a class="dropdown-item" href="#">لیست امانت ها</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
کتاب ها                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">ثبت عضو جدید</a>
                    <a class="dropdown-item" href="#">لیست اعضا</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
@yield('content')
<script src="/public/js/jquery.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
</body>
</html>