<?php 

    $todo = [];
    if (file_exists("todo.txt")) {
        $file = file_get_contents("todo.txt");
        $todo = unserialize($file);
    }


    if (isset($_POST['action'])) {
        $data = $_POST;
        $todo[] = [
            'kegiatan' => $data,
            'status' => 0,
        ];

        
        $action = serialize($todo);
        
        file_put_contents("todo.txt", "$action\n");
        
        $output = file_get_contents("todo.txt");
        $hasil = unserialize($output);

        header("Location: index.php");
    }

    if (isset($_GET['status'])) {
        $todo[$_GET['key']]['status'] = $_GET['status'];
        file_put_contents("todo.txt", serialize($todo));
        header("Location: index.php");
    }

    if (isset($_GET['hapus'])) {
        unset($todo[$_GET['key']]);
        file_put_contents("todo.txt", serialize($todo));
        header("Location:index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Todo List</title>
</head>
<body>
    <center>
        <h1 style="margin-top: 100px;">Todo App</h1>
        <form method="post" style="margin-top: 25px;">
        <label for="action">apa yang ingin kamu lakukan saat ini? </label><br>
        <input type="text" name="action" id="action" style="width: 550px; margin-top: 15px;"><br>
        <button type="submit" style="margin-top: 20px;" class="btn btn-outline-primary">Simpan</button>
        </form>

        <table class="table" style="margin-top: 20px;">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Status</th>
      <th scope="col">Kegiatan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($todo as $key => $value): ?>
        <tr>
            <th scope="row"><?= $key; ?></th>
            <td><input type="checkbox" name="todo" onclick="window.location.href = 'index.php?status=<?php echo ($value['status'] ==1) ? '0' : '1'; ?>&key=<?php echo $key;?>'" <?php if($value['status'] == 1) echo "checked"; ?>></td>
            <td><?php
            if ($value['status'] == 1) 
                echo "<del>".$value['kegiatan']['action']."</del>"; 
            else
                echo $value['kegiatan']['action'];
                ?>
                </td>
            <td><a href="index.php?hapus=1&key=<?= $key;?>" class="btn btn-outline-danger" onclick="return confirm('apa kamu yakin ingin menghapus jadwal?')">Hapus</a></td>
        </tr>
  <?php endforeach; ?>
  </tbody>
</table>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>