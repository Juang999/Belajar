<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>server</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>KEY</th>
            <th>VALUE</th>
        </tr>
    <?php 
        $server = $_SERVER;
        foreach ($server as $key => $value): ?>
        <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $value; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>