<?php

class Shell extends Core {
    // Include the components
    use FormHandling;

    function __construct(){
        parent::__construct();
        $this->pages = array(
            "/" => "home",
        );
        $this->blueprints = array(
            //"/" => "default",
        );
    }

}
// Initialize Shell object
$shell = new Shell;