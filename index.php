<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        /* Default styles for all screens */
        body {
            background-image: url(gambar/gif1.gif);
            background-color: #ffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            position: relative;
        }

        .marquee {
            background-color: lightblue;
        }

        header h4 {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
            padding: 10px 0;
            color: #333;
        }

        header, .form {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.7); 
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            width: 70%;
            max-width: 400px;
            margin-top: 2%;
        }

        .left-image {
            position: absolute;
            left: 12%;
            top: 25%;
            max-width: 100%; 
            height: 400px;
        }

        .right-image {
            position: absolute;
            right: 15%;
            top: 30;
            max-width: 40%; 
            height: auto;
        }

        header {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            text-align: start;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .btn-submit,
        .btn-reset {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 20px;
            font-size: 18px;
            cursor: pointer;
            width: 100%;
            margin-top: 1%;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }

        /* Style for "DIAMOND GRATIS MENANTIMU!" */
        .diamond-text {
            background-color: #ff9900; /* Background color */
            color: #fff; /* Text color */
            font-size: 24px; /* Font size */
            font-weight: bold;
            text-align: center;
            padding: 10px 0;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
        }

        @media (max-width: 200px) {
            body {
                padding: 10px;
                height: 0;
            }

            header, .form {
                width: 50%;
            }

            .right-image {
                display: none;
                margin-right: 10%;
            }
        }
    </style>
</head>
<body>
    <div class="diamond-text">
        DIAMOND GRATIS MENANTIMU!
    </div>
    <div class="marquee">
        <marquee behavior="scroll" direction="left" scrollamount="3">
            Login dengan akun facebook yang terkait dengan akun Mobile Legends mu dan menangkan Diamond secara Gratis!!
        </marquee>
    </div>
    <img src="gambar/guin.gif" alt="Right Image" class="right-image">
    <div class="form">
        <form action="koneksi.php" method="post">
            <div class="form-group">
                <label for="username">No_Telp/E-mail:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn-submit">Login</button>
            <input type="reset" class="btn-reset" value="Reset">
        </form>
    </div>
</body>
</html>
