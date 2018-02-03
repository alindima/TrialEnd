<?php

if(!function_exists('routeName')){
    function routeName()
    {
        return request()->route()->getName();
    }
}
