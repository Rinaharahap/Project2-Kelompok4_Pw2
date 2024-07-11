<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Vehicle Parking Service</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;      
            background: linear-gradient(135deg, #f5f5f5, #e0e0e0);
            color: #333;
        }
        .container {
            text-align: center;
            max-width: 600px;
            padding: 40px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            background-color: #fff;
            border-radius: 12px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .container:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
        }
        h1 {
            font-size: 64px;
            margin-bottom: 20px;
            color: #e74c3c;
            animation: bounce 1s ease infinite;
        }
        p {
            font-size: 20px;
            margin-bottom: 30px;
        }
        a {
            text-decoration: none;
            color: #3498db;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        a:hover {
            color: #2980b9;
        }
        .btn {
            background-color: #3498db;
            color: #fff;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            text-transform: uppercase;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn:hover {
            background-color: #2980b9;
            transform: translateY(-3px);
        }
        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>401</h1>
        <p>Akses Tidak Diizinkan</p>
        <p>Maaf Anda Tidak Dapat Mengakses Halaman Ini !!</p>
        <a href="{{ url('/') }}" class="btn">Go Home</a>
    </div>
</body>
</html>
