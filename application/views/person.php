<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="submitperson.php" method="post">
            PERSON DETAILS<br>
            ENTER FIRST NAME : <input type="text" name="fname"><br>
            ENTER LAST NAME : <input type="text" name="lname"><br>
            ENTER YOUR ADDRESS : LINE1 <input type="text" name="addl1"><br>
                                 LINE2 <input type="text" name="addl2"><br>
                                 CITY <input type="text" name="city"><br>
                                 STATE <input type="text" name="state"><br>
                                 PIN <input type="text" name="pin"><br>
            <input type="submit" name="SUBMIT"><br>
            
        </form>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
