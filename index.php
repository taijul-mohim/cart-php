<?php require("header.php");
session_start();




?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    print_r($_SESSION['cart']);
    
    ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="post">
                    <div class="card">
                        <img class="card-img-top" src="image/1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">food 1</h5>
                            <p class="card-text">price 120</p>
                            <button type="submit" name='ADD_to_cart' class="btn btn-info"> Add to card</button>
                            <input type="hidden" name="item_name" value="food 1">
                            <input type="hidden" name="price" value="120">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="post">
                    <div class="card">
                        <img class="card-img-top" src="image/2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">food 2</h5>
                            <p class="card-text">price 150</p>
                            <button type="submit" name='ADD_to_cart'class="btn btn-info"> Add to card</button>
                            <input type="hidden" name="item_name" value="food 2">
                            <input type="hidden" name="price" value="150">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="post">
                    <div class="card">
                        <img class="card-img-top" src="image/3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">food 3</h5>
                            <p class="card-text">price 200</p>
                            <button type="submit" name='ADD_to_cart' class="btn btn-info"> Add to card</button>
                            <input type="hidden" name="item_name" value="food 3">
                            <input type="hidden" name="price" value="200">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="post">
                    <div class="card">
                        <img class="card-img-top" src="image/4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">food 4</h5>
                            <p class="card-text">price 120</p>
                            <button type="submit" name='ADD_to_cart' class="btn btn-info"> Add to card</button>
                            <input type="hidden" name="item_name" value="food 4">
                            <input type="hidden" name="price" value="250">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>