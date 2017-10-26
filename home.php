<?php
session_start();
?>
<html>
<head>
    <link rel="stylesheet" href="Front with CSS.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-orange.min.css" />
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <script src="gen_validatorv4.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body background="airplane.jpg">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Home</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="home.php">Home</a>
                    <a class="mdl-navigation__link" href="form.php">Signup</a>
                    <a class="mdl-navigation__link" href="front.php">Login</a>
                    <a class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                    <a class="mdl-navigation__link" href="Admin_login.php">Administrators</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Home</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="home.php">Home</a>
                <a class="mdl-navigation__link" href="form.php">Signup</a>
                <a class="mdl-navigation__link" href="front.php">Login</a>
                <a class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                <a class="mdl-navigation__link" href="Admin_login.php">Administrators</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->

                <!--ul>
                    <li><a href="">Home</a></li>
                    <li><a href="front.html">Login</a></li>
                    <li><a href="form.html">Sign Up</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul-->
                <div align="right">
                <div class="demo-card-wide mdl-card mdl-shadow--16dp" style="text-align:center;width:350px;padding:1em 0;height:50px" >  <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&timezone=Asia%2FKolkata" width="100%" height="150" frameborder="0" seamless></iframe></div>
                
                </div><br><br>
                <center>
                    <div class="demo-card-wide mdl-card mdl-shadow--16dp">
                        <div class="mdl-shadow--16dp" style="background-color:#000000">
                        <br>
                        <div class="mdl-typography--title" style="color:#ffffff">Search for Flights:</div>
                        <br>
                        </div>
                        <hr>
                        <form action="searchresultsmodified.php" method="POST" id="home">
                            <br>
                            <div>
                            <div class="mdl-typography--subtitle" for="Source">Journey Date:</div>
                            <input type="date" name="journey_date" required>
                            </div>
                            <div>
                            <div class="mdl-typography--subtitle" for="Source">Return Date</div>
                            <input type="date" name="return_date" required>
                            </div>
                            <Br>
                            <br>
                            <div class="mdl-typography--subtitle">
                                Where are you flying to ?
                            </div>
                            
                            <br>
                            <br>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <select class="mdl-textfield__input" id="Source" name="Source" required>
      <option></option>
      <option value="Delhi">Delhi</option>
      <option value="Mumbai">Mumbai</option>
      <option value="Chennai">Chennai</option>
      <option value="Kolkatta">Kolkatta</option>
      <option value="Bangalore">Bangalore</option>
    </select>
    <label class="mdl-textfield__label" for="Source">Source</label>
</div>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <select class="mdl-textfield__input" id="Destination" name="Destination" required>
      <option></option>
      <option value="Delhi">Delhi</option>
      <option value="Mumbai">Mumbai</option>
      <option value="Chennai">Chennai</option>
      <option value="Kolkatta">Kolkatta</option>
      <option value="Bangalore">Bangalore</option>
    </select>
    <label class="mdl-textfield__label" for="Destination">Destination</label>
  </div>

                            <br>
                            <br>
                            <div class="mdl-shadow--16dp" style="background-color:#000000"><br>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                        <div class="mdl-typography--subtitle" style="color:black;font-weight:bolder" name="Search">Search for Flights</div>
                    </button>
                    <br><br>
                    </div>
                    </div>
                    </form>
<script  type="text/javascript">
 var frmvalidator = new Validator("home");
 frmvalidator.addValidation("First-Name","req","Please enter your First Name");
 frmvalidator.addValidation("First-Name","maxlen=20","Max length for First Name is 20");
 
 frmvalidator.addValidation("Last-Name","req","Please enter your Last Name");
 frmvalidator.addValidation("Last-Name","maxlen=20");
 
 frmvalidator.addValidation("Email","maxlen=50");
 frmvalidator.addValidation("Email","req");
 frmvalidator.addValidation("Email","email");
 
 frmvalidator.addValidation("Mobile-No","maxlen=10","Please Enter a valid phone number");
 frmvalidator.addValidation("Mobile-No","req","Entering your mobile no is compulsory");
 frmvalidator.addValidation("Mobile-No","numeric","Please Enter a valid phone number");
 
 frmvalidator.addValidation("Address","maxlen=50");

 frmvalidator.addValidation("r_password","req","Please confirm the password you want to set!");
 frmvalidator.addValidation("Password","req","Please Provide us with a Password to secure your account");

 frmvalidator.addValidation("r_password","eqelmnt=Password","The Re-entered password is not same as the password");
</script>
                </center>
                
        </main>
</body>

</html>