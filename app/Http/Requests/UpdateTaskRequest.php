<?php

namespace App\Http\Requests;

use App\Enum\PriorityEnum;
use App\Models\Task;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use function Termwind\parse;

class UpdateTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {


        return [
            'name'=>['required','string',Rule::unique(Task::class,'name')->ignore($this->task)],
            'description'=>['nullable','string'],
            'priority'=>['nullable','string',Rule::enum(PriorityEnum::class)],
        ];
    }
}
