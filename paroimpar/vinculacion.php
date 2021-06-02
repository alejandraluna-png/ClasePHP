<?php
    if(isset($_POST['numero']) && $_POST['numero'] !==""){
        $numero = intval($_POST{'numero'});

        if($numero %2 === 0){
            $value = 1;
        }  else{
            $value = 0;
        }
    } else {
        $value = 3;
    }
    echo $numero."value";
    
    header("Location: ./index.php?confirm=".$value)
?>