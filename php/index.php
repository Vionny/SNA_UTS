<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $db = mysqli_connect(getenv('HOSTNAME'),getenv('USERNAME'),getenv('PASSWORD'),getenv('DB'));
        $res = mysqli_query($db, 'SELECT * FROM user');
    ?>
    <table>
        <thead>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jabatan</th>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_array($res)){
                ?>
                  <tr>
                    <td> <?php $row['id']?> </td>
                    <td> <?php $row['name']?> </td>
                    <td> <?php $row['alamat']?> </td>
                    <td> <?php $row['jabatan']?> </td>
                  </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>