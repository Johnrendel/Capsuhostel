<?php
session_start();
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CAPSU Pilar Hostel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Capsu logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- CSS File -->
  <link href="assets/css/1style.css" rel="stylesheet">
  <link href="assets/css/confirm.css" rel="stylesheet">
  <link href="assets/css/1modals.css" rel="stylesheet">
 


</head>

<?php
if (isset($_POST['Submit'])) {
    $Name = $_POST['fname'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];
    $RoomType = $_POST['TypeofRoom'];
    $Bed = $_POST['BedType'];
    $NoofRoom = $_POST['NoofRoom'];
    $Meal = $_POST['meal'];
    $cin = $_POST['cin'];
    $cout = $_POST['cot'];

    if($Name == "" || $Email == "" || $Phone == ""){
        echo "<script>swal({
            title: 'Fill the proper details',
            icon: 'error',
        });
        </script>";
    }
    else{
        $sta = "NotConfirm";
        $sql = "INSERT INTO webbooking(Name,Email,Phone,RoomType,Bed,NoofRoom,Meal,cin,cout,stat,nodays) VALUES ('$Name','$Email','$Phone','$RoomType','$Bed','$NoofRoom','$Meal','$cin','$cout','$sta',datediff('$cout','$cin'))";
        $result = mysqli_query($conn, $sql);
    }
}

?>
<?php


        $sql ="Select * from webbooking";
        $re = mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($re))
            {
                $id = $row['id'];
                $name = $row['Name'];
                $email = $row['Email'];
                $phone = $row['Phone'];
                $roomType = $row['RoomType'];
                $bed = $row['Bed'];
                $noofRoom = $row['NoofRoom'];
                $meal = $row['Meal'];
                $Cin = $row['cin'];
                $Cout = $row['cout'];
                $Noofday = $row['nodays'];
                $Stat = $row['stat'];
            }
?>
<body>
    <div class="Confirmation">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d">
                        <h3 class="title-d">Quick Summary</h3>
                      </div>
                    </div>
                  </div>

                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                        <strong>Fullname:</strong>
                        <span><?php echo $name ?></span>
                      </li>

                      <li class="d-flex justify-content-between">
                        <strong>Email:</strong>
                        <span><?php echo $email ?></span>
                      </li>

                      <li class="d-flex justify-content-between">
                        <strong>Phone No.:</strong>
                        <span><?php echo $phone ?></span>
                      </li>

                      <li class="d-flex justify-content-between">
                        <strong>Type of Rooms:</strong>
                        <span><?php echo $roomType ?></span>
                      </li>

                      <li class="d-flex justify-content-between">
                        <strong>Bedding Type:</strong>
                        <span><?php echo $bed ?></span>
                      </li>

                      <li class="d-flex justify-content-between">
                        <strong>No. of Rooms:</strong>
                        <span><?php echo $noofRoom ?></span>
                      </li>

                      <li class="d-flex justify-content-between">
                        <strong>Type of Meal:</strong>
                        <span><?php echo $meal ?></span>
                      </li>

                      
                      <li class="d-flex justify-content-between">
                        <strong>Check in:</strong>
                        <span><?php echo $Cin ?></span>
                      </li>

                      
                      <li class="d-flex justify-content-between">
                        <strong>Check Out:</strong>
                        <span><?php echo $Cout ?></span>
                      </li>

                    </ul>
                  </div>
                  <div class="btn-container">
                  <?php
                            if($Stat == "Confirm")
                            {
                                echo " ";
                            }
                            else
                            {
                                echo "<a href='confirmationreservation.php?id=". $id ."'><button class='btn'>Confirm Reservation</button></a>";
                            }
                        ?>
              <button class="btn" id="openModal">Pay & Confirm</button>
            <a href="deleteconfirmation.php?id=<?php echo $id ?>"><button class="btn">Cancel</button></a>
                </div>

    </div>


    <div id="modal" class="modal">
        <div class="modal-content">
            <span id="closeModal" class="close">&times;</span>
                <img src="assets/img/gcash1.png" alt="" class="img-a" width="300" height="300">
                    <img id="qrCode" src="assets/img/qr.png" class="image-container">
                <input type="text" id="refNo" name="refNo" placeholder="Ref. No.">
                <button id="confirmBtn">Confirm</button>
        </div>
    </div>

  <script src="assets/js/modals.js"></script>
</body>

