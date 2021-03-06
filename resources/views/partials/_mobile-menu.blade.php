<nav
    x-cloak
    x-show="show"
    x-transition
    class="absolute left-0 top-16 right-0 bg-gray-900 px-6"
>
    <ul class="uppercase text-lg lg:text-xl space-y-6 lg:text-right py-4">
        @auth
            <li>
                <a href="/" class="{{ request()->is('/') ? 'underline' : '' }}">
                    Cover letter
                </a>
            </li>

            <li>
                <a href="/cv" class="{{ request()->is('cv') ? 'underline' : '' }}">
                    CV
                </a>
            </li>

            <li>
                <a href="/about" class="{{ request()->is('about') ? 'underline' : '' }}">
                    About
                </a>
            </li>

            <li>
                <a
                    href="/logout"
                    x-data="{}"
                    @click.prevent="document.querySelector('#logout-form').submit()"
                    class="uppercase block lg:mt-24"
                >
                    Log out
                </a>

                <form id="logout-form" method="POST" action="/logout"
                      class="" hidden>
                    @csrf
                </form>
            </li>
        @else
            <li>
                <a
                    href="/login"
                    class="uppercase block"
                >
                    Log in
                </a>
            </li>
        @endauth
    </ul>
</nav>
