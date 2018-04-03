<!DOCTYPE html>
<html>
<head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<table border="1">
    <tr>
        <th>Название</th>
        <th>Фото</th>
    </tr>
        <?php foreach ($items as $item):?>
    <tr>
        <td><?php echo $item['title'];?></td>
        <td><img src="<?php echo $item['path'];?>" style="max-width: 200px "></td>
    </tr>    
    <?php endforeach;?> 
    
</table>
    <a href="/8_master/add.php">Добавить фото</a>
</body>
</html>


