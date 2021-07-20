<?php

namespace Abhinash\UtmGrabber;

use Abhinash\UtmGrabber\Assets;

class Core {

    public function __construct() {
        register_activation_hook(__FILE__, [$this, 'activate']);
        register_deactivation_hook(__FILE__, [$this, 'deactivate']);
        add_action('plugins_loaded', [$this, 'init_plugin']);
    }
    
    public function activate() {
    }
    
    public function deactivate() {
        
    }

    public function init_plugin() {
        $assets = new Assets();
    }
}