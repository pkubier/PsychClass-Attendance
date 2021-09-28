<?php
$host = "localhost"; /* Host name */
$user = "patrripg_pk"; /* User */
$password = "[a%FeL0DW#ZK"; /* Password */
$dbname = "patrripg_psychology"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
?>