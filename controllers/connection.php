<?php
/*File ini gunanya untuk mengimport satu varibel yang akan digunakan untuk ngobrol sama database */

#Agar bisa menggunakan variabel config di file tersebut.
require "../config/database.php";

#Variabel untuk koneksi
//Modul bawaan dari PHP.
$conn = new mysqli(
    // Ini urutan parameter yang dibutuhkan oleh modul mysqli.
    #Sever address yang mau dikonekin berapa IP-nya.
    $config['server'],
    #Username database
    $config['username'],
    #Password
    $config['password'],
    #Database
    $config['database']
); 
// Kalau mau pake database tinggal pakai si variabel conn
