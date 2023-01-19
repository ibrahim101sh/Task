


function display() {
    var e = document.getElementById("flavor");
    var index = e.selectedIndex;

    if (index == 3) {
        document.getElementById("other-input").style.display = 'block';
    }
    else {
        document.getElementById("other-input").style.display = 'none';
    }


}


function items1() {
    var element = document.getElementById("items-no");
    var index = element.value;
    for (var i = 0; i < index; i++) {
        var item_number = console.log("Item number: " + index);
        //  document.getElementById("numbers").insertAdjacentHTML("afterEnd", item_number)
        document.getElementById("registration").insertAdjacentHTML("afterEnd", '<h2>New Item </h2> <div><label for="total-serving">Total serving</label><br><input type="number" name="total-serving" id="total-serving" min="1"></div><div> <label for="flavor">Choose a Flavor:</label><br> <select id="flavor" name="flavor" required > <option value="Select a flavor" selected>Select a flavor</option> <option value="fanella">Fanella</option> <option value="choclate">Choclate</option> <option value="others">Others</option> </select> </div> <div id="other-input"> <label for="other-input">Other</label><br> <input type="text" name="other-input"> </div> <div> <label for="decor">Choose a Decor:</label><br> <select id="decor" name="decor" required> <option value="picture"><img src="cake-decor.jpg"></option> <option value="model">Model</option> </select> </div> <div> <label for="price">Price</label><br> <input type="number" id="price" name="price" required> </div> <div> <label for="situation">Choose a Situation:</label><br> <select id="situation" name="situation" required> <option value="waiting">Waiting</option> <option value="cooking">Cooking</option> <option value="done">Done</option> <option value="delivered">Delivered</option> <option value="canceled">Canceled</option> </select> </div><br>');
    }
}

function colorSituation() {
    var rows = document.querySelectorAll('td');
    rows.forEach((row) => {
        if (row.innerHTML === 'Waiting') {
            var parent = row.parentNode;
            parent.style.backgroundColor = 'white';
        }
        if (row.innerHTML === 'Done') {
            var parent = row.parentNode;
            parent.style.backgroundColor = 'green';
        }
        if (row.innerHTML === 'Cooking') {
            var parent = row.parentNode;
            parent.style.backgroundColor = 'yellow';
        }
        if (row.innerHTML === 'Delivered') {
            var parent = row.parentNode;
            parent.style.backgroundColor = 'grey';
        }
        if (row.innerHTML === 'Canceled') {
            var parent = row.parentNode;
            parent.style.backgroundColor = 'red';
        }
    });


    //var element = document.getElementById("situation")
    //var index = element.selectedIndex;
    //var changeColor = document.getElementById("col").getElementsByTagName("th");
    //changeColor[0].style.backgroundColor= "red";
    //document.getElementById('col').style.backgroundColor='#003F87';

    //switch(index){
    //  case 1: changeColor.css({color: "#F8E0E0"})

    //}
}
function searchByName() {
    var input, filter, table, tr, td_mode, i, txtValue;
    input = document.getElementById("name");
    filter = input.value.toUpperCase();
    table = document.getElementById("col");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td_mode = tr[i].getElementsByTagName("td")[2];
        if (td_mode) {
            txtValue = td_mode.textContent || td_mode.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
    
}

function searchByMobile() {
    var input, filter, table, tr, td_mode, i, txtValue;
    input = document.getElementById("mobile");
    filter = input.value.toUpperCase();
    table = document.getElementById("col");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td_mode = tr[i].getElementsByTagName("td")[4];
        if (td_mode) {
            txtValue = td_mode.textContent || td_mode.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
    
}

function searchByDate() {
    var input, filter, table, tr, td_mode, i, txtValue;
    input = document.getElementById("date");
    filter = input.value.toUpperCase();
    table = document.getElementById("col");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td_mode = tr[i].getElementsByTagName("td")[0];
        if (td_mode) {
            txtValue = td_mode.textContent || td_mode.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
    
}


function searchByMode() {
    var input, filter, table, tr, td_mode, i, txtValue;
    input = document.getElementById("mode");
    filter = input.value.toUpperCase();
    table = document.getElementById("col");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td_mode = tr[i].getElementsByTagName("td")[5];
        if (td_mode) {
            txtValue = td_mode.textContent || td_mode.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
    
}
function goToEdit(){
    window.location.replace("Edit.html")
}

function addToDB(){
    var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "cake_user",
  password: "password",
  database: "cake_order"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  var sql = "INSERT INTO client (clientID, clientName,clientMobile,DeliveryDate,DeliveryHour,ItemNumbers,TotalSurvings,Flavor,OtherFlavor,Decor,Price,Situation)VALUES(5,'AHMAD',999,'1990-12-12','13:30',3,4,'ice','newflav','decco',50,situation)";
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log("1 record inserted");
  });
});

}





