<?php

 $servername = "localhost";
 $dBusername = "root";
 $password = "";
 $dBname = "registration";

 $conn = mysqli_connect($servername,  $dBusername, $password,  $dBname);


 if (!$conn) {
     die("connection failed :". mysqli_connect_error());
 }