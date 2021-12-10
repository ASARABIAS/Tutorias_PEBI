
<?php
session_start();
require_once 'conection.php';

if(isset($_SESSION['usuario'])){
   $name_career=$_POST['name_career'];
   $id_login = $_SESSION['id_user'];
   $name_course=$_POST['name_course'];
   $id_carrera=$_POST['programas'];
   $rol=$_POST['rol'];
   $nombrec=$_POST['name_completo'];
   $emailc=$_POST['email_completo'];
   $passwordc=$_POST['password_completo'];
   $nombret=$_POST['name_tutoring'];
   $id_docentet=$_POST['docentes'];
   $id_courset=$_POST['asig_tutoring'];
   $descriptiont=$_POST['description'];
   $opcionh=$_POST['opcion_horario'];
   $link=$_POST['link'];
   $salon=$_POST['salon'];

   
   if(isset($name_career)){
    $sql = "INSERT INTO career(id,name,id_administrator) VALUES (default,'$name_career', '$id_login')";
        
    if (mysqli_query($conn, $sql)) {
          header("location:../../administrator.php");
    } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      } 
    }else if(isset($name_course)){ 
            $sq = "INSERT INTO course(id,name,id_career) VALUES (default,'$name_course', '$id_carrera')";
            if (mysqli_query($conn, $sq)) {
              header("location:../../administrator.php");
            } else {
                    echo "Error: " . $sq . "<br>" . mysqli_error($conn);
            }         
    }else if(isset($nombrec)){ 
      if($rol=="docente"){
       
        $sq = "INSERT INTO user(id,email,password) VALUES (default,'$emailc', '$passwordc')"; 
        if (mysqli_query($conn, $sq)) {
          $us= $conn->query("SELECT * FROM user WHERE `email` LIKE '$emailc' ");
          $idc = $us->fetch_assoc()['id'];
          $sql = "INSERT INTO teacher(id,name,id_user) VALUES (default,'$nombrec', '$idc')";
          if (mysqli_query($conn, $sql)) {
            header("location:../../administrator.php");
          } else {
                  echo "Error: " . $sq . "<br>" . mysqli_error($conn);
          } 
         
        } else {
                echo "Error: " . $sq . "<br>" . mysqli_error($conn);
        } 
      
      }else if($rol=="estudiante"){
        $sq = "INSERT INTO user(id,email,password) VALUES (default,'$emailc', '$passwordc')"; 
        if (mysqli_query($conn, $sq)) { 
         
        } else {
                echo "Error: " . $sq . "<br>" . mysqli_error($conn);
        } 
        $us= $conn->query("SELECT * FROM user WHERE `email` LIKE '$emailc' ");
          $idc = $us->fetch_assoc()['id'];
          $sql = "INSERT INTO student(id,name,id_user) VALUES (default,'$nombrec', '$idc')";
          if (mysqli_query($conn, $sql)) {
            header("location:../../administrator.php");
          } else {
                  echo "Error: " . $sq . "<br>" . mysqli_error($conn);
          }
      }
      }else if(isset($nombret)){
        echo "entro";
        $sql = "INSERT INTO tutoring(id,name,description,id_teacher,id_course) VALUES (default,'$nombret','$descriptiont', '$id_docentet','$id_courset')";   
          if (mysqli_query($conn, $sql)) {
            header("location:../../administrator.php");
              } else {
                      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              } 
                $us= $conn->query("SELECT * FROM tutoring WHERE `name` LIKE '$nombret' ");
               $idt = $us->fetch_assoc()['id'];
               $sq= "INSERT INTO schedule(id,opening_date,closing_date,url_calendar,salon,id_tutoring) VALUES (default,NOW(),'null', '$link','null','$idt')";   
             if (mysqli_query($conn, $sq)) {
                  header("location:../../administrator.php");
                } else {
                         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                 } 
      }  
}    
  



mysqli_close($conn);