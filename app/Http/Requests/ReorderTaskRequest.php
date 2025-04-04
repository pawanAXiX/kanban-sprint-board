<?php

namespace App\Http\Requests;

use App\Enum\StatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ReorderTaskRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'oldStatus' => ['required', 'string', Rule::enum(StatusEnum::class)],
            'newStatus' => ['required', 'string', Rule::enum(StatusEnum::class)],
            'index' => ['required', 'integer'],
        ];
    }
}
