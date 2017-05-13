<?php

namespace NonBlockingPHP\Command\Runners;

class Exec {

    /**
     * @var string
     */
    protected $returnValue;

    /**
     * @var string
     */
    protected $output;

    /**
     * @return boolean
     */
    public function isEnabled() {
        if (substr(php_uname(), 0, 7) == "Windows"){
            return false;
        }
        return function_exists('exec');
    }

    /**
     * @param string  $command
     */
    public function run($command) {
        return exec($command, $this->output, $this->returnValue);
    }

    /**
     * @return string|null
     */
    public function getOutput() {
        return $this->output;
    }

    /**
     * @return string|null
     */
    public function getReturnValue() {
        return $this->returnValue;
    }

}
