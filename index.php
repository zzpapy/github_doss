<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $number=2;
        for($i=0;$i<11;$i++){
            echo '<p>',$number,"&times;",$i,' = ',$number * $i,'</p>';
        }
    ?>
</body>
</html>