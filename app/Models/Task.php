<?php

namespace App\Models;

use App\Enum\PriorityEnum;
use App\Enum\StatusEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    use HasFactory;

    protected $fillable = ['name','description','status','priority','order'];

    protected $casts = [
        'status' => StatusEnum::class,
        'priority' => PriorityEnum::class
    ];
}
