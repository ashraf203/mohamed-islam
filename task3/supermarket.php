<?php
$cities = [
    'cairo' => 0,
    'alex' => 50,
    'others' => 100,
];
$cityNames = [
    'cairo' => 'Cairo',
    'alex' => 'Alexandria',
    'others' => 'Others',
];

function discountRate(float $subtotal): float
{
    if ($subtotal >= 5000) {
        return 0.20;
    }
    if ($subtotal >= 3000) {
        return 0.15;
    }
    if ($subtotal >= 1000) {
        return 0.10;
    }
    return 0.0;
}

function esc(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$step = $_POST['step'] ?? 'start';
$errors = [];
$name = trim($_POST['name'] ?? '');
$city = $_POST['city'] ?? '';
$productCount = isset($_POST['product_count']) ? (int) $_POST['product_count'] : 0;
$products = [];

if ($step === 'products') {
    if ($name === '') {
        $errors[] = 'Please enter the customer name.';
    }
    if (!isset($cities[$city])) {
        $errors[] = 'Please select a valid city.';
    }
    if ($productCount < 1 || $productCount > 20) {
        $errors[] = 'Please enter a product count between 1 and 20.';
    }
}

if ($step === 'invoice') {
    if ($name === '') {
        $errors[] = 'Please enter the customer name.';
    }
    if (!isset($cities[$city])) {
        $errors[] = 'Please select a valid city.';
    }
    if ($productCount < 1 || $productCount > 20) {
        $errors[] = 'Please enter a product count between 1 and 20.';
    }

    for ($i = 1; $i <= $productCount; $i++) {
        $itemName = trim($_POST['product_name'][$i] ?? '');
        $itemPrice = $_POST['product_price'][$i] ?? '';
        $itemQty = $_POST['product_qty'][$i] ?? '';

        if ($itemName === '') {
            $errors[] = "Please enter the name for product #{$i}.";
        }
        if (!is_numeric($itemPrice) || (float) $itemPrice <= 0) {
            $errors[] = "Please enter a valid price for product #{$i}.";
        }
        if (!is_numeric($itemQty) || (int) $itemQty <= 0) {
            $errors[] = "Please enter a valid quantity for product #{$i}.";
        }

        $products[$i] = [
            'name' => $itemName,
            'price' => (float) $itemPrice,
            'qty' => (int) $itemQty,
            'total' => (float) $itemPrice * (int) $itemQty,
        ];
    }
}

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermarket Invoice</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Supermarket Invoice</h3>
                </div>
                <div class="card-body">
                    <?php if (!empty($errors)): ?>
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                <?php foreach ($errors as $error): ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php endif ?>

                    <?php if ($step === 'start' || ($step === 'products' && !empty($errors))): ?>
                        <form method="post" action="supermarket.php">
                            <input type="hidden" name="step" value="products">
                            <div class="form-group">
                                <label for="name">Customer Name</label>
                                <input type="text" id="name" name="name" class="form-control" value="<?= esc($name) ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <select id="city" name="city" class="form-control" required>
                                    <option value="">Select City</option>
                                    <?php foreach ($cities as $key => $cost): ?>
                                        <option value="<?= esc($key) ?>"<?= $city === $key ? ' selected' : '' ?>><?= esc($cityNames[$key] ?? $key) ?> - <?= number_format($cost, 2) ?> EGP shipping</option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="product_count">Number of Products</label>
                                <input type="number" id="product_count" name="product_count" min="1" max="20" class="form-control" value="<?= esc((string) $productCount) ?>" required>
                            </div>
                            <button type="submit" class="btn btn-success">Continue to Products</button>
                        </form>
                    <?php elseif ($step === 'products' || ($step === 'invoice' && !empty($errors))): ?>
                        <form method="post" action="supermarket.php">
                            <input type="hidden" name="step" value="invoice">
                            <input type="hidden" name="name" value="<?= esc($name) ?>">
                            <input type="hidden" name="city" value="<?= esc($city) ?>">
                            <input type="hidden" name="product_count" value="<?= esc((string) $productCount) ?>">

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Customer Name</label>
                                    <input type="text" class="form-control" value="<?= esc($name) ?>" disabled>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>City</label>
                                    <input type="text" class="form-control" value="<?= esc($cityNames[$city] ?? '') ?>" disabled>
                                </div>
                            </div>
                            <div class="mb-4">
                                <strong>Product details</strong>
                            </div>

                            <?php for ($i = 1; $i <= $productCount; $i++): ?>
                                <?php
                                    $valueName = esc($_POST['product_name'][$i] ?? '');
                                    $valuePrice = esc($_POST['product_price'][$i] ?? '');
                                    $valueQty = esc($_POST['product_qty'][$i] ?? '');
                                ?>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Product #<?= $i ?></h5>
                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <label for="product_name_<?= $i ?>">Product Name</label>
                                                <input type="text" id="product_name_<?= $i ?>" name="product_name[<?= $i ?>]" class="form-control" value="<?= $valueName ?>" required>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="product_price_<?= $i ?>">Price</label>
                                                <input type="number" step="0.01" id="product_price_<?= $i ?>" name="product_price[<?= $i ?>]" class="form-control" value="<?= $valuePrice ?>" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="product_qty_<?= $i ?>">Quantity</label>
                                                <input type="number" id="product_qty_<?= $i ?>" name="product_qty[<?= $i ?>]" class="form-control" value="<?= $valueQty ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                            <button type="submit" class="btn btn-primary">Calculate Invoice</button>
                        </form>
                    <?php elseif ($step === 'invoice' && empty($errors)): ?>
                        <?php
                            $subtotal = 0.0;
                            foreach ($products as $product) {
                                $subtotal += $product['total'];
                            }
                            $discountPercent = discountRate($subtotal);
                            $discountValue = $subtotal * $discountPercent;
                            $subtotalAfterDiscount = $subtotal - $discountValue;
                            $shipping = $cities[$city];
                            $total = $subtotalAfterDiscount + $shipping;
                        ?>
                        <div class="mb-4">
                            <h5>Customer Information</h5>
                            <p><strong>Name:</strong> <?= esc($name) ?></p>
                            <p><strong>City:</strong> <?= esc($cityNames[$city] ?? '') ?></p>
                        </div>
                        <div class="table-responsive mb-4">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Product Name</th>
                                        <th>Price (EGP)</th>
                                        <th>Quantity</th>
                                        <th>Total (EGP)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($products as $index => $product): ?>
                                        <tr>
                                            <td><?= esc((string) $index) ?></td>
                                            <td><?= esc($product['name']) ?></td>
                                            <td><?= number_format($product['price'], 2) ?></td>
                                            <td><?= esc((string) $product['qty']) ?></td>
                                            <td><?= number_format($product['total'], 2) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <p><strong>Subtotal:</strong> <?= number_format($subtotal, 2) ?> EGP</p>
                                <p><strong>Discount:</strong> <?= number_format($discountPercent * 100, 0) ?>% (<?= number_format($discountValue, 2) ?> EGP)</p>
                                <p><strong>Subtotal after discount:</strong> <?= number_format($subtotalAfterDiscount, 2) ?> EGP</p>
                                <p><strong>Shipping:</strong> <?= number_format($shipping, 2) ?> EGP</p>
                                <hr>
                                <h4 class="text-success">Total: <?= number_format($total, 2) ?> EGP</h4>
                            </div>
                        </div>
                        <a href="supermarket.php" class="btn btn-secondary">Start New Invoice</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
