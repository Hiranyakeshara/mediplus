<?php   
  include("db/config.php");
  if(isset($_POST["booknow"]))
  {
      //post all value
      extract($_POST);
      $query = "INSERT INTO `appointments` (`ap_id`, `speciality`,`doctor`, `name`,`time_slot`,`comment`,`date`) VALUES (NULL, '".$speciality."', '".$doctor."','".$name."','".$time_slot."','".$comment."',,'".$date."');";
      mysqli_query($con,$query);
      header("Location: patient_dashboard.php");

  }

?>
