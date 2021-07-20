<?php

namespace Abhinash\UtmGrabber;

class Assets {
    
    public function __construct() {
        $this->load();
    }

    private function load() {
        add_action('wp_enqueue_scripts', [$this, 'enqueuer']);
    }

    public function enqueuer() {
        if( UTM_PLUGIN_DEV_MODE ) {
            wp_enqueue_script(
                'abhinash-utm-grabber',
                'http://localhost:1234/main.js',
                array(),
                \filemtime(plugin_dir_path(__DIR__) . 'dist/main.js'),
                false
            );
        }
        else {
            wp_enqueue_script(
                'abhinash-utm-grabber',
                ABHINASH_UTM_PLUGIN_URL . 'dist/main.js',
                array(),
                \filemtime(plugin_dir_path(__DIR__) . 'dist/main.js'),
                false
            );
        }
    }
}