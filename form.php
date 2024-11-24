<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="css/styles.css"> 
</head>
<body>
    <h1>
        Form Pendaftaran Konser Bruno Mars
    </h1>
    <form method="POST" action="process.php" enctype="multipart/form-data">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required minlength="3" maxlength="50">
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="birthdate">Tanggal Lahir:</label>
        <input type="date" id="birthdate" name="birthdate" required>

        <label>Jenis Kelamin:</label>

        <div class="radio-group">
            <label for="male">Pria</label>
            <input type="radio" id="male" name="gender" value="Male" required>
    
            <label for="female">Wanita</label>
            <input type="radio" id="female" name="gender" value="Female">
        </div>

        <label for="textfile">Unggah File Teks dengan isi minimal 5 line lirik lagu Bruno Mars :</label>
        <input type="file" id="textfile" name="textfile" accept=".txt" required>

        <button type="submit">Daftar</button>
    </form>
</body>
</html>
