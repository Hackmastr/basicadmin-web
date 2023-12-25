<?php

namespace App\View\Components;

use App\Models\Server;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServerCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(private readonly Server $server)
    { }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.server-card', [
            'server' => $this->server
        ]);
    }
}
