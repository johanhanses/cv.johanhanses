<x-layouts.app>
    <div class="lg:w-1/3 mx-auto mt-12">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
            <div>
                <x-label for="name" class="sr-only"/>

                <x-input
                    id="name"
                    class="block mt-1 w-full"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Name"
                    required
                    autofocus
                />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" class="sr-only" />

                <x-input
                    id="email"
                    class="block mt-1 w-full"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Email"
                    required
                />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" class="sr-only" />

                <x-input
                    id="password"
                    class="block mt-1 w-full"
                    type="password"
                    name="password"
                    placeholder="Password"
                    required
                    autocomplete="new-password"/>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" class="sr-only"/>

                <x-input
                    id="password_confirmation"
                    class="block mt-1 w-full"
                    type="password"
                    name="password_confirmation"
                    placeholder="Confirm Password"
                    required
                />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                   href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>

        <x-auth-validation-errors class="mt-4" :errors="$errors"/>
    </div>
</x-layouts.app>>
