<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stil.css">
    <title>Contact</title>
</head>
<body>
<div class="containerc">
        <div class="navbar">
            <img src="./logo/interior-solutions-logo.png" class="logo">
            <nav>
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./about.php">About</a></li>
                    <li><a href="./catalogue.php">Catalogue</a></li>
                    <li><a href="./livingroom.php">Living Room</a></li>
                    <li><a href="./category.php">Category</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                </ul>
            </nav>
            </div>
        <div class="contact">
                <div class="contactus">
                    <h3>Contact us:</h3>
                    <form method="get">
                    <table id="tabela2">
                        <tr>
                            <td>Name and Surname:</td>
                            <td>Email:</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="name" required></td>
                            <td><input type="email" name="email" required></td>
                        </tr>
                        <tr>
                            <td>Phone number:</td>
                            <td>Postcode:</td>
                        </tr>
                        <tr>
                            <td><input type="number" name="number" required ></td>
                            <td><input type="number" name="postcode" required ></td>
                        </tr>
                        <tr><td><label>Comment:</label><td></td>
                        </tr>
                        <tr>
                            <td rowspan="1" colspan="2"><textarea name="area" id="area" cols="44" rows="10" placeholder="type your comment..." required></textarea></td>
                        </tr>
                        <tr>
                            <td><input id="submit2" type="submit" value="Send" ></td>
                        </tr>
                    </table>
                    </form>
                </div>
                <div class="contactinfo">
                    <h3>Contact info:</h3>
                    <p><span>Interior Solutions </span><br>
                    <span> Omladinska 11</span><br>
                    <span>16000 Leskovac, Srbija</span>
                </p>
                    <p><a href="http://interiorsolutions.rs">www.interiorsolutions.rs</a></p>
                   

                </div>
                
                <?php
                    if(isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["number"]) && isset($_GET["postcode"]) && isset($_GET["area"])){
                        $name=$_GET["name"];
                        $email=$_GET["email"];
                        $number=$_GET["number"];
                        $postcode=$_GET["postcode"];
                        $area=$_GET["area"];

                        echo "<h4>Thank you for contacting us! <br> Your contact info is: <br>Name:$name  <br>Email:$email <br>Number:$number  <br>Postcode:$postcode  <br>Comment:$area <br> We will answer you soon!</h4>";  
                    }
                   

        ?>




            </div>
            
           
       
</body>
</html>