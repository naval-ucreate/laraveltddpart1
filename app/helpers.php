<?php
function flash($message,$status)
{
    session()->flash('message',$message);
    session()->flash('status',$status);
}
function set_active($path, $active = 'active') {

    return call_user_func_array('Request::is', (array)$path) ? $active : '';

}
