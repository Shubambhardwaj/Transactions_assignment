<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family:Arial;
            margin:20px
        }
        form {
            max-width:600px;
            mergin:auto;
            padding:20px;
            border: 1px solid #ddd;
            background-color: #fff;
        }
        label {
            display:block;
            margin-top:10px;
        }
        .cancel-button{
            background-color:
        }
        .form-group{
            margin-bottom:15px;
        }
        input[type="text"], input[type="date"],input[type="number"], select{
            width:100%;
            padding: 8px;
            margin-top:10px;
            box-sizing: border-box;
        }
        input[type="submit"], .cancel-button{
            background-color:#3f51b5;
            color:white;
            padding: 10px 20px;
            border:none;
            margin-top:10px;
        }
    </style>
</head>
<body>
    <h1>New Transaction</h1>
    <form action="add_transaction.php" method="post">
        <div class="form-group">
            <lable for="date">Date:</lable>
            <input type="date" id="date" name="date" required >
        <div>
        <div class="form-group">
            <lable for="description">Description:</lable>
            <input type="text" id="description" name="description" required >
        <div>
        <div class="form-group">
            <select id="transaction_type" name="transaction_type">
                <option value=""> Select Type</option>
                <option value="credit">Ccredit</option>
                <option value="debit">Debit</option>
            </select>
        <div>
        <div class="form-group">
            <lable for="amount">Amount:</lable>
            <input type="number" id="amount" name="amount" required >
        <div>
        
        <input type="submit" value="Save" >
        <a href="index.php" class="cancel-button"> Cancel</a>
    </form>
</body>
</html>