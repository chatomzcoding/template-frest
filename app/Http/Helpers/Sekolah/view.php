<?php 

// ui menampilkan tanda input (form) wajib untuk diisi
if (! function_exists('ui_req')) {
    function ui_req()
    {
        $html = "<strong class='text-danger'>*</strong>";
        return $html;
    }
}