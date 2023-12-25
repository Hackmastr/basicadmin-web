<?php

namespace App\Livewire\Forms;

use App\Models\Flag;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateGroup extends Form
{
    public string $name = '';

    public int $immunity = 0;

    /** @var Flag[] */
    public array $flags = [];

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'immunity' => ['required', 'integer', 'min:0'],
            'flags' => ['required', 'array'],
            'flags.*' => ['required', 'integer', 'exists:flags,id'],
        ];
    }
}
