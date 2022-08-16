<?php 

// cek menu aktif berdasarkan vab menu
if (! function_exists('core_menuaktif')) {
    function core_menuaktif($menuaktif,$menu)
    {
        $result = NULL;
        if ($menuaktif == $menu) {
            $result = 'mm-active';
        }
        return $result;
    }
}