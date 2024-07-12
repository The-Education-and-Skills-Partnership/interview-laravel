{{-- @extends('main')

@section('content')
    <div
        class="flex flex-col gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10">
        <div class="pt-3 sm:pt-5">
            <h2 class="text-xl font-semibold text-black">{{ $store->title }} ({{ ucfirst($store->status) }})</h2>
            <p class="mt-4 text-sm/relaxed">
                This store is located at {{ $store->location }}. To contact please call {{ $store->phone }}.
            </p>
        </div>
    </div>
@endsection --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Store') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="py-4 ">
                        <h2 class="text-xl font-semibold text-black flex w-100">{{ $store->title }}
                            <div class="mr-auto ml-5 flex">({{ ucfirst($store->status) }})</div>
                            <a href="{{ route('store.edit', $store->id) }}" class="ml-auto" wire:navigate>Edit</a>

                        </h2>
                        <p class="mt-4 text-sm/relaxed">
                            This store is located at {{ $store->location }}. To contact please call {{ $store->phone }}.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
