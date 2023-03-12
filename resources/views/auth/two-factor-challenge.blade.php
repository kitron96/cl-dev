<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Your authentification code') }}
    </div>

    <form method="POST" action="/two-factor-challenge">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="code" :value="__('Authenticator code')" />

            <x-text-input id="code" class="block mt-1 w-full"
                          type="text"
                          name="code"
                          required autocomplete="false" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
