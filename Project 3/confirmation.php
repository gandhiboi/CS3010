<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

<div class="header">
    <h1 class="header1"><img src="./logo.png" alt="logo" class="logo">
        Bosnia
        <img src="./logo.png" alt="logo" class="logo">
    </h1>
</div>

<div class="row" style="background-color: #984B43">
    <div class="col-3 col-s-3 menu">
        <h1 id="menu1"> Menu </h1>
        <ul>
            <li class="list1"><a href="index.html">Home</a></li>
            <li class="list1"><a href="./registration.php">Registration</a></li>
            <li class="list1"><a href="./animations.html">Animations</a></li>
        </ul>
    </div>

    <div class="col-6 col-s-9" style="background-color: #EAC67A">
        <h1 id="title1">Thank You!</h1>
        <form name="regForm" method="POST">
            <div class="row">
                <div class="col-25">
                    <?php
                        echo "<br> Username: ",$_POST["username"],"<br>";
                        echo "<br> Password: ",$_POST["password"],"<br>";
                        echo "<br> Confirm Password: ",$_POST["verifyPassword"],"<br>";
                        echo "<br> First Name: ",$_POST["fname"],"<br>";
                        echo "<br> Last Name: ",$_POST["lname"],"<br>";
                    ?>
                </div>
                <div class="col-25">
                    <?php
                        echo "<br> Address Line 1: ",$_POST["address1"],"<br>";
                        echo "<br> Address Line 2: ",$_POST["address2"],"<br>";
                        echo "<br> City: ",$_POST["city"],"<br>";
                        echo "<br> State: ",$_POST["state"],"<br>";
                        echo "<br> Zip Code: ",$_POST["zipcode"],"<br>";
                    ?>
                </div>
                <div class="col-25">
                    <?php
                        echo "<br> Phone: ",$_POST["phonenum"],"<br>";
                        echo "<br> Email: ",$_POST["email"],"<br>";
                        echo "<br> Gender: ",$_POST["gender"],"<br>";
                        echo "<br> Marital Status: ",$_POST["maritalstatus"],"<br>";
                        echo "<br> Date of Birth: ",$_POST["dob"],"<br>";
                    ?>
                </div>
            </div>
        </form>
    </div>

    <div class="col-3 col-s-10">
        <div class="aside">
            <br>
            <img src="./maxresdefault.jpg" id="support" alt="thankyou" style="width:100%">
        </div>
    </div>
</div>


<div class="footer">
    <div class="row">
        <div class="footcolumns">
            <a href="https://google.com/" target="_blank">Google</a>
        </div>
        <div class="footcolumns">
            <a href="https://humblebundle.com/" target="_blank">Humble Bundle</a>
        </div>
        <div class="footcolumns">
            <a href="https://amazon.com/" target="_blank">Amazon</a>
        </div>
    </div>
</div>

</body>
</html>