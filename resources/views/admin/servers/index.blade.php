<x-layouts.app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Servers') }}
            </h2>
            <x-nav-link :href="route('dashboard.servers.create')">
                {{ __('New Server') }}
            </x-nav-link>
        </div>
    </x-slot>

    <div>
        @foreach($servers as $server)
            <x-server-card :server="$server" />
        @endforeach
    </div>
</x-layouts.app-layout>
