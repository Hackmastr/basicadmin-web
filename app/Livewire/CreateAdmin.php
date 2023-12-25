<?php

namespace App\Livewire;

use App\Livewire\Forms\CreateAdmin as CreateAdminForm;
use App\Models\Admin;
use App\Models\Flag;
use App\Models\FlagsCon;
use App\Models\Group;
use App\Models\GroupAdmin;
use App\Models\Server;
use App\Models\ServerAdmin;
use Livewire\Component;

class CreateAdmin extends Component
{
    public CreateAdminForm $form;

    public function save()
    {
        $admin = Admin::query()->create($this->form->validate());

        $flagsData = [];
        $groupAdminData = [];
        $serversData = [];

        foreach ($this->form->flags as $flag) {
            $flagsData[] = [
                'flag_id' => $flag,
                'admin_id' => $admin->id,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        foreach ($this->form->groups as $group) {
            $groupAdminData[] = [
                'group_id' => $group,
                'admin_id' => $admin->id,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }


        foreach ($this->form->servers as $server) {
            $serversData[] = [
                'server_id' => $server,
                'admin_id' => $admin->id,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        if (count($flagsData) > 0)
            FlagsCon::query()->insert($flagsData);

        if (count($groupAdminData) > 0)
            GroupAdmin::query()->insert($flagsData);

        if (count($serversData) > 0)
            ServerAdmin::query()->insert($flagsData);

        return redirect()->route('dashboard.admins.index')
            ->with('flash.banner', __('Admin created successfully.'));
    }

    public function render()
    {
        return view('livewire.create-admin', [
            'flags' => Flag::all(),
            'groups' => Group::all(),
            'servers' => Server::all(),
        ]);
    }
}
