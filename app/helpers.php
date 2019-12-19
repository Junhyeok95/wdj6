<?php
//프로그램 파일 경로
function program_attachments_path($path = '')
{
    return public_path('files3'.($path ? DIRECTORY_SEPARATOR.$path : $path));
}

//게시판 파일 경로
function attachments_path($path = '')
{
    return public_path('files'.($path ? DIRECTORY_SEPARATOR.$path : $path));
}

//파일 사이즈 형식
function format_filesize($bytes){
    if(! is_numeric($bytes)) return 'NaN';

    $decr = 1024;
    $step = 0;
    $suffix = ['bytes','KB','MB'];

    while (($bytes/$decr) > 0.9){
        $bytes = $bytes/$decr;
        $step ++;
    }
    return round($bytes,2) .$suffix[$step];
}

//게시판 파일 경로
if (! function_exists('attachments_path')) {
    function attachments_path($path = null)
    {
        return public_path('files'.($path ? DIRECTORY_SEPARATOR.$path : $path));
    }
}

//멤버 파일 경로
if (! function_exists('attachments_path2')) {
    function attachments_path2($path = null)
    {
        return public_path('files2'.($path ? DIRECTORY_SEPARATOR.$path : $path));
    }
}

//프로그램 파일 경로
if (! function_exists('attachments_path3')) {
    function attachments_path3($path = null)
    {
        return public_path('files3'.($path ? DIRECTORY_SEPARATOR.$path : $path));
    }
}
?>