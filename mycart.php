<?php
session_start();
// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- custom css file link  -->
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>
    <!-- header section starts  -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center bg-light">
                <h1>MY CART</h1>
            </div>
        </div>
        <div class="col-lg-8">
            <table class="table table-dark table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $key => $value) {
                            $sr = $key + 1;
                            echo "
                            <tr>
                            <td>$sr</td>
                            <td>$value[Item_name]</td>
                            <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                            <td><input class='text-center iQuantity' onchange='subTotal()' type='number' value='$value[Quantity]' min=1 max=4></td>
                            <td class='itotal'></td>
                            <td>
                              <form method='POST' action='manage_cart.php'>
                                <button name='remove' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                <input type='hidden' name='Item_name' value='$value[Item_name]'>
                              </form>
                            </td>
                            </tr>
                            ";
                        }
                    } else {
                        echo
                        "<tr>
                        <td colspan = 6>Empty Cart and Empty Stomach, both needed to be filled...:)</td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <h4>Grand Total</h4>
            <h5 id="gTotal"></h5>
            <form action="">
                <button class="btn btn-primary">Checkout</button>
            </form>
        </div>
    </div>

    <script>
        let gt = 0;
        let iprice = document.getElementsByClassName('iprice');
        let iQuantity = document.getElementsByClassName('iQuantity');
        let itotal = document.getElementsByClassName('itotal');
        let gTotal = document.getElementById('gTotal');

        function subTotal() {
            gt = 0;
            for (let i = 0; i < iprice.length; i++) {
                itotal[i].innerText = (iprice[i].value) * (iQuantity[i].value);
                gt += (iprice[i].value) * (iQuantity[i].value);
            }
            gTotal.innerText = gt;
        }
        subTotal();
    </script>
</body>

</html>