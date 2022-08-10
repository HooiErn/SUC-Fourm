<x-app-layout>

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Notifications') }}
        </h2>
    </x-slot>

    <section class="px-6">

        {{-- Livewire Index --}}
    @section('content')
        <table class="min-w-full">
        <thead class="bg-blue-500">
            <tr>
                <x-table.head>Message</x-table.head>
                <x-table.head>Date</x-table.head>
                <x-table.head class="text-center">Action</x-table.head>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200 divide-solid">
            @foreach ($notifications as $notification)
            <tr>
                <x-table.data>
                    <div>
                        A new reply was add to
                        <a href="{{ route('replies.replyAble', [$notification->data['replyable_id'], $notification->data['replyable_type']]) }}" class="ml-2 font-bold text-blue-500">
                            {{ $notification->data['replyable_subject'] }} 
                            {{ dd($notification) }}
                        </a>
                    </div>
                </x-table.data>

                <x-table.data>
                    <div>{{ $notification->created_at->diffForHumans() }}</div>
                </x-table.data>

                <x-table.data class="text-center">
                    <x-jet-button wire:click="markAsRead('{{ $notification->id }}')">
                        {{ __('Mark As Read') }}
                    </x-jet-button>
                </x-table.data>
                @endforeach
            </tr>
        </tbody>
    </table>
    @endsection
        <livewire-notifications.index />

    </section>
</x-app-layout>
