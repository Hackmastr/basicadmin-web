<x-layouts.app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Server') }}
        </h2>
    </x-slot>

    <div>
        <livewire:create-server />
    </div>
</x-layouts.app-layout>
