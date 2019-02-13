<?php
$sql = "SELECT * FROM kontak";
$query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontak</title>
</head>
<body>
    <table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Pesan</th>
        <th>Edit</th>
        <th>Hapus</th>
    </tr>
    <?php $i =  1; ?>
    <?php foreach($query as $data) : ?>
    <tr>
        <td><?= $i++ ?></td>
        <td><?= $data['nama'] ?></td>
        <td><?= $data['email'] ?></td>
        <td><?= $data['subject'] ?></td>
        <td><?= $data['pesan'] ?></td>
        <td>
          <form method="POST" action="index.php?menu=edit_kontak">
          <input type="hidden" name="id_edit" value="<?=$data['id_kontak']?>">
          <button type="submit" class="btn btn-success">Edit</button>
          </form>
        </td>
         <td>
          <form method="POST" action="index.php?menu=hapus_kontak">
          <input type="hidden" name="id_hapus" value="<?=$data['id_kontak']?>">
          <button type="submit" class="btn btn-danger">Hapus</button>
          </form>
        </td>
    </tr>
    <?php endforeach; ?>
    
    
    
    </table>
</body>
</html>