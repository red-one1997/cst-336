<!DOCTYPE html>
<html>
    <head>
        <title>Salon</title>
    </head>
    <body>
        <input type="text" id="search" size="50" />   
         <input type="submit", value="Search">
        <br/>
        <br/>
        <table style="width:100%">
            <tr>
                <th>Code</th>
                <th>Available from - to</th>
                <th>Type</th>
                <th><a href="url">Archived</a></th>
            </tr>
            
            <?php
                $host = "localhost";
                $port = 3306;
                $dbname = "final";
                $username = "ratlati";
                $password = "";
                
                $dbConn = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $username, $password);
                $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = " SELECT * FROM Salon WHERE 1 ";
                
                $stmt = $dbConn -> prepare ($sql);
                $stmt -> execute (  array ( ':id' => '1')  );
                
                if ($stmt->rowCount() > 0) {
                    while ($row = $stmt -> fetch())  {
                        echo "<tr>";
                        echo "<td>".$row['Code']."</td>";
                        echo "<td>".$row['Available from']."</td>";
                        echo "<td>".$row['Available to']."</td>";
                        echo "<td>".$row['Type']."</td>";
                        if($row['booker']=="Not Booked"){
                            echo '<td><button type=""button"">Edit</button><button type=""button"">Archive</button></td>';
                        }
                        else{
                            echo '<td><button type=""button"">Edit</button><button type=""button"">Archive</button></td>';
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