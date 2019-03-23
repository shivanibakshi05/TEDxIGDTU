<?php
session_start();
$servername = "localhost";
$username ="tedxigdtu_tedxigdturoot";
$password ="tedxigdturoot";
$dbname ="tedxigdtu_tedx";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $stmt = $conn->prepare("INSERT INTO userdetails (email,name,profession,organisation,question1,question2,question3,question4) 
    VALUES (:email,:name,:profession,:organisation,:question1,:question2,:question3,:question4)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':profession', $profession);
    $stmt->bindParam(':organisation', $organisation);
    $stmt->bindParam(':question1', $question1);
    $stmt->bindParam(':question2', $question2);
    $stmt->bindParam(':question3', $question3);
    $stmt->bindParam(':question4', $question4);

    $email=$_POST["email"];
    $name=$_POST["name"];
    $profession=$_POST["optradio"];
    $organisation=$_POST["oname"];
    $question1=$_POST["optradio1"];
    $question2=$_POST["q2"];
    $question3=$_POST["q3"];
    $question4=$_POST["q4"];
    if( $stmt->execute()){
        $_SESSION['varname'] = "success";
        echo "<script> location.href='ticket.php'; </script>";
        exit;
    }
    else
     {
        $_SESSION['varname'] = "failiure";
       echo "<script> location.href='ticket.php'; </script>";
        exit;
     }   
    }

catch(PDOException $e)
    {
     $_SESSION['varname'] = "failiure";
       echo "<script> location.href='ticket1.php'; </script>";
        exit;
    }

$conn = null;

?>
