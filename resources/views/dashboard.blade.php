<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Awal - SMP 6 Buton</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            text-align: center;
            padding-top: 100px;
        }
        h1 {
            color: #333;
        }
        .btn-container {
            margin-top: 30px;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            margin: 10px;
            background-color: #3490dc;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #2779bd;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di Website SMP Negeri 6 Buton</h1>
    <p>Silakan pilih login sebagai:</p>
    <div class="btn-container">
        <a href="{{ route('guru.login') }}" class="btn">Login Guru</a>
        <a href="{{ route('wali.login') }}" class="btn">Login Wali Murid</a>
    </div>
</body>
</html>
