<?php
function include_template($path, $args)
{
    if (!file_exists($path)) return "";
    else {
        foreach ($args as $key => $value) {
            $$key = $value;
        }
        ob_start();
        require $path;
        $data = ob_get_clean();
        return $data;
    }

}