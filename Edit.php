<!--
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Edit Page</title>
</head>
<body style="text-align:center">
	<form action="">

        <div>
            <label for="delivery-date">Delivery date</label><br>
            <input type="date" name="delivery-date" id="delivery-date" required>
        </div>

        <div>
            <label for="client-name">Client name</label><br>
            <input type="text" id="client-name" name="client-name" required>
        </div>

        <div>
            <label for="mobile-number">Mobile number</label><br>
            <input type="number" id="mobile-number" name="mobile-number" required>
        </div>

        <div>
            <label for="situation">Choose a Situation:</label><br>
            <select id="situation" name="situation" required>
                <option value="waiting" selected>Choose a situation</option>
                <option value="waiting">Waiting</option>
                <option value="cooking">Cooking</option>
                <option value="done">Done</option>
                <option value="delivered">Delivered</option>
                <option value="canceled">Canceled</option>

            </select>
        </div><br>

    </form>
</body>
</html>
-->


<?php

// servername => localhost
// username => root
// password => empty
// database name => staff
$conn = new mysqli("localhost", "cake_user", "password", "cake_order");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
$ClientName =  $_REQUEST['ClientName'];
$ClientMobile = $_REQUEST['ClientMobile'];
$DeliveryDate =  $_REQUEST['DeliveryDate'];
$ItemNumbers = $_REQUEST['ItemNumbers'];
$deliveryHour = $_REQUEST['delivery-hour'];


$sql = "UPDATE  client set 
ClientName = '$ClientName',
ClientMobile ='$ClientMobile' , 
DeliveryDate= '$DeliveryDate',
ItemNumbers = '$ItemNumbers',
DeliveryHour  = '$deliveryHour'
where ClientID=2";
if (mysqli_query($conn, $sql)) {
    echo "<h3>data updated in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    // echo nl2br("\n$first_name\n $last_name\n "
    //     . "$gender\n $address\n $email");
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
</body>

</html>