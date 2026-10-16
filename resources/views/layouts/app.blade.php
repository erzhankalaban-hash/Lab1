<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Спортивний клуб')</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f5f7;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Верхня червона смужка */
        .top-accent-line {
            height: 4px;
            background-color: #e74c3c;
            width: 100%;
        }

        /* Шапка */
        header {
            background-color: #ffffff;
            border-bottom: 1px solid #e1e4e8;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 20px;
            font-weight: bold;
            color: #111;
            text-decoration: none;
            letter-spacing: 1px;
        }
        .logo span {
            color: #e74c3c;
        }
        nav {
            display: flex;
            gap: 25px;
        }
        nav a {
            color: #333;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
        }
        nav a:hover {
            color: #e74c3c;
        }

        /* Основний контент (картка з акцентом зліва) */
        main {
            flex: 1;
            max-width: 1100px;
            width: 90%;
            margin: 40px auto;
        }
        .content-card {
            background: #ffffff;
            border-radius: 6px;
            padding: 40px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            border-left: 5px solid #e74c3c;
        }
        .content-card h1 {
            margin-top: 0;
            color: #111;
            font-size: 28px;
        }
        .content-card p {
            color: #555;
            font-size: 16px;
            line-height: 1.6;
        }

        /* Футер */
        footer {
            background-color: #111;
            color: #aaa;
            padding: 40px 0 20px 0;
            font-size: 14px;
        }
        .footer-columns {
            max-width: 1100px;
            width: 90%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            padding-bottom: 30px;
            border-bottom: 1px solid #222;
        }
        .footer-col {
            flex: 1;
            margin-right: 20px;
        }
        .footer-col h3 {
            color: #fff;
            font-size: 16px;
            margin-bottom: 15px;
        }
        .footer-col p {
            margin: 5px 0;
            color: #888;
        }
        .footer-bottom {
            max-width: 1100px;
            width: 90%;
            margin: 20px auto 0 auto;
            text-align: center;
            color: #777;
            font-size: 13px;
        }
    </style>
</head>
<body>

<div class="top-accent-line"></div>

<header>
    <a href="{{ url('/') }}" class="logo">SPORT<span>FIT</span></a>
    <nav>
        <a href="{{ url('/') }}">Головна</a>
        <a href="{{ url('/services') }}">Послуги</a>
        <a href="{{ url('/trainers') }}">Тренери</a>
        <a href="{{ url('/about') }}">Про клуб</a>
        <a href="{{ url('/contact') }}">Контакти</a>
    </nav>
</header>

<main>
    <div class="content-card">
        @yield('content')
    </div>
</main>

<footer>
    <div class="footer-columns">
        <div class="footer-col">
            <h3>SPORTFIT Club</h3>
            <p>Сучасний спортивний комплекс для вашого здоров'я та досягнення фітнес-цілей.</p>
        </div>
        <div class="footer-col">
            <h3>Напрямки</h3>
            <p>Тренажерний зал | Фітнес | Басейн | Йога</p>
        </div>
        <div class="footer-col">
            <h3>Графік роботи</h3>
            <p>Пн-Сб: 08:00 - 22:00<br>Нд: 09:00 - 20:00</p>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; {{ date('Y') }} SPORTFIT. Усі права захищено | Розробник: Шиш Іван (Група РС-41)
    </div>
</footer>

</body>
</html>
