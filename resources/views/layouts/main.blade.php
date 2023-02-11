<html>
<head>
<title>Пример 1</title>
<link rel="stylesheet" href="/style.css"/>

</head>
<body>
<header>
    <div class="header_row">
        <div class="logo">
            Словарик
        </div>
        <div class="nav">
            <nav>
                <a href="{{route('index')}}">Главная</a>
                <a href="{{route('profiles.index')}}">Пользователи</a>
            </nav>
        </div>
    </div>
</header>
@yield('content')
</body>
</html>