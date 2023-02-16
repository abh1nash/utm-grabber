<?php

namespace Abhinash\UtmGrabber;

class Admin
{
    public static function render_admin_page()
    {
        ob_start();
        require_once('views/admin_page.php');
        $content = ob_get_contents();
        ob_end_clean();
        echo ($content);
    }
}
