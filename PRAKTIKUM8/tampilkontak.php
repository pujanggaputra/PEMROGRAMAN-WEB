<h2>List KONTAK</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>jkel</th>
        <th>EMAIL</th>
        <th>ALAMAT</th>
        <th>KOTA</th>
        <th>PESAN</th>
    </tr>
    <?php
    include 'koneksi.php';
    $kontak = mysqli_query($koneksi, "SELECT * FROM kontak");
    $no = 1;
    foreach ($kontak as $row) {
        $jenis_kelamin = $row['jkel'] == 'P' ? 'Perempuan' : 'Laki Laki';
        echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['Nama'] . "</td>
            <td>" . $jenis_kelamin . "</td>
            <td>" . $row['Email'] . "</td>
            <td>" . $row['Alamat'] . "</td>
            <td>" . $row['Kota'] . "</td>
            <td>" . $row['Pesan'] . "</td>
            <tr>";
        $no++;
    }
    ?>
</table>