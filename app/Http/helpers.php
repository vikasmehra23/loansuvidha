<?php

if (!function_exists('custom_asset')) {

    function custom_asset($path, $secure = null)
    {
        return app('url')->asset('public/' . $path, $secure);
    }

}


?>