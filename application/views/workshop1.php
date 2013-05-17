<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
    </head>
    <body>
        WORKSHOP
        
        <a href="homepage" >HOMEPAGE</a>
        <a href="workshop1" >WORKSHOP</a>
        <br>
        <?php
        // put your code here
        
/* @var $results type */
foreach($select as $row)
        {
            
            echo $row->id;
            echo $row->name;
            echo $row->marks;
            echo "<br>";
        }
        ?>
    </body>
</html>
