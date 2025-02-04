<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fees Structure Admin Input</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        input[type="text"], input[type="number"] {
            padding: 5px;
            width: 200px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<h2>BUS - Fees Structure Input</h2>

<!-- Form to input new fee structure -->
    <form action="adminbus.php"method="post">
    <label for="RegNo">RegNO:</label>
    <input type="text" id="RegNO"name="RegNo" required><br><br>
    <label for="StudentName">StudentName:</label>
    <input type="text" id="StudentName"name="StudentName" required><br><br>

    <label for="BUSFeesAmount">BUSFeesAmount:</label>
    <input type="number" id="BUSFeesAmount"name="BUSFeesAmount" required><br><br>

    <label for="BUS BillNo">BUSBillNo:</label>
    <input type="number" id="BUSBillNo"name="BUSBillNo"required><br><br>
    <label for="BUS Stage">BUSStage:</label>
    <input type="text" id="BUSStage"name="BUSStage" required><br><br>

    <input type="submit" value="Add Fee">
    </form>
    <?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajithkumar";

// Create connection
$conn =new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$RegNo = $_POST['RegNo'];
$StudentName = $_POST['StudentName'];
$BUSFeesAmount = $_POST['BUSFeesAmount'];
$BUSBillNo = $_POST['BUSBillNo'];
$BUSStage = $_POST['BUSStage'];

// Insert data into the database
$sql = "INSERT INTO bus1 (RegNo,StudentName,BUSFeesAmount,BUSBillNo,BUSStage) VALUES ('$RegNo','$StudentName','$BUSFeesAmount','$BUSBillNo','$BUSStage')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
</body>
</html>