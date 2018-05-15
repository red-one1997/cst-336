<!DOCTYPE html>
<html>
    <head>
        <title>Scheduler</title>
    </head>
    <body>
        Invitation Link <input type="text" id="invLink" size="50" />   
        <br/>
        <br/>
        <table style="width:100%">
            <tr>
                <th>Date</th>
                <th>Start Time</th>
                <th>Duration</th>
                <th>Booked by</th>
                <th>Duration</th>
                <th><a href="url">Add Multiple Time Slots</a></th>
            </tr>
            
            <?php
                $host = "localhost";
                $port = 3306;
                $dbname = "final";
                $username = "ratlati";
                $password = "";
                
                $dbConn = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $username, $password);
                $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = " SELECT * FROM appointments WHERE id = :id ";
                
                $stmt = $dbConn -> prepare ($sql);
                $stmt -> execute (  array ( ':id' => '1')  );
                
                if ($stmt->rowCount() > 0) {
                    while ($row = $stmt -> fetch())  {
                        echo "<tr>";
                        echo "<td>".$row['date']."</td>";
                        echo "<td>".$row['start']."</td>";
                        echo "<td>".$row['end']."</td>";
                        if($row['booker']=="Not Booked"){
                            echo "<td><button type=""button"">Details!</button><button type=""button"">X Delete</button></td>";
                        }
                        else{
                            echo "<td><button type=""button"">Details!</button><button type=""button"">X Cancel</button></td>";
                        }
                        echo "</tr>";
                    }
                }
                else {
                    echo "No data found";
                }
            ?>
        </table>
    </body>