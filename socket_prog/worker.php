
<?php

// socketworker.php
// create TCP socket, bind to 2525
$socket = socket_create(AF_INET, SOCK_STREAM, 0); //IPv4, TCP
socket_bind($socket, '127.0.0.1', 2525);
//listen to socket
socket_listen($socket);
 
 $ret = socket_accept($socket);

while (true) {
  // accept incoming TCP connection
 
  // read the stream
  $input = socket_read($ret, 1024);

  echo $input;

 	 $temp = fopen ("php://stdin","r");
	$line = fgets($temp);
  $output = $line;

  // send result back to client
  socket_write($ret, $output, strlen($output));
  
  //socket_close($ret);
}

?>