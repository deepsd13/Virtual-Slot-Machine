<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Assignment 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- This code controls the dimensions of the web page according to phone,desktop and tablets.-->
        <link href='main.css' rel="stylesheet">
    </head>

    <body>
        
        <h1> The Virtual Slot Machine!! </h1> 
        <main>
        <img src="images/cherry.png" alt="Cherry">
        <img src="images/cherry.png" alt="Cherry">
        <img src="images/cherry.png" alt="Cherry">
        <form action="userInput.php" method="POST"><!-- added the php file so on submit the page reloads with the php file-->
            <input type="submit" value="SPIN"> <br>
            <div>
                <b> <label class="input" >Name:</label></b><input type="text" name="name" class="input"  pattern="[A-Za-z\s]{1,100}" title="Enter Letters" required><br><br><!--added some client side validation here-->
                <b><label>Your bet:</label></b><input type="number" name="bet" min="1" max="100" class="width" required> &nbsp;&nbsp;<!--min= 1 and max=100 defines that the user can bet between these numbers--> 
                <b><label>Credit: </label> </b><input type="text" name="credit" value="100" class="width" readonly><!--defines the credit that the user have and it cannot be changed-->
            </div>
        </form>
        </main>
    </body>

</html>
