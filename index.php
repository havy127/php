<?php
$today = date("m.d.y");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>havyHUYNH</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/prism.css" />
</head>

<body>
    <div id="content">
        <h1>Product Discount Calculator <?php echo $today;?> </h1>
        <form action="display_discount.php" method="post">
            <div id="data">
                <label>Product Description:</label>
                <input type="text" name="product_description" /><br />
                <label>List Price:</label>
                <input type="text" name="list_price" /> <br />
                <label>Discount Percent :</label>
                <input type="text" name="discount_percent" /><br />
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate Discount" /><br />
            </div>
        </form>
    </div>
    <div id="content">
        <h1>Future Value Calculator</h1>
        <?php if (!empty($error_message)) { ?>
            <p class="error"><?php echo $error_message; ?></p>
        <?php } ?>
        <form action="display_results.php" method="post">
            <div id="data">
                <label>Investment Amount:</label>
                <input type="text" name="investment"  /><br />
                <label>Yearly Interest Rate:</label>
                <input type="text" name="interest_rate"  /><br />
                <label>Number of Years:</label>
                <input type="text" name="years"/><br />
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate" /><br />
            </div>
        </form>
    </div>
</body>

</html>