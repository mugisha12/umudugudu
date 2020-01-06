<?php
if(isset($_POST['price'])){
    switch($_POST['price']){
        case 1:
            echo 3000;
        break;
        case 2:
            echo 5000;
        break;
        case 3:
            echo 7000;
        break;
        case 4:
            echo 10000;
        break;
        default:
            echo 3000;
        break;
    }
}

?>