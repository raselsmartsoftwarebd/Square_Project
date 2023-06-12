<?php

function status($status)
{
    if ($status == 1) {
        $status = 'checked';
    } else {
        $status = '';
    }
    return $status;
}
