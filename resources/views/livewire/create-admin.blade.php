<div>
    <x-mary-form wire:submit.prevent="save">
        <div class="grid grid-cols-3 gap-3">
            <div>
                <x-mary-input :label="__('Name')" :hint="__('Field required')" type="text" wire:model="form.nick" class="w-full" />
            </div>
            <div>
                <x-mary-input :label="__('Steamid64')" :hint="__('Field required')" type="number" min="0" wire:model="form.steamid64" class="w-full"/>
            </div>
            <div>
                <x-mary-input :label="__('Immunity')" :hint="__('If one or more groups are set, this field will be ignored.')" type="number" min="0" wire:model="form.immunity" class="w-full"/>
            </div>
            <div class="col-span-3 hide-search-input">
                <x-mary-choices :label="__('Servers')" :hint="__('If none are selected, access will be available on all.')" wire:model="form.servers" :options="$servers" />
            </div>
            <div class="col-span-3 grid grid-cols-2 gap-3 hide-search-input">
                <div>
                    <x-mary-choices :label="__('Flags')" :hint="__('This field can be omitted if one or more groups are set.')" wire:model="form.flags" :options="$flags" />
                </div>
                <div>
                    <x-mary-choices :label="__('Groups')" :hint="__('This field can be omitted if one or more flags are set.')" wire:model="form.groups" :options="$groups" />
                </div>
            </div>
        </div>

        <x-slot:actions>
                <x-mary-button :label="__('Create')" type="submit" class="btn-primary" spinner="save" />
        </x-slot:actions>
    </x-mary-form>
</div>
