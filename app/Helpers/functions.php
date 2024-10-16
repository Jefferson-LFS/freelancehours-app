<?php

use App\Enums\ProjectStatus;

if(!function_exists('getProjectStatus')){
    function getProjectStatus(string $status): string {
        return ProjectStatus::label($status);
    }
}