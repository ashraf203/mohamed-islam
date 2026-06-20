<?php
//  user -> enter his name
//  user -> enter his phone
//  $products = ['laptop'=>15000,'mobile'=>12000,'tv'=>10000,'tshirt'=> 250]
// $cities = ['cairo'=>0,'alex'=>50,'others'=>200]
// $discount = ['laptop'=>0.2,'mobile'=>0.1,'tv'=> 0.05 , 'tshirt'=>0]

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!--Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-dark text-center h1"> products </h1>
            </div>
            <div class="offset-4 col-4">
                <form action="sale_post.php" method="post">
                    <div class="form-group">
                        <label for="name">name</label>

                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>

                    <div class="form-group">
                        <label for="product">product</label>
                        <select class="form-control" id="product" name="product" required>
                            <option value="">Select Product</option>
                            <option value="laptop">Laptop - 15000</option>
                            <option value="mobile">Mobile - 12000</option>
                            <option value="tv">TV - 10000</option>
                            <option value="tshirt">T-shirt - 250</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="city">city</label>
                        <select class="form-control" id="city" name="city" required>
                            <option value="">Select City</option>
                            <option value="cairo">Cairo - 0 (no shipping)</option>
                            <option value="alex">Alexandria - 50</option>
                            <option value="others">Others - 200</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Calculate Price</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>