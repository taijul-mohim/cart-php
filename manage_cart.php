<?php 
session_start();


if($_SERVER["REQUEST_METHOD"]=="POST"){
if(isset($_POST['ADD_to_cart'])){ 

    if(isset($_SESSION['cart'])){

         $mycart=array_column($_SESSION['cart'],'Item_name');
         if(in_array($_POST['item_name'],$mycart)){
             echo "<script> 
             alert('Item Alrady added');
             window.location.href='index.php';
             </script>" ;
         }else{
   
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('Item_name'=>$_POST['item_name'],'Price'=>$_POST['price'],'Quantity'=>1);
            echo "<script> 
            alert('Item  added');
            window.location.href='index.php';
            </script>" ;
         }
  
        
    }
    else{
        $_SESSION['cart'][0]=array('Item_name'=>$_POST['item_name'],'Price'=>$_POST['price'],'Quantity'=>1);
     
        echo "<script> 
        alert('Item  added');
        window.location.href='index.php';
        </script>" ;

    }
}

if (isset($_POST["Remove_Item"])) {
    foreach ($_SESSION['cart'] as $key => $value) {
      unset($_SESSION['cart'][$key]) ;
      $_SESSION['cart']=array_values($_SESSION['cart']);
      echo "<script>alert('Item Removed')
      window.location.href='mycart.php';
      </script>";
    }
    
}


}




?>
