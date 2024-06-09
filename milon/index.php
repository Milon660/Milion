<?php
include "header.php";
include "dbconnect.php";

$sql="SELECT * FROM facility";
$result=$conn->query($sql);
?>
<div class="announce">
    <h2> Advertisement</h2>
    <p>Collect Quality Full Naogaon Fresh Mangoes.</p>
    <h2>Facilities:</h2>
	<p> Processing facilities take mangoes that have been harvested and turn them into other products, such as dried mangoes, juice, or pickles. Processing facilities typically have washing stations, sorting machines, peeling machines, pitting machines, and packaging lines.
</p>
	<p> Production facilities include mango orchards, where the trees are grown. Orchards need to have well-drained soil, plenty of sunlight, and a source of water. Mango trees are also susceptible to pests and diseases, so growers need to take steps to protect their crops.</p>
    <div class="gallery">
        <img src="milon4.jpg">
        <img src="milon5.jpg">
    </div>
    <ul>
    <?php
    while($row=$result->fetch_assoc()){
        echo "<li>".$row["description"]."</li>";
    }
    ?>
    </ul>
</div>
<?php
include "footer.php";
?>
