

<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript" src="functions.js"></script>
    <meta charset="UTF-8" />
    <title>Order List</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="text-align: center;">

    <header>
        <h1>View order list</h1>
    </header>

    <main>

        <h2>Orders List</h2>
        <input type="text" id="name" onkeyup="searchByName()"  placeholder="Name Free search.." title="Type in a name">
        <input type="text" id="mobile" onkeyup="searchByMobile()" placeholder="Mobile Free search.." title="Type in a mobile">
        <input type="text" id="date" onkeyup="searchByDate()" placeholder="Date search.." title="Type in a date">
        <!--<input type="text" id="mode" onkeyup="searchByMode()" placeholder="Mode search.." title="Type in a mode">
        -->
        <select id="mode" name="mode" required onchange="searchByMode()">
            <option value="Select a mode" selected> Select a mode</option>
            <option value="done">Done</option>
            <option value="waiting">Waiting</option>
            <option value="cooking">Cooking</option>
            <option value="delivered">Delivered</option>
            <option value="canceled">Canceled</option>
        </select>
        
        <table  id="col" >
            <button onclick="colorSituation()">click meee</button>
            
            <tr  onclick="" style="cursor:pointer;" >
            
                <th>Date of registration</th>
                <th>Order number</th>
                <th>Customer name</th>
                <th>Delivery date</th>
                <th>Mobile number</th>
                <th>Mode</th>
            </tr>
            <tr onclick="goToEdit()" style="cursor: pointer;">

            <?php
                $con =new mysqli("localhost", "cake_user", "password","cake_order");
                if ($con->connect_error) {
                    
                    die("if". $con->connect_error);
                }
                echo"connect successfully";
                $sql = "SELECT ClientName, ClientMobile, DeliveryDate,Situation,ItemNumbers,ClientMobile FROM client";
                $result = $con->query($sql);

                if($result->num_rows > 0){
                    while($row =$result->fetch_assoc()){
                       // $id=2;
                        echo "<tr><td>". $row["DeliveryDate"] ."</td>" .
                        "<td>" .$row["ItemNumbers"] ."</td> ".
                        "<td>" .$row["ClientName"]  ."</td>" .
                        "<td>" .$row["DeliveryDate"] ."</td>" .
                        "<td>" .$row["ClientMobile"] ."</td>" .
                        "<td>" .$row["Situation"]. "</td>".
                        "<td>" ."<a href='updateCake.php'>Click to edit </a>". "</td>

                        </tr> </tr>" ;
                    }
                }
                else "0 result";
            ?> 
                <!-- <td>2-12-2022</td>
                <td>2</td>
                <td>asad</td>
                <td>6-12-2022</td>
                <td>0599661177</td>
                <td>Done</td> -->
            
            <!-- <tr>
                 <td>3-12-2022</td>
                <td>2</td>
                <td>Khaled</td>
                <td>6-12-2022</td>
                <td>0599114411</td>
                <td>Waiting</td> 
            </tr>
            <tr>
                <td>3-12-2022</td>
                <td>2</td>
                <td>Khaled</td>
                <td>6-12-2022</td>
                <td>0599661177</td>
                <td>Cooking</td>
            </tr>
            <tr>
                <td>3-12-2022</td>
                <td>2</td>
                <td>Khaled</td>
                <td>6-12-2022</td>
                <td>0599661177</td>
                <td>Delivered</td>
            </tr>
            <tr>
                <td>3-12-2022</td>
                <td>2</td>
                <td>Khaled</td>
                <td>6-12-2022</td>
                <td>0599661177</td>
                <td>Canceled</td>
            </tr> -->
        </table>
    </main>

    <footer>

    </footer>

</body>

</html>