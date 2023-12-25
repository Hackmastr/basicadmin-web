<?php

namespace App\Livewire;

use App\Livewire\Forms\CreateServer as CreateServerForm;
use App\Models\Server;
use Livewire\Component;

class CreateServer extends Component
{
    public CreateServerForm $form;


    public function save()
    {
        Server::query()->create($this->form->validate());

        return redirect()->route('dashboard.servers.index')
            ->with('flash.banner', __('Server created successfully.'));
    }
}
