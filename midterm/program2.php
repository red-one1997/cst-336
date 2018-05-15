<!DOCTYPE html>
<html>
    <head>
        <title>Program 2 midterm</title><br></br><br></br>
        <link href="Rules.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

    </head>
    <body>
        
        <?php
            $bdd= new PDO("mysql:host=localhost; dbname=midterm", 'ratlati', '');
        ?>
        
        <div id="header">
            <h1>Midterm : Program 2</h1>
        </div>
            
         <?php
            $reponse = $bdd->query('SELECT firstName, lastName FROM m_students WHERE gender = "F" ORDER BY lastName ASC');
            
            echo "<br><b>List of all female students </b><br>" ;
            while ($donnees = $reponse->fetch())
            {
                echo $donnees['firstName'] . "-   " ;
                echo $donnees['lastName'] . "</br>"; 
            }
            
            $reponse = $bdd->query('SELECT firstName, lastName, grade FROM m_students NATURAL JOIN m_gradebook WHERE grade < 50 ORDER BY grade ASC');
            
             echo "<br><b>List of students that have assignments with a grade lower than 50 </b><br>" ;
            while ($donnees = $reponse->fetch())
            {
                echo $donnees['firstName'] . "   " ;
                echo $donnees['lastName'] . "   " ;
                echo $donnees['grade'] . "</br>"; 
            }
        
           $reponse = $bdd->query('SELECT title, dueDate FROM m_assignments WHERE NOT EXISTS (SELECT assignmentId FROM m_gradebook WHERE m_assignments.assignmentId = m_gradebook.assignmentId)');
            
            echo "<br><b>List of assignments that have not been graded </b><br>" ;
            while ($donnees = $reponse->fetch())
            {
                echo $donnees['title'] . "   ";
                echo $donnees['dueDate'] . "</br>";
            }
            $reponse->closeCursor(); 
            
            $reponse = $bdd->query('SELECT firstName,lastName,title,grade FROM m_students NATURAL JOIN m_gradebook NATURAL JOIN m_assignments ORDER BY lastName, title ASC');
            
            echo "<br><b>Gradebook  </b><br>" ;
            while ($donnees = $reponse->fetch())
            {
                echo $donnees['firstName'] . "   " ;
                echo $donnees['lastName'] . "   " ;
                echo $donnees['title'] . "   " ;
                echo $donnees['grade'] . "</br>"; 
            }
            $reponse->closeCursor(); 
            
            $reponse = $bdd->query('SELECT studentId, firstName, lastName, avg(grade) as average FROM m_gradebook NATURAL JOIN m_students GROUP BY lastName ORDER BY average DESC');
            
            echo "<br><b>List of average grade per student (average of the three assignments) </b><br>" ;
            while ($donnees = $reponse->fetch())
            {
                echo $donnees['studentId'] . "   " ;
                echo $donnees['firstName'] . "   " ;
                echo $donnees['lastName'] . "   " ;
                echo $donnees['average'] . "</br>";
            }
            $reponse->closeCursor(); 
        ?>
    </body>
</html>
