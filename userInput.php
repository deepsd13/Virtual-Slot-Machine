<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Assignment 2</title>
        <link href='main.css' rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <h1> The Virtual Slot Machine!! </h1> 
        <main>
            <?php
            //server side validation

            if (!isset($_POST["name"]) || !isset($_POST["bet"])) {
                echo 'Input for name or bet is not set. Please <a href="index.php"> try again </a>'; //if either of the parameters is not set then it will print out eroor message
            } elseif (empty($_POST["name"]) || empty($_POST["bet"])) {
                echo'Input for name or bet is empty. Please <a href="index.php"> try again </a>'; //if either of the paramter is empty then it will print out error message
            } elseif (!is_numeric($_POST["bet"])) {
                echo'Enter a number for a bet.. Please <a href="index.php"> try again </a>'; //if the user enters anything except a number then it will print out error message
            } else { //if all the paramteres are ok then it will execute the following php code.
                $name = $_POST["name"];
                $bet = $_POST["bet"];
                $credit = $_POST["credit"];
                $cherry = '<img src="images/cherry.png" alt="cherry">';
                $apple = '<img src="images/apple.png" alt="apple">';
                $grapes = '<img src="images/grapes.png" alt="grapes">';
                $lemon = '<img src="images/lemon.png" alt="lemon">';
                $orange = '<img src="images/orange.png" alt="orange">';
                $pear = '<img src="images/pear.png" alt="pear" >';
                $watermelon = '<img src="images/watermelon.png" alt="waterlemon">';

                //declaring the following variables so that it can be used in following codes to print whether the user wins or loses.        
                $countforCherry = 0;
                $countforApple = 0;
                $countforGrapes = 0;
                $countforLemon = 0;
                $countforOrange = 0;
                $countforPear = 0;
                $countforWatermelon = 0;

                for ($i = 0; $i < 3; $i++) {

                    $rand = rand(1, 7); //generates a random number between 1 to 7.


                    switch ($rand) {
                        case 1: //case 1 prints cherry
                            echo $cherry;
                            $countforCherry++;
                            break;
                        case 2: //case 2 prints apple
                            echo $apple;
                            $countforApple++;
                            break;
                        case 3: //case 3 prints grapes
                            echo $grapes;
                            $countforGrapes++;
                            break;
                        case 4: //case 4 prints lemon
                            echo $lemon;
                            $countforLemon++;
                            break;
                        case 5: //case 5 prints orange
                            echo $orange;
                            $countforOrange++;
                            break;
                        case 6: //case 6 prints pear
                            echo $pear;
                            $countforPear++;
                            break;
                        case 7: //case 7 prints watermelon
                            echo $watermelon;
                            $countforWatermelon++;
                            break;
                    }
                }
                echo '<input type="submit" value="SPIN"> <br>';

                //if any two fruits then the user wins and the credit is updated according to the following code.
                if ($countforCherry == 2 || $countforApple == 2 || $countforGrapes == 2 || $countforLemon == 2 || $countforOrange == 2 || $countforPear == 2 || $countforWatermelon == 2) {
                    $updatedCredit = $credit + ($bet * 2);
                    echo '<h3 class ="won">Congratulations...YOU WON!! Your credit is updated accordingly!</h3>';
                }//if all of the fruits matches then the user wins and the credit is updated according to the following code.
                elseif ($countforCherry == 3 || $countforApple == 3 || $countforGrapes == 3 || $countforLemon == 3 || $countforOrange == 3 || $countforPear == 3 || $countforWatermelon == 3) {
                    $updatedCredit = $credit + ($bet * 10);
                    echo '<h3 class ="lost">Congratulations..YOU WON!! Your credit is updated accordingly!</h3>';
                } //if no fruit matches then the user loses and the credit is updated according to the follwing code.
                else {
                    $updatedCredit = $credit - $bet;
                    echo'<h3>Sorry, try again!! Your credit is deducted accordingly! </h3>';
                }
            }
            ?>
            <!-- printing the name, bet with the value the user entered and credit with the unchanged value.-->
            <div>
                <b> <label class="input" >Name:</label></b><input type="text" class="input" value="<?php echo $name ?>" readonly> <br><br>
                <b><label>Your bet:</label></b> <input class="width" value="<?php echo $bet ?>" readonly> &nbsp;&nbsp;
                <b> <label>Credit: </label> </b> <input type="text" class="width" value="<?php echo $updatedCredit ?>" readonly>  
            </div>

        </main>
    </body>
</html>
