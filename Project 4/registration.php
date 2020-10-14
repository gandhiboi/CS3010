<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/additional-methods.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script type="text/javascript" src="./validation.js"></script>


</head>

<body>

<?php
include 'validate.php';
?>

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
            <li class="list1"><a href="./registration.html">Registration</a></li>
            <li class="list1"><a href="./animations.html">Animations</a></li>
        </ul>
    </div>

    <div class="col-6 col-s-9" style="background-color: #EAC67A">
        <h1 id="title1">Register Here!</h1>
        <form name="regForm" method="POST">
            <div class="row">
                <div class="col-25">
                    <br><b> User Name</b>
                    <span class="error">*<?php echo $usernameError;?></span>
                    <input type="text" class="prop" name="username" id="username" placeholder="User name" value="<?php echo $username; ?>" required><br>
                    <b>Password</b>
                    <span class="error">*<?php echo $passwordError;?></span><br>
                    <input type="password" class="prop" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" required><br>
                    <b>Verify Password</b>
                    <span class="error">*<?php echo $verifyPasswordError;?></span><br>
                    <input type="password" class="prop" name="verifyPassword" id="verifyPassword" placeholder="Re-enter password" value="<?php echo $verifyPassword; ?>" required><br>
                    <b>First Name</b>
                    <span class="error">*<?php echo $fnameError;?></span><br>
                    <input type="text" class="prop" name="fname" id='fname' placeholder="First name" value="<?php echo $fname; ?>" required><br>
                    <b>Last Name</b>
                    <span class="error">*<?php echo $lnameError;?></span><br>
                    <input type="text" class="prop" name="lname" id="lname" placeholder="Last name" value="<?php echo $lname; ?>" required> <br>
                    <b>Address Line 1</b>
                    <span class="error">*<?php echo $address1Error;?></span><br>
                    <input type="text" class="prop" name="address1" id="address1" placeholder="Address Line 1" value="<?php echo $address1; ?>" required><br>
                    <b>Address Line 2</b>
                    <span class="error"><?php echo $address2Error;?></span><br>
                    <input type="text" class="prop" name="address2" id="address2" placeholder="optional" value="<?php echo $address2; ?>"><br>
                </div>
                <div class="col-25">
                    <br><b>City</b>
                    <span class="error">*<?php echo $cityError;?></span><br>
                    <input type="text" class="prop" name="city" id="city" placeholder="City" value="<?php echo $city; ?>" required><br>
                    <b>State</b>
                    <span class="error">*<?php echo $stateError;?></span><br>
                    <select class="prop" name="state" id="state" value="<?php echo $state; ?>" required>
                        <option value=""> - Select a State -</option>
                        <option value="AL" <?php echo isset($_POST["state"]) && $_POST["state"] == "AL" ? "selected" : "" ?>>Alabama</option>
                        <option value="AK" <?php echo isset($_POST["state"]) && $_POST["state"] == "AK" ? "selected" : "" ?>>Alaska</option>
                        <option value="AZ" <?php echo isset($_POST["state"]) && $_POST["state"] == "AZ" ? "selected" : "" ?>>Arizona</option>
                        <option value="AR" <?php echo isset($_POST["state"]) && $_POST["state"] == "AR" ? "selected" : "" ?>>Arkansas</option>
                        <option value="CA" <?php echo isset($_POST["state"]) && $_POST["state"] == "CA" ? "selected" : "" ?>>California</option>
                        <option value="CO" <?php echo isset($_POST["state"]) && $_POST["state"] == "CO" ? "selected" : "" ?>>Colorado</option>
                        <option value="CT" <?php echo isset($_POST["state"]) && $_POST["state"] == "CT" ? "selected" : "" ?>>Connecticut</option>
                        <option value="DE" <?php echo isset($_POST["state"]) && $_POST["state"] == "DE" ? "selected" : "" ?>>Delaware</option>
                        <option value="DC" <?php echo isset($_POST["state"]) && $_POST["state"] == "DC" ? "selected" : "" ?>>District Of Columbia</option>
                        <option value="FL" <?php echo isset($_POST["state"]) && $_POST["state"] == "FL" ? "selected" : "" ?>>Florida</option>
                        <option value="GA" <?php echo isset($_POST["state"]) && $_POST["state"] == "GA" ? "selected" : "" ?>>Georgia</option>
                        <option value="HI" <?php echo isset($_POST["state"]) && $_POST["state"] == "HI" ? "selected" : "" ?>>Hawaii</option>
                        <option value="ID" <?php echo isset($_POST["state"]) && $_POST["state"] == "ID" ? "selected" : "" ?>>Idaho</option>
                        <option value="IL" <?php echo isset($_POST["state"]) && $_POST["state"] == "IL" ? "selected" : "" ?>>Illinois</option>
                        <option value="IN" <?php echo isset($_POST["state"]) && $_POST["state"] == "IN" ? "selected" : "" ?>>Indiana</option>
                        <option value="IA" <?php echo isset($_POST["state"]) && $_POST["state"] == "IA" ? "selected" : "" ?>>Iowa</option>
                        <option value="KS" <?php echo isset($_POST["state"]) && $_POST["state"] == "KS" ? "selected" : "" ?>>Kansas</option>
                        <option value="KY" <?php echo isset($_POST["state"]) && $_POST["state"] == "KY" ? "selected" : "" ?>>Kentucky</option>
                        <option value="LA" <?php echo isset($_POST["state"]) && $_POST["state"] == "LA" ? "selected" : "" ?>>Louisiana</option>
                        <option value="ME" <?php echo isset($_POST["state"]) && $_POST["state"] == "ME" ? "selected" : "" ?>>Maine</option>
                        <option value="MD" <?php echo isset($_POST["state"]) && $_POST["state"] == "MD" ? "selected" : "" ?>>Maryland</option>
                        <option value="MA" <?php echo isset($_POST["state"]) && $_POST["state"] == "MA" ? "selected" : "" ?>>Massachusetts</option>
                        <option value="MI" <?php echo isset($_POST["state"]) && $_POST["state"] == "MI" ? "selected" : "" ?>>Michigan</option>
                        <option value="MN" <?php echo isset($_POST["state"]) && $_POST["state"] == "MN" ? "selected" : "" ?>>Minnesota</option>
                        <option value="MS" <?php echo isset($_POST["state"]) && $_POST["state"] == "MS" ? "selected" : "" ?>>Mississippi</option>
                        <option value="MO" <?php echo isset($_POST["state"]) && $_POST["state"] == "MO" ? "selected" : "" ?>>Missouri</option>
                        <option value="MT" <?php echo isset($_POST["state"]) && $_POST["state"] == "MT" ? "selected" : "" ?>>Montana</option>
                        <option value="NE" <?php echo isset($_POST["state"]) && $_POST["state"] == "NE" ? "selected" : "" ?>>Nebraska</option>
                        <option value="NV" <?php echo isset($_POST["state"]) && $_POST["state"] == "NV" ? "selected" : "" ?>>Nevada</option>
                        <option value="NH" <?php echo isset($_POST["state"]) && $_POST["state"] == "NH" ? "selected" : "" ?>>New Hampshire</option>
                        <option value="NJ" <?php echo isset($_POST["state"]) && $_POST["state"] == "NJ" ? "selected" : "" ?>>New Jersey</option>
                        <option value="NM" <?php echo isset($_POST["state"]) && $_POST["state"] == "NM" ? "selected" : "" ?>>New Mexico</option>
                        <option value="NY" <?php echo isset($_POST["state"]) && $_POST["state"] == "NY" ? "selected" : "" ?>>New York</option>
                        <option value="NC" <?php echo isset($_POST["state"]) && $_POST["state"] == "NC" ? "selected" : "" ?>>North Carolina</option>
                        <option value="ND" <?php echo isset($_POST["state"]) && $_POST["state"] == "ND" ? "selected" : "" ?>>North Dakota</option>
                        <option value="OH" <?php echo isset($_POST["state"]) && $_POST["state"] == "OH" ? "selected" : "" ?>>Ohio</option>
                        <option value="OK" <?php echo isset($_POST["state"]) && $_POST["state"] == "OK" ? "selected" : "" ?>>Oklahoma</option>
                        <option value="OR" <?php echo isset($_POST["state"]) && $_POST["state"] == "OR" ? "selected" : "" ?>>Oregon</option>
                        <option value="PA" <?php echo isset($_POST["state"]) && $_POST["state"] == "PA" ? "selected" : "" ?>>Pennsylvania</option>
                        <option value="RI" <?php echo isset($_POST["state"]) && $_POST["state"] == "RI" ? "selected" : "" ?>>State of Rhode Island and Providence Plantations</option>
                        <option value="SC" <?php echo isset($_POST["state"]) && $_POST["state"] == "SC" ? "selected" : "" ?>>South Carolina</option>
                        <option value="SD" <?php echo isset($_POST["state"]) && $_POST["state"] == "SD" ? "selected" : "" ?>>South Dakota</option>
                        <option value="TN" <?php echo isset($_POST["state"]) && $_POST["state"] == "TN" ? "selected" : "" ?>>Tennessee</option>
                        <option value="TX" <?php echo isset($_POST["state"]) && $_POST["state"] == "TX" ? "selected" : "" ?>>Texas</option>
                        <option value="UT" <?php echo isset($_POST["state"]) && $_POST["state"] == "UT" ? "selected" : "" ?>>Utah</option>
                        <option value="VT" <?php echo isset($_POST["state"]) && $_POST["state"] == "VT" ? "selected" : "" ?>>Vermont</option>
                        <option value="VA" <?php echo isset($_POST["state"]) && $_POST["state"] == "VA" ? "selected" : "" ?>>Virginia</option>
                        <option value="WA" <?php echo isset($_POST["state"]) && $_POST["state"] == "WA" ? "selected" : "" ?>>Washington</option>
                        <option value="WV" <?php echo isset($_POST["state"]) && $_POST["state"] == "WV" ? "selected" : "" ?>>West Virginia</option>
                        <option value="WI" <?php echo isset($_POST["state"]) && $_POST["state"] == "WI" ? "selected" : "" ?>>Wisconsin</option>
                        <option value="WY" <?php echo isset($_POST["state"]) && $_POST["state"] == "WY" ? "selected" : "" ?>>Wyoming</option>
                        </select><br>
                    <b>Zip Code</b>
                    <span class="error">*<?php echo $zipcodeError;?></span><br>
                    <input type="text" class="prop" name="zipcode" id="zipcode" placeholder="Zip Code"
                           data-mask="00000-0000" value="<?php echo $zipcode; ?>" required><br>
                    <b>Phone Number</b>
                    <span class="error">*<?php echo $phonenumError;?></span><br>
                    <input type="text" class="prop" name="phonenum" id="phonenum" placeholder="Phone Number"
                           data-mask="000-000-0000" value="<?php echo $phonenum; ?>" required><br>
                    <b>Email</b>
                    <span class="error">*<?php echo $emailError;?></span><br>
                    <input type="email" class="prop" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" required> <br>
                    <b>Gender</b>
                    <span class="error">*<?php echo $genderError;?></span><br>
                    <input type="radio" class="prop" name="gender" id="male" value="male"
                        <?php if ($gender=="male"){echo "checked";}?> required>
                    <label for="male">Male</label><br>
                    <input type="radio" class="prop" name="gender" id="female" value="female"
                        <?php if ($gender=="female"){echo "checked";}?> required>
                    <label for="female">Female</label><br>
                    <input type="radio" class="prop" name="gender" id="other" value="other"
                        <?php if ($gender=="other"){echo "checked";}?> required>
                    <label for="other">Other</label>
                </div>
                <div class="col-25">
                    <br><b>Marital Status</b>
                    <span class="error">*<?php echo $maritalstatusError;?></span><br>
                    <input type="radio" class="prop" name="maritalstatus" id="single" value="Single"
                           <?php if ($maritalstatus=="Single"){echo "checked";}?> required>
                    <label for="single">Single</label><br>
                    <input type="radio" class="prop" name="maritalstatus" id="married" value="Married"
                           <?php if ($maritalstatus=="Married"){echo "checked";}?> required>
                    <label for="married">Married</label><br>
                    <input type="radio" class="prop" name="maritalstatus" id="separated" value="Separated"
                        <?php if ($maritalstatus=="Separated"){echo "checked";}?> required>
                    <label for="separated">Separated</label><br>
                    <input type="radio" class="prop" name="maritalstatus" id="divorced" value="Divorced"
                           <?php if ($maritalstatus=="Divorced"){echo "checked";}?> required>
                    <label for="divorced">Divorced</label><br>
                    <input type="radio" class="prop" name="maritalstatus" id="widowed" value="Widowed"
                           <?php if ($maritalstatus=="Widowed"){echo "checked";}?> required>
                    <label for="widowed">Widowed</label>
                    <br><b>Date of Birth</b>
                    <span class="error">*<?php echo $dobError;?></span><br>
                    <input type="text" class="prop" name="dob" id="dob" placeholder="Date of Birth"
                           value="<?php echo $dob; ?>" required><br>
                    <br>
                    <input type="submit" class="prop" name="submit" value="Submit"><br>
                    <br>
                    <input type="reset" class="prop" name="reset" value="Reset"><br>
                </div>
            </div>
        </form>
    </div>

    <div class="col-3 col-s-10">
        <div class="aside">
            <h2>Complete your registration to catch all my newest blog updates!</h2>
            <p> <br>
                I will be updating this blog whenever I take some awesome pictures or if something very exciting happens!
            </p>
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

<?php if ($isValid) { ?>
    <form id="hiddenForm" name="hiddenForm" method="POST" action="confirmation.php">
        <?php foreach ($_POST as $key => $value) { ?>
            <input name="<?php echo $key; ?>" value="<?php echo $value ?>" type="hidden" />
        <?php } ?>
    </form>
    <script>
        document.createElement('form').submit.call(document.getElementById('hiddenForm'))
    </script>
<?php } ?>


</body>
</html>