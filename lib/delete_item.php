<?php

include_once '../classes/Item.php';
$it=new Item();



if (isset($_GET['item_id'])) {
    $itemId = $_GET['item_id'];

    $ite=$it->deleteItem($itemId);

    
    echo 'Item deleted successfully.';
    header("Location: ItemList.php");
     exit; 
}


?>