<?php
$mysqli = new mysqli("localhost","root","","assignment");
if($mysqli->connect_error){
    die("connection faild: ". $mysqli->connect_error);
}
$date = $_POST['date'];
$description = $_POST['description'];
// $credit = $_POST['credit'];
// $debit = $_POST['debit'];
$transaction_type = $_POST['transaction_type'];
$amount = $_POST['amount'];


$previous_balance_query = "SELECT running_balance FROM transactions ORDER BY date DESC LIMIT 1";
$previous_balance_result = $mysqli->query($previous_balance_query);
$previous_balance = 0;
if($previous_balance_result->num_rows > 0){
    $row = $previous_balance_result->fetch_assoc();
    $previous_balance = $row['running_balance'];
}
if($transaction_type == 'credit'){
   $credit= $amount;
   $debit = 0;
}else{
    $credit= 0;
   $debit = $amount;
}

$runnig_balance = $previous_balance + $credit - $debit;

$insert_query = "INSERT INTO transactions (date,description,credit,debit,running_balance) VALUES ('$date','$description','$credit','$debit','$runnig_balance')";
if($mysqli->query($insert_query) === TRUE){
    echo "New Transaction added Successfully.";
    header("Location: index.php");
}else{
    echo "Eroor:";
}
$mysqli->close();
?>