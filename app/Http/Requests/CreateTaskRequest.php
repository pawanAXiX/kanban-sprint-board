<?php

namespace App\Http\Requests;

use App\Enum\PriorityEnum;
use App\Enum\StatusEnum;
use App\Models\Task;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use const Grpc\STATUS_ABORTED;

class CreateTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','string',Rule::unique(Task::class,'name')],
            'description' => ['nullable','string'],
            'status' => ['required',Rule::enum(StatusEnum::class)],
            'priority' => ['nullable',Rule::enum(PriorityEnum::class)],
            'order' => ['numeric','required'],
        ];
    }
}
