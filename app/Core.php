<?php

namespace Abhinash\UtmGrabber;

use Abhinash\UtmGrabber\Assets;
use Abhinash\UtmGrabber\Admin;


class Core
{

    public function __construct()
    {
        register_activation_hook(__FILE__, [$this, 'activate']);
        register_deactivation_hook(__FILE__, [$this, 'deactivate']);
        add_action('plugins_loaded', [$this, 'init_plugin']);
        add_action('admin_menu', [$this, 'register_admin_page']);
    }

    public function activate()
    {
    }

    public function deactivate()
    {
    }

    public function register_admin_page()
    {
        add_menu_page(
            __('UTM Grabber Configuration', 'textdomain'),
            'UTM Grabber',
            'manage_options',
            'ak_utm_grabber',
            [Admin::class, 'render_admin_page'],
            '',
            99
        );
    }

    public function init_plugin()
    {
        $assets = new Assets();
    }
}
