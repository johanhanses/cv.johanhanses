<aside
    x-data="{ show: false }"
    {{ $attributes(["class" => "bg-gray-900 text-gray-100 lg:pt-12 flex flex-col lg:items-end px-6 lg:px-12 relative"]) }}
>
    <div class="uppercase text-2xl lg:text-3xl lg:mb-24 lg:text-right flex justify-between items-center w-full lg:block h-16 lg:h-auto"
    >
        @auth
            <p>Hello {{ auth()->user()->name }}!</p>
        @endauth

        <button @click="show = ! show" class="lg:hidden">
{{--            <x-menu-icon />--}}
{{--            <x-cross-icon />--}}
        </button>
    </div>

    {{--mobile menu--}}
    @include("partials._mobile-menu")

    <nav class="hidden lg:block">
        <ul class="uppercase text-xl space-y-6 text-right">
            <li>
                <a href="/" class="hover:underline {{ request()->is('/') ? 'underline' : '' }}">CV</a>
            </li>

            @auth
                <li>
                    <a href="/coverletter" class="hover:underline {{ request()->is('coverletter') ? 'underline' : '' }}">Cover
                        letter</a>
                </li>

                <li>
                    <a href="/about" class="hover:underline {{ request()->is('about') ? 'underline' : '' }}">About</a>
                </li>
            @endauth
        </ul>
    </nav>

    <address class="hidden lg:block mt-8 text-right">
        <a
            href="mailto:johanhanses@gmail.com"
            class="inline-block not-italic border border-gray-100 p-2 px-6 rounded-full hover:bg-gray-100 hover:text-gray-900 transition-colors duration-300"
        >
            johanhanses@gmail.com
        </a>

        @auth
            <a
                href="tel:+46735506928"
                class="mt-4 inline-block not-italic border border-gray-100 p-2 px-6 rounded-full hover:bg-gray-100 hover:text-gray-900 transition-colors duration-300"
            >
                073-550 69 28
            </a>
        @endauth
    </address>

    @auth
        <nav class="text-sm text-right hidden lg:block">
            <a
                href="/logout"
                x-data="{}"
                @click.prevent="document.querySelector('#logout-form').submit()"
                class="uppercase hover:underline block mt-24"
            >
                Log out
            </a>

            <form id="logout-form" method="POST" action="/logout" class=""
                  hidden>
                @csrf
            </form>
        </nav>
    @else
        <nav class="text-sm text-right hidden lg:block">
            <a
                href="/login"
                class="uppercase hover:underline block mt-24"
            >
                Log in
            </a>
        </nav>
    @endauth
</aside>
