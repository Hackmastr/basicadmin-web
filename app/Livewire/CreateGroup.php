<?php

namespace App\Livewire;

use App\Livewire\Forms\CreateGroup as CreateGroupForm;
use App\Models\Flag;
use App\Models\FlagsCon;
use App\Models\Group;
use Livewire\Component;

class CreateGroup extends Component
{
    public CreateGroupForm $form;

    public function save()
    {
        $group = Group::query()->create($this->form->validate());

        $data = [];

        foreach ($this->form->flags as $flag) {
            $data[] = [
                'flag_id' => $flag,
                'group_id' => $group->id,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        FlagsCon::query()->insert($data);

        return redirect()->route('dashboard.groups.index')
            ->with('flash.banner', __('Group created successfully.'));
    }

    public function render()
    {
        return view('livewire.create-group', [
            'flags' => Flag::all(),
        ]);
    }
}
