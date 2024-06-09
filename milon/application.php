<?php
include "header.php";
include "dbconnect.php";

$sql="SELECT * FROM list";
$result=$conn->query($sql);
?>      
<div class="apply">
    <h3 align="center">Application form</h3>
    <form action="application_action.php" method="POST">
        <label>Name</label>
        <input type="text" name="name" placeholder=" Enter Your name">
        <label>District</label>
        <input type="text" name="district" placeholder=" Enter Your district">
        <label>Phone</label>
        <input type="text" name="phone" placeholder="Enter Your phone">
        <label>Amount</label>
        <input type="text" name="amount" placeholder="Enter Your amount">
        <label>Choose Mangoes</label>
        <select name="choose_mangoes">
            <option value="1">Amrupali</option>
            <option value="2">Harivanga</option>
            <option value="3">Nengra</option>
            <option value="4">Gopalvog</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</div>
<?php
include "footer.php";
?>
