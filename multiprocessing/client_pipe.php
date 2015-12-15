<?php



	$descriptorspec = array(
  	0 => array("pipe", "r"),  // stdin for worker
  	1 => array("pipe", "w"),  // stdout for worker
	);


	$worker = proc_open("php server_pipe.php", $descriptorspec, $pipes);


	if ($worker) {
  		
  		fwrite($pipes[0], "hello");

		while (!feof($pipes[1])) {
    		echo fgets($pipes[1]). "\n";
  			}		 
  		proc_close($worker);
	}



?>