<?php

//echo "hi Shivam"; die;

// socketclient.php
// create a socket, connect to worker using TCP on port 2525
$socket = socket_create(AF_INET, SOCK_STREAM, 0);
$result = socket_connect($socket, '127.0.0.1', 2525);

while(true){

// send Hello to worker
$temp = fopen ("php://stdin","r");
$line = fgets($temp);
//echo $line;	

socket_write($socket, $line, 1024);
// wait for response from worker
$result = socket_read ($socket, 1024);

echo $result;
//socket_close($socket);

}


?>