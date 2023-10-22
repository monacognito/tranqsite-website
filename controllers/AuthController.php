<?php
    
    #Buat manggil varibel si conn.
    require_once "./connection.php";

    $is_login = false;

    session_start();
    
    if($_SERVER['REQUEST_METHOD'] === "POST") {

        $username = $_POST['username'];
        $password = $_POST['password'];

        #Disini kalau mau access database, contoh mau akses informasi dari tabel users.
        $query = "SELECT * FROM users WHERE username = '$username' && password = '$password';";
        #Untuk mengambil hasil dari query diatas (data yang sesuai dengan input).
        $result = $conn->query($query);

        #Diisi dengan data di result, kalau si result hasilnya 1 maka ada data yang kembali dan valid (0 = salah).
        if ($result->num_rows == 1) {
            
            echo "Login Success!";
            
            //Ini jadi masukin yang penting aja, dan si row ini balikin valu berusa associative array.
            $row = $result->fetch_assoc();

            $_SESSION['is_login'] = true;
            $_SESSION['username'] = $row['username'];s
            $_SESSION['role'] = $row['role'];
            $_SESSION['fullname'] = $row['fullname'];

            header("Location: ../messages.php");

        } else {
            header("Location: ../login.php");
        }

    }

?>