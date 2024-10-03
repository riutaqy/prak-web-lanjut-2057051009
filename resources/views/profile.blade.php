<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #00b0ff;
            background-image: url('https://wallpapercave.com/wp/wp9027542.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
            transform: scale(1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .logo {
            margin-bottom: 20px;
        }

        .logo img {
            width: 120px;
        }

        .name, .npm, .kelas {
            font-size: 20px;
            margin: 10px 0;
            font-weight: bold;
            color: #333;
        }

        /* Efek bayangan untuk teks */
        .name, .npm, .kelas {
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="logo">
            <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel Logo">
        </div>
        <div class="name">{{ $nama }}</div>
        <div class="npm">{{ $npm }}</div>
        <div class="kelas">{{ $kelas }}</div>
    </div>
</body>
</html>