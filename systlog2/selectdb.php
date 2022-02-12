<?php
$link = mysqli_connect("localhost", "root", "", "ensat");
$result = mysqli_query($link, "SELECT DATABASE()");
$row = mysqli_fetch_row($result);
printf("Default database is : <b> %s.</b>", $row[0]);

mysqli_select_db($link, "ginf1");

$result = mysqli_query($link, "SELECT DATABASE()");
$row = mysqli_fetch_row($result);
printf("<br/>Database is changed to : <b>%s.</b>", $row[0]);

