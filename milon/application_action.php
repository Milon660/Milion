<?php
include "dbconnect.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name=$_POST["name"];
    $district=$_POST["district"];
    $phone=$_POST["phone"];
    $amount=$_POST["amount"];
    $choose_mangoes=$_POST["choose_mangoes"]; 
	
	echo $name, $district, $phone, $amount, $choose_mangoes;
    
    $sql="INSERT INTO form (id,name, district, phone, amount, choose_mangoes)
          VALUES (NULL,'$name', '$district', '$phone', '$amount', '$choose_mangoes')";
    $result=$conn->query($sql);
    if($result) {
        header("location: applicant_list.php");
    } else {
        echo "Application failed";
    }
}
?>
