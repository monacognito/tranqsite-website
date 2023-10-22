<?php
    if($_SERVER["REQUEST_METHOD"] === "POST") {
        if(isset($_POST['send'])) {
            $title = $_POST['title'];
            $recipient = $_POST['recipient'];
            $message = $_POST['message'];
            $user_file = $_FILES['user_file'];

            $target_directory = "../uploads/";
            $file_name = $user_file['name'];
            $random_id = uniqid();
            $file_name = "$random_id - $file_name";

            if($user_file['size'] > 25000000) {
                echo "File too big !";
            }

            if(move_uploaded_file($user_file["tmp_name"], $target_directory . $file_name)) {
                echo "File successfully uploaded.";
            } else {
                echo "Something went wrong with the file upload";
            }
        }
    }

?>