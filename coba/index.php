<?php

include_once("koneksi.php");
$tampil = mysqli_query($mysqli, "SELECT * FROM data");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BELAJAR CRUD</title>
    <center><h1>Belajar CRUD dengan koneksi MYSQLI</h1></center>
</head>
<body>
    
<form method="post" action="./fungsi/tambah.php">
  <button type="submit">Tambah Data</button>
 </form><br>
<!-- <a href="./fungsi/tambah.php" class="btn btn-success">Tambah Data</a><br/><br/> -->

<table width='80%' border=2>

<tr>
    <th>Nama</th> 
    <th>Username</th> 
    <th>Password</th> 
    <th>Email</th>
    <th>opsi</th>
</tr>
<?php  
while($data = mysqli_fetch_array($tampil)) {         
    echo "<tr>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['username']."</td>";
    echo "<td>".$data['password']."</td>";    
    echo "<td>".$data['email']."</td>";    
    echo "<td><a href='./fungsi/ubah.php?id=$data[id]'>UBAH</a> | <a href='./fungsi/hapus.php?id=$data[id] ' >HAPUS</a></td></tr>";        
}
?>
</table>


</body>
</html>