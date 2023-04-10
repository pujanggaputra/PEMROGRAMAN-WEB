<?php
if (empty($_POST['nama'])) {
    header("Location:namakosong.php");
} else {
    echo "<center>Nama :".$_POST['nama']."</center><br>";
}
?>