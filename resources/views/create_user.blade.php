<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Create User</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #FAD6A5, #FF8C42); /* Smooth gradient background */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .card {
            background: white;
            padding: 40px;
            border-radius: 15px; /* Rounded corners */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Soft shadow */
            width: 400px;
            text-align: center;
            position: relative;
        }

        h2 {
            margin-bottom: 20px;
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

        input[type="text"],
        select {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 10px; /* Rounded input fields */
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus,
        select:focus {
            outline: none;
            border-color: #FF8C42;
            box-shadow: 0 0 8px rgba(255, 140, 66, 0.5); /* Orange focus effect */
        }

        button {
            background: #FF8C42;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 10px; /* Rounded button */
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease, box-shadow 0.3s ease;
            margin-top: 20px;
            width: 100%;
        }

        button:hover {
            background: #e67e22;
            box-shadow: 0 10px 20px rgba(255, 140, 66, 0.3); /* Soft hover shadow */
        }

        /* Decorative circles */
        .blob {
            position: absolute;
            width: 150px;
            height: 150px;
            background: rgba(255, 140, 66, 0.2);
            border-radius: 50%;
            top: -30px;
            right: -40px;
        }

        .blob2 {
            position: absolute;
            width: 100px;
            height: 100px;
            background: rgba(250, 214, 165, 0.3);
            border-radius: 50%;
            bottom: -30px;
            left: -30px;
        }

        .error {
            color: red;
            font-size: 12px;
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
                <input type="text" id="nama" name="nama" value="{{ old('nama') }}" >
                @error('nama')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="npm">NPM:</label>
                <input type="text" id="npm" name="npm" value="{{ old('npm') }}" >
                @error('npm')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <select name="kelas_id" id="kelas_id">
                    @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}" {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}>
                        {{ $kelasItem->nama_kelas }}
                    </option>
                    @endforeach
                </select>
                @error('kelas_id')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
