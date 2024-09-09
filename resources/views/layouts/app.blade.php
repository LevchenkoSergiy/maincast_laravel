<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel Tournaments') }}</title> <!-- Назва сторінки -->
    <!-- Можна додати стилі CSS або підключити їх тут -->
</head>
<body>
<div class="container">
    @yield('content') <!-- Ця директива вставляє вміст конкретної сторінки -->
</div>
<!-- Можна додати футер або додаткові скрипти тут -->
</body>
</html>
