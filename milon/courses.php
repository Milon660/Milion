<?php
include "header.php";
include "dbconnect.php";

$sql = "SELECT * FROM list";
$result = $conn->query($sql);
?>

<h1 align="center"> List of Mangoes</h1>
<table>
    <tr>
        <th>SL</th>
        <th>Variety</th>
        <th>Origin</th>
        <th>Color</th>
        <th>Characteristics</th>
    </tr>
    <?php
    while($row=$result->fetch_assoc()){
        echo "<tr>"; 
        echo "<td>".$row["id"] ."</td>";   
        echo "<td>".$row["variety"] ."</td>";   
        echo "<td>". $row["origin"]."</td>";   
        echo "<td>". $row["color"]."</td>";   
        echo "<td>". $row["characteristics"]."</td>";        
        echo "</tr>"; 
    }
    ?>
<table>
<?php
include "footer.php";
?>      
