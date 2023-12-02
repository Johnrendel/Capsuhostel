<?php

include 'config.php';

$id = $_GET['id'];

$sql ="Select * from webbooking where id = '$id'";
$re = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($re))
{
	$Name = $row['Name'];
    $Email = $row['Email'];
    $Phone = $row['Phone'];
    $RoomType = $row['RoomType'];
    $Bed = $row['Bed'];
    $NoofRoom = $row['NoofRoom'];
    $Meal = $row['Meal'];
    $cin = $row['cin'];
    $cout = $row['cout'];
    $noofday = $row['nodays'];
    $stat = $row['stat'];
}

    if($stat == "NotConfirm")
{
    $st = "Confirm";

    $sql = "UPDATE webbooking SET stat = '$st' WHERE id = '$id'";
    $result = mysqli_query($conn,$sql); 


    if ($result) {
        $sql = "INSERT INTO roombook(Name,Email,Phone,RoomType,Bed,NoofRoom,Meal,cin,cout,stat,nodays) VALUES ('$Name','$Email','$Phone','$RoomType','$Bed','$NoofRoom','$Meal','$cin','$cout','$stat',datediff('$cout','$cin'))";
        $result = mysqli_query($conn,$sql);

        header("Location:index.php");
    }
}