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
        <form action="<?php echo base_url();?>index.php/home/insert_table1"  method="post">
        Enter Your Name: <input type="text" name ="fname"><br>
        Enter Your Marks: <input type="text" name="marks"><br>
        <input type="submit" value="submit"><br>
        <a href="homepage" >HOMEPAGE</a>
        <a href="workshop1" >workshop</a>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
