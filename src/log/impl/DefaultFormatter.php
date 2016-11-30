<?php

namespace Plancke\HypixelPHP\log\impl;

use Plancke\HypixelPHP\log\Formatter;

class DefaultFormatter extends Formatter {

    public function formatLine($line) {
        return '[' . date("H:i:s") . '] ' . $line;
    }

}