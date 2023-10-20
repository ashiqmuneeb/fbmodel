<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook-login</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>
 </head>
<body>
    <div class="container">
        <div class="header">
           <div class="logo">
            <a class="logo-text" href="index.html">facebook</a>
           </div>
           <div class="login">
            <form action="">
            <table class="login-controls">
                <tr>
                    <td><label class="login-label">Email or Mobile</label></td>
                    <td><label class="login-label">Password</label></td>
                </tr>
                <tr>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input class="sub-btn" type="submit" value="Login"></td>
                </tr>
               <tr>
                <td></td>
                <td><a class="forgetten" href="forgetten.html">Forget your password?</a></td>
               </tr>

            </table>
            </form>

        </div>
    </div>
    
    <div class="main-body">
        <div class="left-section">
             <p class="para"><b>Meta Facebook helps you connect and share with the people in <br>your life.</b></p>
             <img class="image" src="facebook-what-is.png" alt="">
        </div>
        <div class="right-section">
            <h1>Create an account</h1>
            <p>it`s quick and easy:</p>
            <form action="" method="POST">
                <input  id="text1" type="text" name="fname" placeholder="First name">
                <input id="text2" type="text" name="lname" placeholder="Last name"><br><br>
                <input id="number" type="email" name="email" placeholder="Mobile Number or Email"><br><br>
                <input class="input__field" id="password" type="password" name="password" placeholder="New Password">
               

                <label><b>Birthday:</b></label><br><br>
                <select name="day" class="date">
                    <option value="">Day</option>
                </select> 
                <select name="month" class="date">
                    <option value="">Month </option>
                </select>
                <select name="year" class="date">
                    <option value="">Year</option>
                </select><br><br>
                <label><b>Gender:</b></label><br><br>
                <input type="radio" name="gender" value="male" class="radio">Male
                <input type="radio" name="gender" value="female" class="radio">Female
                <input type="radio" name="gender" value="other" class="radio">Other

                <br><br>
                <p>By clicking Signup,you agree to the <a class="policy" href="">Terms,Data policy<br> and Cookie policy.</a>You may recieve SMS notifications<br>from</p><br><br>
                <button id="submit" name="submit"><b>Sign up</b></button> 
            </form>
            </div>
    </div>
    
    
    </div>
    </div>

    </div>


<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "fb-login";

$conn= new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("connection failed:  ". $conn->conect_error);
}

if (isset($_POST["submit"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $number = $_POST["email"];
    $day = $_POST["day"];
    $month = $_POST["month"];
    $year = $_POST["year"];
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";

    // Combine the day, month, and year into a single date string
    $date = $year . "-" . $month . "-" . $day;

    $sql = "INSERT INTO `logindetails` (`id`, `fname`, `lname`, `number/email`, `DOB`, `gender`) VALUES (NULL, '$fname', '$lname', '$number', '$date', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


?>
<script src="script.js"></script>

</body>
</html> 