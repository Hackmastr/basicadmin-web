<?php

namespace App\Livewire\Forms;

use Livewire\Form;

class CreateAdmin extends Form
{
    public string $nick = '';

    public string $steamid64 = '';

    public ?int $immunity = null;

    public array $flags = [];

    public array $groups = [];

    public array $servers = [];

    public function rules(): array
    {
        return [
            'nick' => ['required', 'string', 'max:255', 'unique:admins,nick'],
            'steamid64' => ['required', 'int', 'unique:admins,steamid64', function($attribute, $value, $fail) {
                if (strlen($value) !== 17) {
                    $fail('The :attribute must be 17 characters.');
                }
            }],
            'immunity' => ['nullable', 'integer', 'min:0'],
            'flags' => ['nullable', 'array', function($attribute, $value, $fail) {
                if (count($value) === 0 && count($this->groups) === 0) {
                    $fail(__('If no groups are selected, at least one flag must be selected.'));
                }
            }],
            'flags.*' => ['required', 'integer', 'exists:flags,id'],
            'groups' => ['nullable', 'array', function($attribute, $value, $fail) {
                if (count($value) === 0 && count($this->flags) === 0) {
                    $fail(__('If no flags are selected, at least one group must be selected.'));
                }
            }],
            'groups.*' => ['required', 'integer', 'exists:groups,id'],
        ];
    }
}
