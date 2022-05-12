<?php require("header.php");






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my cart</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded my-5">
                <h1>My Cart</h1>
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial name</th>
                            <th scope="col">Item name</th>
                            <th scope="col">Item price</th>
                            <th scope="col">Quentity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php 
                        $total=0;
                        if (isset($_SESSION['cart'])) {
                            foreach($_SESSION['cart'] as $key => $value){
                                $total=$total+$value['Price'];
                            $sr=$key+1;
                             echo
                             "<tr>
                             
                             <td>$sr</td>
                             <td>$value[Item_name]</td>
                             <td>$value[Price]<input type='hidden'  class='iprice' vlaue='$value[Price]'>  </td>
                             <td class='itotal'></td>
                             <td>  <input class='text-center' type= 'number' value='$value[Quantity]' min='1' max='10'>  </td>
                             <form action='manage_cart.php' method='post'>
                        
                              <td><button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button><td>
                              <input type='hidden' name='Item_name' value='$value[Item_name]' >
                              </form>
                             </tr>";
                             
                             
                             
                             ;




                            }
                        }
                      
                        
                        
                        ?>
   
                    </tbody>
                </table>
               

            </div>
            <div class="col-lg-4">
                <h3>tottal :<?php echo  $total?></h3>
                <br>


            
                <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    cash on delevery
  </label>
</div>



                <button class=" btn btn-primary btn-block">pachaes</button>
            </div>
        </div>
    </div>

</body>

</html>