<?php

function str_slug($title)
{
    $slug = $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
    return $slug;
}
function str_limit($title,$vlue)
{
    $slug = $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
    return $slug;
}

?>