<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    
    // Validasi file upload
    if (isset($_FILES['textfile'])) {
        $file = $_FILES['textfile'];

        // Validasi ukuran dan tipe file
        if ($file['size'] > 500 * 1024) {
            die("Ukuran file terlalu besar. Maksimal 500KB.");
        }
        if (mime_content_type($file['tmp_name']) !== "text/plain") {
            die("Tipe file tidak valid. Harus berupa file teks (.txt).");
        }

        // Membaca isi file
        $fileContent = file($file['tmp_name'], FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    } else {
        die("File teks harus diunggah.");
    }

    // Menyimpan data ke session
    session_start();
    $_SESSION['formData'] = [
        'name' => $name,
        'email' => $email,
        'birthdate' => $birthdate,
        'gender' => $gender,
        'fileContent' => $fileContent
    ];

    header("Location: result.php");
    exit();
}
?>
