<?php
$mysqli = new mysqli("localhost","root","","assignment");
if($mysqli->connect_error){
    die("connection faild: ". $mysqli->connect_error);
}
$query = "select * FROM transactions ORDER BY date DESC";
$result = $mysqli->query($query);
if($result->num_rows > 0){
   echo '<table border="1">
        <tr>
            <th>Office Transactions</th>
            <th></th>
            <th></th>
            <th></th>
            <th><a href="new_transaction.php" class="btn">+ Add Transaction</th>
        </tr>
        <tr>
            <th>Date</th>
            <th>Description</th>
            <th>Credit</th>
            <th>Debit</th>
            <th>Running Balance</th>
        </tr>';
   while($row = $result->fetch_assoc()){
    echo '<tr>
            <td>' . $row['date'] . '</td>
            <td>' . $row['description'] . '</td>
            <td>' . $row['credit'] . '</td>
            <td>' . $row['debit'] . '</td>
            <td>' . $row['running_balance'] . '</td>
        </tr>';
   }
   echo '</table>';
}else{
    echo "No transactions Found.";
}
?>

