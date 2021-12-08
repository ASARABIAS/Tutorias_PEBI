<?php
session_start();
require_once 'conection.php';

if (isset($_POST)) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `user` WHERE `email` LIKE '$email' AND `password` LIKE '$password'";
    //$sql="SELECT * FROM `account` WHERE `email` LIKE 'asarabias@unicesar.edu.co' AND `password` LIKE '12345'";
    $login = mysqli_query($conn, $sql);

    if ($login && mysqli_num_rows($login) == 1) {

        $id_login = $login->fetch_assoc()['id'];

        $person = $conn->query("SELECT * FROM `student` WHERE `user_id_user` LIKE '$id_login' ");

        $name="";
        if ($person) {
            $name=$person->fetch_assoc()['name'];
        }else{
            $person = $conn->query("SELECT * FROM `administrator` WHERE `id_user` LIKE '$id_login' ");
            if($person){
                $name=$person->fetch_assoc()['name'];
            }else{
                $person = $conn->query("SELECT * FROM `teacher` WHERE `id_user` LIKE '$id_login' ");
                $name=$person->fetch_assoc()['name'];
            }
        }


        $_SESSION['usuario'] = [
            'id_user' => $login->fetch_assoc()['id'],
            'email' => $email,
            'password' => $password,
            'name' => $name,
        ];

        header('location: ../../student.php');
    } else {
        $_SESSION['error_login'] = "login incorrecto";
        echo '<script type="text/javascript">
            alert("No registrado");
            window.location.href="../../index.php";
            </script>';
    }
}
mysqli_close($conn);
