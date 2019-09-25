<html>
<head>
    <title>Tambah</title>
</head>
<body>

<h2>TAMBAH DATA</h2>

    <form action="tambah.php" method="post" name="form">
        <table width="25%" border="0">
        <tr> 
         
                <td><input type="hidden" name="id"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" pattern="[A-Za-z ]+" required></td>
            </tr>
            <tr> 
                <td>Username</td>
                <td><input type="text" name="user" required></td>
            </tr>
            <tr> 
                <td>Passsword</td>
                <td><input type="password" name="pass" required></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" required></td>
            </tr>
            <tr> 
                <td></td>
                <td><br></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table>
        <a href="../index.php">Kembali</a>
    <br/><br/>
    </form>

    <?php

   
    if(isset($_POST['submit'])) {

        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $email = $_POST['email'];

        include_once("../koneksi.php");

        $sql = mysqli_query($mysqli, "INSERT INTO data VALUES('$id','$nama','$username','$password','$email')");

        if ($sql) {
            ?>

            <script type="text/javascript">
                alert("Data Berhasil Disimpan");
                window.location.href = "../index.php";
            </script>
            <?php
        }
    }
    ?>
</body>
</html>