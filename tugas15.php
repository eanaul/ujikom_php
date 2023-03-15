<?php

$server = mysqli_connect("localhost", "root", "", "barang");

$sql = "SELECT * FROM `cuy`";

$query = mysqli_query($server, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="15">
        <tr>
            <th>nama</th>
            <th>harga</th>
            <th>aksi</th>
        </tr>

        <?php if(mysqli_num_rows($query) > 0){ ?>
    <?php while($cuy = mysqli_fetch_assoc($query)){ ?>
        <tr>
        <td> <?php echo $cuy['nama']; ?></td> 
        <td> <?php echo $cuy['harga']; ?></td> 
        <td><a href="hapus.php?nama=<?php echo $cuy['nama'] ?>">hapus</a></td>
    </tr>
   <?php  } ?>
<?php } ?>
    </table>
</body>
</html>