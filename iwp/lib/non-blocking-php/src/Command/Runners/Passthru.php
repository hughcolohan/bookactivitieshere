<?php

namespace NonBlockingPHP\Command\Runners;

class Passthru {

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
        return function_exists('passthru');
    }

    /**
     * @param string  $command
     */
    public function run($command) {
        ob_start();
        passthru($command, $this->returnValue);
        $this->output = ob_get_contents();
        ob_end_clean();
        return $this->output;
    }

    /**
     * @return string|null
     */
    public function getReturnValue() {
        return $this->returnValue;
    }

}
