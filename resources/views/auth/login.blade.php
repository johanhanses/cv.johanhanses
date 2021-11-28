<x-layouts.app>
    <div class="lg:w-1/3 mx-auto mt-12">
        <form method="POST" action="{{ route('login') }}" data-turbo="false">
            @csrf

            <div>
                <x-label for="name" class="sr-only"/>

                <x-input
                    id="name"
                    class="block mt-1 w-full"
                    type="text"
                    placeholder="Username"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    autofocus
                    autocomplete="name"
                />
            </div>

            <div class="mt-4">
                <x-label for="password" class="sr-only"/>

                <x-input
                    id="password"
                    class="block mt-1 w-full"
                    type="password"
                    name="password"
                    placeholder="Password"
                    required
                    autocomplete="current-password"
                />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input
                        id="remember_me"
                        type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                       name="remember"
                    >
                    <span
                        class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a
                        class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}"
                    >
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>

        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <x-auth-validation-errors class="mt-4" :errors="$errors"/>
    </div>
</x-layouts.app>
