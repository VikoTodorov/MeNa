<?php
if(isset($_POST['opt-log'])){
    $select1 = $_POST['opt-log'];
    switch ($select1) {
        case 'value1':
            echo 'this is value1<br/>';
            break;
        case 'value2':
            echo 'value2<br/>';
            break;
    }
}
?>
