<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Stores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (count($stores))
                        @foreach ($stores as $s)
                            <div class="py-4 border-b border-gray-200">
                                <x-responsive-nav-link :href="route('store', $s->id)" :active="request()->routeIs('store', $s->id)" wire:navigate
                                    class="block hover:bg-gray-50 transition duration-150 ease-in-out">
                                    <div class="px-4 py-2 bg-white">
                                        <h2 class="text-xl font-semibold text-black">{{ $s->title }}
                                            ({{ ucfirst($s->status) }})
                                        </h2>
                                    </div>
                                </x-responsive-nav-link>
                            </div>
                        @endforeach
                        {{-- Pagination Links --}}
                        <div class="mt-4">
                            {{ $stores->links() }}
                        </div>
                    @else
                        <div class="py-4">
                            <h3>No stores found. Check back later</h3>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
