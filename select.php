<?php

    // 1
    $con =  mysqli_connect("localhost","root","","lms");

    // 2 
    // $sql = "INSERT INTO `category`(`name`,`email`) VALUES ('$category' , '$email') ";
    // $sql = "DELETE FROM `category` WHERE `id` = $category ";
    $sql = "SELECT * FROM `category`"; 
    $myq =  mysqli_query($con,$sql);
    $numrows = mysqli_num_rows( $myq );
    if(mysqli_num_rows( $myq ) > 0){

        $all = [];
    
        // while($data = mysqli_fetch_assoc($myq)){
        //     $all[] = $data;
        // }

        // for($i=0;$i<$numrows;$i++){
        //     $data[$i] =    mysqli_fetch_assoc($myq);

        // }

     echo "<pre>";
     print_r($all);

    }else{
        echo "empyt";
    }




?>


