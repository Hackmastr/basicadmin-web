<?php

namespace App\Livewire\Forms;

use App\Models\Server;
use Symfony\Component\HttpFoundation\Response;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateServer extends Form
{
//    #[Validate('required|string|min:3|max:255')]
    public string $name = '';

//    #[Validate('required|ip')]
    public string $ip = '';

//    #[Validate('required|int')]
    public ?int $port = null;

//    #[Validate('required|string|min:3|max:255')]
    public string $rcon = '';

    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'ip' => ['required', 'ip', function($attr, $value, $fail) {
                $server = Server::query()->where('ip', $this->ip)->where('port', $this->port)->first();

                if ($server) {
                    $fail(__('Server already exists.'));
                }
            }],
            'port' => 'required|int',
            'rcon' => 'required|string|min:3|max:255',
        ];
    }
}
