<?php

$menory_size = memory_get_usage();
$menory_unit = array('Bytes','KB,'MB','GB','TB','PB');
echo 'used Memory : '.round($memory_size/pow(1024,($x=floor(log($memory_size,1024)))),2)''.$memory_unit[$x]."\n";

?>