<?php

include_once("../koneksi.php");
$id = $_GET['id'];
$sql = mysqli_query($mysqli, "DELETE FROM data WHERE id=$id");


if ($sql){
    ?>
        <script type="text/javascript">
            window.location.href="../index.php";
        </script>
    <?php 
}
?>