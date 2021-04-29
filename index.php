<?php

require __DIR__.'/vendor/autoload.php';

use \App\Pix\Payload as Payload;

$obPayload = (new Payload)->setPixKey('chillout1manager@gmail.com');

var_dump($obPayload);