<?php
if(isset($_POST['category'])){
    $category = $_POST['category'];
    // 1
    $con =  mysqli_connect("localhost","root","","lms");

    // 2 
    // $sql = "INSERT INTO `category`(`name`,`email`) VALUES ('$category' , '$email') ";
    // $sql = "DELETE FROM `category` WHERE `id` = $category ";
    $sql = "UPDATE `category` SET `name` = '$category' WHERE  `id` = 1"; 
    mysqli_query($con,$sql);

    if(mysqli_affected_rows($con) == 1){
        echo "success";
    }else{
        echo "error";
    }

}

?>

<form action="index.php" method="post">
    <input type="text" name="category">
    <input type="submit" >
</form>
