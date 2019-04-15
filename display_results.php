<?php
// get the data from the form
$investment = $_POST['investment'];
$interest_rate = $_POST['interest_rate'];
$years = $_POST['years'];
// validate investment entry
if ( empty($investment) ) {
$error_message = 'Investment is a required field.';
} else if ( !is_numeric($investment) ) {
    $error_message = 'Investment must be a valid number.';
} else if ( $investment <= 0 ) {
    $error_message = 'Investment must be greater than zero.';
// validate interest rate entry
} else if ( empty($interest_rate) ) {
    $error_message = 'Interest rate is a required field.';
} else if ( !is_numeric($interest_rate) ) {
$error_message = 'Interest rate must be a valid number.';
} else if ( $interest_rate <= 0 ) {
$error_message = 'Interest rate must be greater than zero.';
// set error message to empty string if no invalid entries
} else {
$error_message = '';
}
// if an error message exists, go to the index page
if ($error_message != '') {
include('index.php');
exit(); }
// calculate the future value
$future_value = $investment;
for ($i = 1; $i <= $years; $i++) {
 $future_value = ($future_value + ($future_value * $interest_rate * .01));
}
// apply currency and percent formatting
$investment_f = '$'.number_format($investment, 2);
$yearly_rate_f = $interest_rate.'%';
$future_value_f = '$'.number_format($future_value, 2);


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
        <h1>Future Value Caculator</h1>
        <label>Investment Amount:</label>
        <span><?php echo $investment_f; ?></span> <br>
        <label>Yearly Interest Rate:</label>
        <span><?php echo $yearly_rate_f; ?></span> <br>
        <label>Number of Years:</label>
        <span><?php echo $years; ?></span> <br>
        <label>Future Value:</label>
        <span><?php echo $future_value_f; ?></span> <br>
    </div>
</body>

</html>