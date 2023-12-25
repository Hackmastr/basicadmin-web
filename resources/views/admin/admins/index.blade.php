<x-layouts.app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Admins') }}
            </h2>
            <x-nav-link :href="route('dashboard.admins.create')">
                {{ __('New admin') }}
            </x-nav-link>
        </div>
    </x-slot>

    <div>
        {{ $admins }}
    </div>
</x-layouts.app-layout>
