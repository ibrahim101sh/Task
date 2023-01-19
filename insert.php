<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn =new mysqli("localhost", "cake_user", "password","cake_order");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $ClientName=  $_REQUEST['ClientName'];
        $ClientMobile = $_REQUEST['ClientMobile'];
        $DeliveryDate =  $_REQUEST['DeliveryDate'];
        $ItemNumbers = $_REQUEST['ItemNumbers'];
        $deliveryHour = $_REQUEST['delivery-hour'];
        $ClientID = rand();
        
         
        // Performing insert query execution
        // here our table name is college
        // $sql = "INSERT INTO client  VALUES ('$ClientID','$ClientName',
        //     '$ClientMobile','$DeliveryDate','$ItemNumbers')";

$sql = "INSERT INTO client (ClientID, ClientName, ClientMobile, DeliveryDate,ItemNumbers,DeliveryHour)
                    VALUES ('$ClientID','$ClientName','$ClientMobile','$DeliveryDate','$ItemNumbers', '$deliveryHour')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            // echo nl2br("\n$first_name\n $last_name\n "
            //     . "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
 
</body>
 
</html>