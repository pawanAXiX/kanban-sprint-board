<?php

namespace App\Enum;

enum StatusEnum:string
{
    case NOT_STARTED='not started';
    case IN_PROGRESS = 'in progress';
    case DONE = 'active';
    case ARCHIVED = 'archived';


    public function label():int{
        return match ($this){
            StatusEnum::NOT_STARTED => 0,
            StatusEnum::IN_PROGRESS => 1,
            StatusEnum::DONE => 2,
            StatusEnum::ARCHIVED => 3,
        };
    }


}
