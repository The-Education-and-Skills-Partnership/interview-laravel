<?php

use App\Models\User;
use App\Models\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Livewire\Volt\Component;

new class extends Component {
    public $store;
    public string $title;
    public string $location;
    public string $phone;
    public string $status;

    /**
     * Mount the component.
     */
    public function mount(): void
    {
        $this->store = Store::findOrFail(Route::current()->parameter('id'));
        $this->title = $this->store->title;
        $this->location = $this->store->location;
        $this->phone = $this->store->phone;
        $this->status = $this->store->status;
    }

    /**
     * Update the profile information for the currently authenticated user.
     */
    public function updateProfileInformation(): void
    {
        $validated = $this->validate([
            'title' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'phone' => 'required|string|max:20',
            'status' => 'required|string|in:open,closed',
        ]);

        $this->store->fill($validated);

        $this->store->save();

        $this->dispatch('store-updated', title: $this->store->title);
    }

    /**
     * Send an email verification notification to the current user.
     */
    public function sendVerification(): void
    {
        $user = Auth::user();

        if ($user->hasVerifiedEmail()) {
            $this->redirectIntended(default: route('dashboard', absolute: false));

            return;
        }

        $user->sendEmailVerificationNotification();

        Session::flash('status', 'verification-link-sent');
    }
}; ?>

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Store Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Update your store information.') }}
        </p>
    </header>

    <form wire:submit="updateProfileInformation" class="mt-6 space-y-6">
        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input wire:model="title" id="title" name="title" type="text" class="mt-1 block w-full" required
                autofocus autocomplete="title" />
            <x-input-error class="mt-2" :messages="$errors->get('title')" />
        </div>
        <div>
            <x-input-label for="location" :value="__('Location')" />
            <x-text-input wire:model="location" id="location" name="location" type="text" class="mt-1 block w-full"
                required autofocus autocomplete="location" />
            <x-input-error class="mt-2" :messages="$errors->get('location')" />
        </div>
        <div>
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input wire:model="phone" id="phone" name="phone" type="text" class="mt-1 block w-full"
                required autofocus autocomplete="phone" />
            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
        </div>
        <div>
            <x-input-label for="status" :value="__('Status')" />
            <select wire:model="status" id="status" name="status" class="mt-1 block w-full" required autofocus
                autocomplete="status">
                <option value="open">Open</option>
                <option value="closed">Closed</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('status')" />
        </div>




        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <x-action-message class="me-3" on="store-updated">
                {{ $title . __(' Saved.') }}
            </x-action-message>
        </div>
    </form>
</section>
