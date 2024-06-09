<?php
include "header.php";
include "dbconnect.php";

$sql = "SELECT * FROM form";
$result = $conn->query($sql);
?>

<h1 align="center">User List</h1>
<table>
    <tr>
        <th>SL</th>
        <th>Name</th>
        <th>District</th>
        <th>Phone</th>
        <th>Amount</th>
    </tr>
    <?php
    while($row=$result->fetch_assoc()){
        echo "<tr>"; 
        echo "<td>".$row["id"] ."</td>";   
        echo "<td>".$row["name"] ."</td>";   
        echo "<td>". $row["district"]."</td>";   
        echo "<td>". $row["phone"]."</td>";   
        echo "<td>". $row["amount"]."</td>";   
          
        echo "</tr>"; 
    }
    ?>
<table>
<?php
include "footer.php";
?>   
