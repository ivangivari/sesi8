<h3>Daftar User </h3>
<table>
<tr>
    <td>#</td>
    <td>Nama Lengkap</td>
    <td>Email</td>
    <td>Tambah</td>
    <?php
    $sql = "SELECT nama, email, iduser FROM tbuser ORDER BY nama";
    $hasil = mysqil_query($cnn, $sql);
    $cx = 1;
    while($sh = mysqli_fetch_assoc_($hasil)){
    ?>    
    <tr>

    <tr>
        <td><?=$cz?></td>
        <td><?=$h["name"]?></td>
        <td><?=["email"]?></td>
        <td>Ubah Hapus</td>
</tr>
<?php
$cx++;
    }
    ?>
</table>
