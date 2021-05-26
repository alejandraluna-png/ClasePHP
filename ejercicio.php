<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo '<h3>';

    for($num =0; $num <= 99; $num++){
        if($num <=9){
            echo '0'.$num.', ';
        }
        if($num <=98 && $num >=10){
            echo $num.', ';
        }
        if($num >=99){
            echo $num.'';
        }
    }
    echo '</h3>';
    ?>
</body>
</html>