<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Create User Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #FAD6A5, #FF8C42); 
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .card {
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); 
            width: 350px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        h2 {
            margin-bottom: 30px;
            font-size: 24px;
            color: #333;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 20px; 
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: #FF8C42;
            box-shadow: 0 0 8px rgba(255, 140, 66, 0.5); 
        }

        button {
            background: #FF8C42;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease, box-shadow 0.3s ease;
            margin-top: 20px;
            width: 100%;
        }

        button:hover {
            background: #e67e22;
            box-shadow: 0 10px 20px rgba(255, 140, 66, 0.3); 
        }

        .blob {
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(255, 140, 66, 0.2);
            border-radius: 50%;
            top: -50px;
            right: -50px;
        }

        .blob2 {
            position: absolute;
            width: 150px;
            height: 150px;
            background: rgba(250, 214, 165, 0.3);
            border-radius: 50%;
            bottom: -50px;
            left: -50px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="blob"></div>
        <div class="blob2"></div>
        <h2>Create User</h2>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="npm">NPM:</label>
                <input type="text" id="npm" name="npm" required>
            </div>

            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <input type="text" id="kelas" name="kelas" required>
            </div>

            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
