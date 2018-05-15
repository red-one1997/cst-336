<!DOCTYPE html>

<?php
     
        function card(){
        $cards = array();
        $cards[] = array('id' => 0, 'type' => "club", 'val' => 1);
        $cards[] = array('id' => 1, 'type' => "club", 'val' => 2);
        $cards[] = array('id' => 2, 'type' => "club", 'val' => 3);
        $cards[] = array('id' => 3, 'type' => "club", 'val' => 4);
        $cards[] = array('id' => 4, 'type' => "club", 'val' => 5);
        $cards[] = array('id' => 5, 'type' => "club", 'val' => 6);
        $cards[] = array('id' => 6, 'type' => "club", 'val' => 7);
        $cards[] = array('id' => 7, 'type' => "club", 'val' => 8);
        $cards[] = array('id' => 8, 'type' => "club", 'val' => 9);
        $cards[] = array('id' => 9, 'type' => "club", 'val' => 10);
        $cards[] = array('id' => 10, 'type' => "club", 'val' => 11);
        $cards[] = array('id' => 11, 'type' => "club", 'val' => 12);
        $cards[] = array('id' => 12, 'type' => "club", 'val' => 13);
        $cards[] = array('id' => 13, 'type' => "diamond", 'val' => 1);
        $cards[] = array('id' => 14, 'type' => "diamond", 'val' => 2);
        $cards[] = array('id' => 15, 'type' => "diamond", 'val' => 3);
        $cards[] = array('id' => 16, 'type' => "diamond", 'val' => 4);
        $cards[] = array('id' => 17, 'type' => "diamond", 'val' => 5);
        $cards[] = array('id' => 18, 'type' => "diamond", 'val' => 6);
        $cards[] = array('id' => 19, 'type' => "diamond", 'val' => 7);
        $cards[] = array('id' => 20, 'type' => "diamond", 'val' => 8);
        $cards[] = array('id' => 21, 'type' => "diamond", 'val' => 9);
        $cards[] = array('id' => 22, 'type' => "diamond", 'val' => 10);
        $cards[] = array('id' => 23, 'type' => "diamond", 'val' => 11);
        $cards[] = array('id' => 24, 'type' => "diamond", 'val' => 12);
        $cards[] = array('id' => 25, 'type' => "diamond", 'val' => 13);
        $cards[] = array('id' => 26, 'type' => "heart", 'val' => 1);
        $cards[] = array('id' => 27, 'type' => "heart", 'val' => 2);
        $cards[] = array('id' => 28, 'type' => "heart", 'val' => 3);
        $cards[] = array('id' => 29, 'type' => "heart", 'val' => 4);
        $cards[] = array('id' => 30, 'type' => "heart", 'val' => 5);
        $cards[] = array('id' => 31, 'type' => "heart", 'val' => 6);
        $cards[] = array('id' => 32, 'type' => "heart", 'val' => 7);
        $cards[] = array('id' => 33, 'type' => "heart", 'val' => 8);
        $cards[] = array('id' => 34, 'type' => "heart", 'val' => 9);
        $cards[] = array('id' => 35, 'type' => "heart", 'val' => 10);
        $cards[] = array('id' => 36, 'type' => "heart", 'val' => 11);
        $cards[] = array('id' => 37, 'type' => "heart", 'val' => 12);
        $cards[] = array('id' => 38, 'type' => "heart", 'val' => 13);
        $cards[] = array('id' => 39, 'type' => "spade", 'val' => 1);
        $cards[] = array('id' => 40, 'type' => "spade", 'val' => 2);
        $cards[] = array('id' => 41, 'type' => "spade", 'val' => 3);
        $cards[] = array('id' => 42, 'type' => "spade", 'val' => 4);
        $cards[] = array('id' => 43, 'type' => "spade", 'val' => 5);
        $cards[] = array('id' => 44, 'type' => "spade", 'val' => 6);
        $cards[] = array('id' => 45, 'type' => "spade", 'val' => 7);
        $cards[] = array('id' => 46, 'type' => "spade", 'val' => 8);
        $cards[] = array('id' => 47, 'type' => "spade", 'val' => 9);
        $cards[] = array('id' => 48, 'type' => "spade", 'val' => 10);
        $cards[] = array('id' => 49, 'type' => "spade", 'val' => 11);
        $cards[] = array('id' => 50, 'type' => "spade", 'val' => 12);
        $cards[] = array('id' => 51, 'type' => "spade", 'val' => 13);
        return $cards;
    }
     
        function afficherSeat($_hands){
        global $cards;
        global $compte1;
        global $compte2;
        global $gagnant;
        $compte1 = 0;
        $compte2 = 0;
        foreach($_hands as $hand){
            echo '<span class="name">'. $hand['name'] .'</span>'; 
            echo '
            <div class="seat">
                <div class="clear">';
                    foreach($hand['cards'] as $cardID){
                        foreach($cards as $card){
                        if($card['id']==$cardID){
                        echo '<img src="cards/'.$card['type'].'s/'.$card['val'].'.png">';
                        if ($card['id'] == 0 OR $card['id'] == 14 OR $card['id'] == 26 OR $card['id'] == 39)
                        {
                            $compte1++;
                        }
                        else if ($card['id'] == 12 OR $card['id'] == 25 OR $card['id'] == 38 OR $card['id'] == 51)
                        {
                            $compte2++; 
                        }
                    }
                }
            }
                    if ($compte1 > $compte2)
                    {
                        $gagnant = 'The Aces win !';
                    }
                    else if($compte1 < $compte2)
                    {
                        $gagnant = 'The Kings win !';
                    }
                    else
                    {
                        $gagnant = 'Tie - There is no gagnant';
                    }
                echo '
                </div>
            
            </div>';
        }

        echo '</div>';
    }
    
    
        function mains($_cards){
        $curCard = 0;
        $value = 0; 
        shuffle($_cards);
        $hands = array();
        
        
        if ($_GET['row']*$_GET['column']<39)
        {
            for($i=0; $i< $_GET['row'];$i++){
                $hands[$i] = array();
                $hands[$i]['size'] = $_GET['column'];
                $hands[$i]['cards'] = array();
                $index = 0;
                while($index<$hands[$i]['size']){
                $hands[$i]['cards'][$index] = $_cards[$curCard]['id']; 
                $value += $_cards[$curCard]['val'];
                $index++;
                $curCard++;
                }
            }
         return $hands;
        }
        
        else{
             echo 'The product of the columns and the rows cannot exceed 39 ! Try again  <br>';
            return $hands;
    }
}
    
   
    
    
?>
<html>
    <head>
        <title>Midterm</title>
         <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
        <style>
            body{
                text-align: center;
                font-family: 'Source Sans Pro', sans-serif;
                background-color: yellow;
            }
            h1 {
                border-style: solid;
                border-width: 5px;
            }
        </style>
    </head>
    <body>
        <?php
            $bdd= new PDO("mysql:host=localhost; dbname=midterm", 'ratlati', '');
        ?>
        
        <div id="header">
            <h1>Midterm : Program 1</h1>
            <h1>Aces vs Kings</h1>
        </div>
        
        <form action="program1.php">
        Number of Rows: 
        <input type="text" name="row" value="5"><br>
        <br>
        Number of Columns: 
        <input type="text" name="column" value="5"><br>              
        <br>
        Suit to omit: <select name="omitSuit">
                 		         <option value="1">Hearts</option>
                 		         <option value="2">Clubs</option>
                 		         <option value="3">Diamonds</option>
                 		         <option value="4">Spades</option>
                 		 </select><br><br>
            
            <input type="submit">
        </form> <br><br>
        
        <?php
        $cards = card();
        $hands = mains($cards);
        afficherSeat($hands);                  
        
        echo 'Aces :' . $compte1 .'<br>' ;
        echo 'Kings :' . $compte2 .'<br>' ;
        
        echo $gagnant ;
        ?>
            
         
    </body>
</html>