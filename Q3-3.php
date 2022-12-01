<?php
    $myfile = fopen("Q3-3.txt", "w");
    $txt = "Hi, I am Rahul Gimhavanekar, Roll no. A014 from batch 1 & currently pursuing MCA from MPSTME";
    fwrite($myfile, $txt);
    fclose($myfile);
?>
    
    