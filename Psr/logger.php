<?php

namespace Php\Exam;
use Psr\Log\LoggerInterface;

class Logger implements LoggerInterface
{
    function __construct(){
        echo "info".PHP_EOL;
        echo "notice".PHP_EOL;
        echo "notice".PHP_EOL;
        echo "critical".PHP_EOL;
        echo "info".PHP_EOL;
        echo "error".PHP_EOL;
        echo "notice".PHP_EOL;
    }

    public function debug($message, array $context = array() ) {
        echo "notice".PHP_EOL;
    }
}

?>
