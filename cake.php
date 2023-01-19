
 <!-- <?php
    $con =new mysqli("localhost", "cake_user", "password","cake_order");
    if ($con->connect_error) {
        
        die("if". $con->connect_error);
    }
    echo"connect successfully";
    $sql = "SELECT ClientName FROM client where ClientID=5";
    $result = $con->query($sql);

    if($result->num_rows > 0){
        while($row =$result->fetch_assoc()){
            echo $row["ClientName"];
        }
    //echo "test";
    }
    else "0 result";
?>  -->
<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript" src="functions.js"></script>
    <meta charset="UTF-8" />
    <title>Input Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="text-align:center">

    <header>
        <img src="order-cake.png" width="200" height="220">
    </header>

    <nav>

    </nav>

    <main>
        <h1>Register Order</h1>

        <form action="insert.php" method="post">
            <div>
                <label for="client-name">Client name</label><br>
                <input type="text" id="client-name" name="ClientName" required>
            </div>
            <div>
                <label for="mobile-number">Mobile number</label><br>
                <input type="number" id="mobile-number" name="ClientMobile" required>
            </div>
            <div>
                <label for="delivery-date">Delivery date</label><br>
                <input type="date" name="DeliveryDate" id="delivery-date" required>
            </div>
            <div>
                <label for="delivery-hour">Delivery hour</label><br>
                <input type="time" name="delivery-hour" id="delivery-hour">
            </div>
            <div>
                <label>Number of items</label><br>
                <input type="number" name="ItemNumbers" id="items-no">
            </div>
            <button type="button" id="confirm" onclick="items1()">Confirm</button>
            <h2 id="numbers"></h2>
            <p id="registration"></p>

            <h2 style="display: none;">New Item </h2>

            <div style="display: none;">
                <label for="total-serving">Total serving</label><br>
                <input type="number" name="total-serving" id="total-serving" min="1">
            </div>

            <div style="display: none;">
                <label for="flavor">Choose a Flavor:</label><br>
                <select id="flavor" name="flavor" required onchange="display()">
                    <option value="Select a flavor" selected>Select a flavor </option>
                    <option value="fanella">Fanella</option>
                    <option value="choclate">Choclate</option>
                    <option value="others">Others</option>
                </select>
            </div>
            <div id="other-input" style="display: none;">
                <label for="other-input">Other</label><br>
                <input type="text" name="other-input">
            </div>

            <div style="display: none;">
                <label for="decor">Choose a Decor:</label><br>
                <select id="decor" name="decor" required>
                    <option value="picture"><img src="cake-decor.jpg"></option>
                    <option value="model">Model</option>

                </select>
            </div>

            <div style="display: none;">
                <label for="price">Price</label><br>
                <input type="number" id="price" name="price">
            </div>

            <div style="display: none;">
                <label for="situation">Choose a Situation:</label><br>
                <select id="situation" name="situation" required>
                    <option value="waiting">Waiting</option>
                    <option value="cooking">Cooking</option>
                    <option value="done">Done</option>
                    <option value="delivered">Delivered</option>
                    <option value="canceled">Canceled</option>

                </select>
            </div><br>

            <div>
                <input style="width: 120; height: 100; color: blue; " type="submit"> Add
                    Order</input>
            </div>

        </form>

    </main>

    <footer>
        <h4>Copyrights is atached here !!</h4>
    </footer>

</body>

</html>