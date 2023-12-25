<div>
    <x-mary-form wire:submit.prevent="save">
        <div class="grid grid-cols-2 gap-3">
            <div>
                <x-mary-input :label="__('Name')" :hint="__('Field required')" type="text" wire:model="form.name" class="w-full" />
            </div>
            <div>
                <x-mary-input :label="__('IP')" :hint="__('Field required')" type="text" wire:model="form.ip" class="w-full"/>
            </div>
            <div>
                <x-mary-input :label="__('Port')" :hint="__('Field required')" type="text" wire:model="form.port" class="w-full"/>
            </div>
            <div>
                <x-mary-input :label="__('Rcon')" :hint="__('Field required')" type="text" wire:model="form.rcon" class="w-full"/>
            </div>
        </div>

        <x-slot:actions>
                <x-mary-button :label="__('Create')" type="submit" class="btn-primary" spinner="save" />
        </x-slot:actions>
    </x-mary-form>
</div>
