
<?php
session_start();
require_once 'conection.php';

if (isset($_SESSION['usuario'])) {
  
  $nombrecx = $_POST['name_completox'];
  $idencx = $_POST['identificacionx'];
  $emailcx = $_POST['email_completox'];
  $id_carreraex = $_POST['programas_ex'];
  $passwordcx = $_POST['password_completox'];
 
  $idestu = $_POST['identificacions'];
  $idestue = $_POST['identificacione'];

   if (isset($nombrecx) ){
     $sq = "INSERT INTO user(id,email,password) VALUES (default,'$emailcx', '$passwordcx')";
     if (mysqli_query($conn, $sq)) {
     } else {
       echo "Error: " . $sq . "<br>" . mysqli_error($conn);
     }
     $us = $conn->query("SELECT * FROM user WHERE `email` LIKE '$emailcx' ");
     $idc = $us->fetch_assoc()['id'];
     $sql = "INSERT INTO student(id,identificacion,name,id_career,id_user) VALUES (default,'$idencx','$nombrecx', '$id_carreraex', '$idc')";
     if (mysqli_query($conn, $sql)) {
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $usa = $conn->query("SELECT * FROM student WHERE `identificacion` LIKE '$idencx' ");
     $idca = $usa->fetch_assoc()['id'];
     $vara=$_SESSION['idst'];
     $sqla = "INSERT INTO studens_has_tutoring(id,id_student,id_tutoring) VALUES (default,'$idca','$vara')";
     if (mysqli_query($conn, $sqla)) {
     } else {
       echo "Error: " . $sqla . "<br>" . mysqli_error($conn);
     }
   }else if(isset($idestue)){
    $use= $conn->query("SELECT * FROM student WHERE `identificacion` LIKE '$idestue' ");
     $idd = $use->fetch_assoc()['id'];
    $sqle=$conn->query("DELETE FROM studens_has_tutoring WHERE `id_student` LIKE '$idd' ");
    if (mysqli_query($conn, $sqle)) {
    } else {
      echo "Error: " . $sqle . "<br>" . mysqli_error($conn);
    }
   }else{
    $usa = $conn->query("SELECT * FROM student WHERE `identificacion` LIKE '$idestu' ");
    $idca = $usa->fetch_assoc()['id'];
    $vara=$_SESSION['idst'];
    $sqla = "INSERT INTO studens_has_tutoring(id,id_student,id_tutoring) VALUES (default,'$idca','$vara')";
    if (mysqli_query($conn, $sqla)) {
    } else {
      echo "Error: " . $sqla . "<br>" . mysqli_error($conn);
    }
   }
}

mysqli_close($conn);
