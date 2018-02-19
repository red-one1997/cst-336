<!DOCTYPE html>
<html>
    <head>
        <title>Keven Siao</title>
    </head>
    <body>
        <?php
        for($i=1; $i<3; $i++){
            ${"randomValue" . $i} = rand(1,10);
        }
        
        $number1= $_POST['number1'];
        $number2= $_POST['number2'];
        
        $submitbutton= $_POST['test'];

        ?>
        
        
        Guess a Number Between 1 and 10: <br>
        <form action="" method="POST">
            Number 1: 
            <input type="text" name="number1">
            <br>
            Number 2: 
            <input type="text" name="number2">

            <br><br>
            <input type="submit" value="Test" name="test"/><br><br>
            <input type="submit" value="Give Up" name="giveup"/>
            <input type="submit" value="Reset" name="reset"/>
        </form>
        
        Result: <br>
        
        <?php
        $test = 0;
        echo "p";
        while($test !=1){
            
        if ($submitbutton){
            if (($number1 > 0) && ($number1 <11)){
                if ($number1 > $randomValue1)
                {
                   echo "Incorrect guess. The correct number is lower than $number1. $randomValue1 Try again<br> ";
                }
                else if ($number1 < $randomValue1)
                {
                    echo "Incorrect guess. The correct number is higher than $number1. $randomValue1 Try again<br>";
                }
                else 
                {
                    echo "$randomValue1 is the correct guess. You got it right.<br>";
                    $test = 1;
                }
            }
                
        }
        
        if ($submitbutton){
            if (($number2 > 0) && ($number2 <11)){
                if ($number2 > $randomValue2)
                {
                   echo "Incorrect guess. The correct number is lower than $number2. $randomValue2 Try again<br>";
                }
                else if ($number2 < $randomValue2)
                {
                    echo "Incorrect guess. The correct number is higher than $number2. $randomValue2 Try again<br>";
                }
                else 
                {
                    echo "$randomValue2 is the correct guess. You got it right.<br>";
                    $test = 1;
                }
            }
                
        }
        }
            
        ?>

        




    </body>
</html>

