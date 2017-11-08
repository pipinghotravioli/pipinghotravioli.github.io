<?php
 header("Location: thankyou.html");
 $path = 'test.txt';

 if (isset($_POST['field1'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['field1']. "\r\n";
    fwrite($fh,$string); // Write information to the file
    fclose($fh);
     // Close the files

 }
?>S
