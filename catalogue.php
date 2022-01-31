<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stil.css">
    <title>Catalogue</title>
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
        <div class="content">
        <h1>Here you can order our Catalogues,<br> with new interior design ideas:</h1> 
        <br>
        <br>
        <br>
           <form method="post">
               <select id="catal" name="catalogueid">
                   <?php
                   include 'db.php';
                   foreach($catalogues as $key=>$catalog){
                       echo "<option value='$key'>$catalog[name] - $catalog[price]</option>";
                   }

                   ?>
               </select>
               <select id="amount" name="amount">
                   <?php
                   for($x=1;$x<=10;$x++){
                       echo "<option>$x</option>";
                   }

                   ?>
               </select>
               <input id="submit" type="submit" value="Order">
           </form>
           <br>
           <?php

           if(isset($_POST["catalogueid"]) && isset($_POST["amount"])){
             $catalogueid=$_POST["catalogueid"];
             $amount=$_POST["amount"];  
            $totalcost=$amount*$catalogues[$catalogueid]['price'];

            echo "You have ordered $amount exemplers of {$catalogues[$catalogueid]['name']} for the price of $totalcost $";
               
           }

 
?>
                <img src="./pic/catalog.jpg" class="cat-img">
    </div> 
</body>
</html>