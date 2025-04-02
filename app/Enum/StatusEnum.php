<?php

namespace App\Enum;

enum StatusEnum:string
{
    case NOT_STARTED='not started';
    case IN_PROGRESS = 'in progress';
    case DONE = 'active';
    case ARCHIVED = 'archived';
}
