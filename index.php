<!DOCTYPE html>

<html>
    <head>
    
    </head>
    <body>
        
        <?php
            
            $db = new mysqli("51.123.43.245", "admin", "123456", "quiz");
            
            $sqlOne = "SELECT students.name, students.last_name, test.date FROM students_has_test JOIN students ON students.id = students_has_test.students_id JOIN test ON test.id = students_has_test.test_id";

        
            //WYPISANIE PIERWSZEGO ZAPYTANIA
            if($res = $db->query($sqlOne))
            {
                while($row = $res->fetch_array())
                {
                    echo '
                        <p>' .$row["name"] $row["last_name"] $row["date"]. '</p>
                    ';
                }
            }
        
            
            $db-close();
        ?>
        
    </body>
</html>