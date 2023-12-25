<div>
    <x-mary-form wire:submit.prevent="save">
        <div class="grid grid-cols-2 gap-3">
            <div>
                <x-mary-input :label="__('Name')" :hint="__('Field required')" type="text" wire:model="form.name" class="w-full" />
            </div>
            <div>
                <x-mary-input :label="__('Immunity')" :hint="__('Field required')" type="number" min="0" wire:model="form.immunity" class="w-full"/>
            </div>
            <div class="hide-search-input">
                <x-mary-choices label="Flags" :hint="__('Field required')"  wire:model="form.flags" :options="$flags" :searchable="false" />
            </div>
        </div>

        <x-slot:actions>
                <x-mary-button :label="__('Create')" type="submit" class="btn-primary" spinner="save" />
        </x-slot:actions>
    </x-mary-form>
</div>
