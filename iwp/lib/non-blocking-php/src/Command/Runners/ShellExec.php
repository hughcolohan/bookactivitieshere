<?php

namespace NonBlockingPHP\Command\Runners;

class ShellExec {

    /**
     * @var string
     */
    protected $output;

    /**
     * @var string
     */
    protected $returnValue;

    /**
     * @return Boolean 
     */
    public function isEnabled() {
        if (substr(php_uname(), 0, 7) == "Windows"){
            return false;
        }
        return function_exists('shell_exec');
    }

    /**
     * @param string  $command
     */
    public function run($command) {
        $this->output = $this->returnValue = shell_exec((string) $command);
        return $this->output;
    }

    /**
     * @return string|null
     */
    public function getReturnValue() {
        return $this->output;
    }

}
