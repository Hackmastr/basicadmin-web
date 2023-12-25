<x-layouts.app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Groups') }}
            </h2>
            <x-nav-link :href="route('dashboard.groups.create')">
                {{ __('New group') }}
            </x-nav-link>
        </div>
    </x-slot>

    <div>
        {{ $groups }}
    </div>
</x-layouts.app-layout>
