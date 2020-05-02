<?php

use Symfony\Component\Process\Process;

//$cmd = 'php -S 0.0.0.0:8080 -t /server/website';
$cmd = ['php', '-S', '0.0.0.0:8080', '-t', '/server/website'];
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

//php bin/process test.php

//php -S 0.0.0.0:8080 -t /server/website 2> >(php a.php) > >(php b.php)

