<?php

$line = fread(STDIN,4096);
fwrite(STDOUT, "$line world");

?>