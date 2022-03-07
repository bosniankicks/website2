<?php
if($_POST["Message"]) {
mail("wloosnp@gmail.com", "Lawn Care Submission",
$_POST["Insert Your Message"]. "From:");
}
?>