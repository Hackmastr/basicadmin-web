<x-layouts.app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Admin') }}
        </h2>
    </x-slot>

    <div>
        <livewire:create-admin />
    </div>
</x-layouts.app-layout>
