<?php
function view($template, $data = [])
{
    extract($data);
    require_once __DIR__ . "/Views/$template.php";
}