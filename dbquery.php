<?php
//Written by Will Lunden (BEC V) 10/31/2013
$mysqli = new mysqli("192.168.1.227","root","w0lfg4ng","filelist");
if($mysqli->connect_errno)
{
echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$result = $mysqli->query("SELECT name,value FROM filelist_variablevalue");

 while ($row = $result->fetch_assoc()) {
        printf ("%s (%s)\n", $row["name"], $row["value"]);
    }
?>