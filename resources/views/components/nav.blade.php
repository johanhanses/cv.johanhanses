<aside {{ $attributes(["class" => "bg-gray-900 text-gray-100 pt-12 flex flex-col items-end px-12"]) }}>
    @auth
        <div class="uppercase text-3xl mb-24 text-right">
            <p>Hello {{ auth()->user()->name }}!</p>
        </div>
    @endauth

    <nav>
        <ul class="uppercase text-xl space-y-6 text-right">
            <li>
                <a href="/" class="hover:underline'">CV</a>
            </li>

            @auth
                <li>
                    <a href="/coverletter" class="hover:underline">Cover letter</a>
                </li>

                <li>
                    <a href="/about" class="hover:underline">About</a>
                </li>
            @endauth
        </ul>
    </nav>

    <address class="mt-8 text-right">
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
        <nav class="text-sm text-right">
            <a
                href="/logout"
                x-data="{}"
                @click.prevent="document.querySelector('#logout-form').submit()"
                class="uppercase hover:underline block mt-24"
            >
                Log out
            </a>

            <form id="logout-form" method="POST" action="/logout" class="" hidden>
                @csrf
            </form>
        </nav>
    @else
            <nav class="text-sm text-right">
                <a
                    href="/login"
                    class="uppercase hover:underline block mt-24"
                >
                    Log in
                </a>
            </nav>
    @endauth
</aside>
