<?php

namespace App\Enum;

enum PriorityEnum:string
{
    case LOW = 'low';
    case MEDIUM = 'medium';
    case HIGH = 'high';

    public function number():int{
        return match ($this){
            PriorityEnum::LOW => 0,
            PriorityEnum::MEDIUM => 1,
            PriorityEnum::HIGH => 2,

        };
    }




}
