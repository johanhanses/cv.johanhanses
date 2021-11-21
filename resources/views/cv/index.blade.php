<x-layouts.app>
    <section>
        <div>
            <h1 class="text-xl pb-2">Johan Hanses</h1>

            <hr />

            <div class="flex flex-col md:flex-row md:justify-between mt-2 mb-8">
                <div class="w-full md:w-4/6 space-y-1">
                    @auth
                        <div class="flex justify-between">
                            <p class="md:w-2/6">Address:</p>
                            <p class="md:w-4/6 pl-4">{{ $header->address }}</p>
                        </div>

                        <div class="flex justify-between">
                            <p class="md:w-2/6">Mobile number:</p>
                            <p class="md:w-4/6 pl-4">
                                <a href="tel:{{ $header->phone }}" class="text-dark hover:underline text-blue-700">
                                    {{ $header->phone }}
                                </a>
                            </p>
                        </div>
                    @endauth
                    <div class="flex justify-between">
                        <p class="md:w-2/6">Email:</p>
                        <p class="md:w-4/6 pl-4">
                            <a href="mailto:{{ $header->email }}" class="text-dark hover:underline text-blue-700">
                                {{ $header->email }}
                            </a>
                        </p>
                    </div>
                    @auth
                        <div class="flex justify-between">
                            <p class="md:w-2/6">Date of birth:</p>
                            <p class="md:w-4/6 pl-4">
                                {{ \Carbon\Carbon::parse($header->date_of_birth)->format("Y-m-d") }}
                            </p>
                        </div>
                    @endauth
                    <div class="flex justify-between">
                        <p class="md:w-2/6">Github:</p>
                        <p class="md:w-4/6 pl-4">
                            <a target="_blank" href="{{ $header->github }}" class="text-dark hover:underline text-blue-700">
                                {{ str_replace("https://", "", $header->github) }}
                            </a>
                        </p>
                    </div>

                    <div class="flex justify-between">
                        <p class="md:w-2/6">LinkedIn:</p>
                        <p class="md:w-4/6 pl-4">
                            <a target="_blank" href="{{ $header->linkedin }}" class="text-dark hover:underline break-all text-blue-700">
                                {{ str_replace("https://www.", "", $header->linkedin) }}
                            </a>
                        </p>
                    </div>

                    <div class="flex justify-between">
                        <p class="md:w-2/6">Languages:</p>
                        <p class="md:w-4/6 pl-4 break-words">
                            {{ $header->lang }}
                        </p>
                    </div>

                    <div class="flex justify-between">
                        <p class="md:w-2/6">Drivers license:</p>
                        <p class="md:w-4/6 pl-4">
                            {{ $header->driverslic }}
                        </p>
                    </div>
                </div>

                <div class="order-first md:order-last mb-6 md:mb-0 w-full md:w-auto">
                    <img src="{{ asset("images/jag.png") }}" alt="me" class="h-auto w-auto mx-auto">
                </div>
            </div>
        </div>

        <div>
            <h2 class="text-lg pb-2">Skills</h2>
            <hr />

            <div class="mt-2 mb-8 space-y-1">
                <p><strong>Programming: </strong>{{ $skill->programming }}</p>
                <p><strong>Frontend: </strong>{{ $skill->frontend }}</p>
                <p><strong>Backend: </strong>{{ $skill->backend }}</p>
                <p><strong>Databases: </strong>{{ $skill->db }}</p>
                <p><strong>Tooling: </strong>{{ $skill->tools }}</p>
                <p><strong>Testing: </strong>{{ $skill->test }}</p>
                <p><strong>Server: </strong>{{ $skill->server }}</p>
                <p><strong>Other: </strong>{{ $skill->other }}</p>
            </div>
        </div>

        <div class="work">
            <h2 class="text-lg pb-2">Work experience</h2>

            <hr />

            @foreach($works as $work)
                <div class="mt-3 mb-8">
                    <table>
                        <tr>
                            <td style="min-width: 110px; vertical-align:top;">
                                {{ $work->date }}
                            </td>
                            <td class="pl-4">
                                <strong>{{ $work->employee }}</strong>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="pl-4">
                                <i>{{ $work->position }}</i>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="pl-4">{{ $work->description }}</td>
                        </tr>
                    </table>
                </div>
            @endforeach
        </div>

        <div>
            <h2 class="text-lg pb-2">Education</h2>

            <hr />

            @foreach($educations as $education)
                <div class="mt-3 mb-8">
                    <table>
                        <tr>
                            <td style="min-width: 110px; vertical-align:top;">
                                {{ $education->date }}
                            </td>
                            <td class="pl-4">
                                <strong>{{ $education->education }}</strong>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="pl-4">{{ $education->school }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="pl-4">{{ $education->points }}</td>
                        </tr>
                        <tr class="bottom">
                            <td></td>
                            <td class="pl-4">{{ $education->description }}</td>
                        </tr>
                    </table>
                </div>
            @endforeach
        </div>
    </section>
</x-layouts.app>