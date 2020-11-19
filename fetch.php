<?php

require_once('db.php');
$sql = "SELECT * FROM emp";


$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "Name : ".$row['ename']."<br>";
    echo "Contact : ".$row['contact']."<br>";
    echo "Department : ".$row['dept']."<br>";
    echo "<br>";
}
?>