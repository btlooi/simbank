<?php
deviceSet("COM1"); 

$serial->confBaudRate(115200); 

// Then we need to open it 
$serial->deviceOpen(); 

// To write into 
$serial->sendMessage("Hello !"); 

// Or to read from 
$read = $serial->readPort(); 

// If you want to change the configuration, the device must be closed 
$serial->deviceClose(); 

?> 