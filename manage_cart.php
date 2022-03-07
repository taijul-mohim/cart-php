<?php 
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
if(isset($_POST['ADD_to_cart'])){

    if(isset($_SESSION['cart'])){

         $mycart=array_column($_SESSION['cart'],'item_name');
         if(in_array($_POST['Item_name'],$mycart)){
             echo "<script>alart('Item added')
             
             </script>" ;
         }
     
        $count=count($_SESSION['cart']);
        $_SESSION['cart'][$count]=array('Item_name'=>$_POST['item_name'],'Price'=>$_POST['price'],'Quantity'=>1);
        print_r($_SESSION['cart']);
    }
    else{
        $_SESSION['cart'][0]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'Quantity'=>1);
        print_r($_SESSION['cart']);
    }
}

}


?>