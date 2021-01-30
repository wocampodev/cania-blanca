<?php

use Illuminate\Support\Str;

function active($path){
    return Str::startsWith(request()->path(), $path) ? 'active' : '';
}