<?php require("header.php");
session_start();





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
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php 
                        $total=0;
                        if (isset($_SESSION['cart'])) {
                            foreach($_SESSION['cart'] as $key => $value){
                                $total=$total+$value['Price'];
                            
                             echo
                             "<tr>
                             
                             <td>1</td>
                             <td>$value[Item_name]</td>
                             <td>$value[Price]  </td>
                             <td>  <input class='text-center' type= 'number' value='$value[Quantity]' min='1' max='10'>  </td>
                             
                              <td><button class='btn btn-sm btn-outline-danger'>REMOVE</button><td>
                             
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
            </div>
        </div>
    </div>

</body>

</html>