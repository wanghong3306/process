<?php

use Symfony\Component\Process\Process;

//$cmd = 'php -S 0.0.0.0:8080 -t \website';
$cmd = ['php', '-S', '0.0.0.0:8080', '-t', '\website'];
$process = new Process($cmd);
$process->setIdleTimeout(0)
    ->setTimeout(0)
    ->run(function ($type, $buffer) {
    if (Process::ERR === $type) {
        echo 'ERR > ' . $buffer;
    } else {
        echo 'OUT > ' . $buffer;
    }
});

