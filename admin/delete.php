<?php
include "db.php";
    try {
    $dbh = new PDO('mysql:host=localhost;dbname=patrripg_psychology', $user, $password);
    $stmt = $dbh->prepare("TRUNCATE CRN10688");
    $stmt->execute();
    echo 'Attendance entries have been deleted.';
    } catch (PDOException $e) {
    print "Database Error: " . $e->getMessage();
    die();
    }
?>