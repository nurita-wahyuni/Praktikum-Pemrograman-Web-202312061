<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Buku Tamu Digital STITEK Bontang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            color: #0a5275;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        .error {
            color: red;
            margin-top: 10px;
        }

        .success {
        background: linear-gradient(to bottom right, #d4edda, #e8f5e9);
        border-left: 5px solid #28a745;
        padding: 20px 25px;
        margin-top: 25px;
        border-radius: 8px;
        font-family: 'Segoe UI', sans-serif;
        font-size: 16px;
        color: #155724;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        position: relative;
        overflow: hidden;
        text-align: left; 
        }

        .success::before {
        content: '✔';
        font-size: 20px;
        font-weight: bold;
        color: #28a745;
        position: absolute;
        left: 15px;
        top: 20px;
        }

        .success strong {
        display: block;
        font-size: 17px;
        margin-left: 30px;
        margin-bottom: 8px;
        color: #155724;
        }

        .success .info {
        margin-left: 30px;
        line-height: 1.6;
        }

        .success .info p {
        margin-bottom: 12px; 
        margin-top: 0;
        }
        .success .info p strong {
        display: inline-block;
        margin-bottom: 4px;
        }

        .submit-btn {
            background-color: #0a5275;
            color: #fff;
            padding: 10px 15px;
            margin-top: 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #06364f;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Buku Tamu Digital STITEK Bontang</h1>

        <?php
        // Inisialisasi variabel
        $nama = $email = $pesan = "";
        $error = "";
        $berhasil = false;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nama"]) || empty($_POST["email"]) || empty($_POST["pesan"])) {
                $error = "Semua kolom wajib diisi!";
            } else {
                $nama = htmlspecialchars($_POST["nama"]);
                $email = htmlspecialchars($_POST["email"]);
                $pesan = htmlspecialchars($_POST["pesan"]);
                $berhasil = true;
            }
        }
        ?>

        <form method="post" action="">
            <label>Nama Lengkap:</label>
            <input type="text" name="nama" value="<?php echo isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : ''; ?>">

            <label>Alamat Email:</label>
            <input type="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">

            <label>Pesan/Komentar:</label>
            <textarea name="pesan"><?php echo isset($_POST['pesan']) ? htmlspecialchars($_POST['pesan']) : ''; ?></textarea>

            <input type="submit" value="Kirim Pesan" class="submit-btn">
        </form>

        <?php
        if (!empty($error)) {
            echo "<div class='error'>$error</div>";
        }

        if ($berhasil) {
        echo "<div class='success'>";
        echo "<strong>Terima kasih atas pesan Anda!</strong>";
        echo "<div class='info'>";
        
        echo "<p><strong>Nama:</strong><br>$nama</p>";
        echo "<p><strong>Email:</strong><br>$email</p>";
        echo "<p><strong>Pesan:</strong><br>" . nl2br($pesan) . "</p>";
        
        echo "</div>";
        echo "</div>";
        }
        ?>
    </div>
</body>
</html>