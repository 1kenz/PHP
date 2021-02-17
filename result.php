<?php 
    if (isset($_GET['submit'])) {
        // echo "GET Value catched";
        $sended=$_GET['name'];
        echo "$sended";
    }
    elseif (isset($_POST['submit'])) {
        // echo "POST Value catched";
        $sended=$POST['name'];
        echo "$sended";
    }
    else {
        echo "Nothing...";
    }

?>