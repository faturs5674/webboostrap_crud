<?php
$sql_view ="SELECT * FROM t_tabel";
$result = mysql_query($sql_view);
?>
<table class="table1">
    <tr></tr>
        <tr>
            <th>No</th>
            <th>nama</th>
            <th>gender</th>
            <th>email</th>
            <th>nohp</th>
            <th>Keperluan</th>
            <th colspan="2">Aksi</th>
        </tr>
<?php 
$i = 1;
while($data= mysql_fetch_array($result))
{
 ?>



        <tr>
            <td scope="row"><?php echo $i; ?></td>
            <td><?php echo $data['nama'];  ?></td>
            <td> <?php echo $data['jkelamin'];  ?></td>
            <td><?php echo $data['email'];  ?> </td>
            <td><?php echo $data['nohp'];  ?></td>
            <td><?php echo $data['pesan'];  ?></td>
             <td><a href="?page=hapus&id=<?php echo $data['no'];  ?>">Hapus</td>
             	 <td><a href="?page=update&id=<?php echo $data['no'];  ?>">update</td>
        </tr>
        <?php
        $i++;
			}
        ?>

    </table>    