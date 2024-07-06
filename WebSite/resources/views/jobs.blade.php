<x-layout>
    <x-slot:heading> Список профессий </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)

        <li>
            <a
                href="/jobs/{{ $job['id'] }}"
                class="text-blue-500 hover:underline"
            >
                <strong>{{ $job["title"] }}:</strong> Заработная плата
                {{ $job["salary"] }} за год.
            </a>
        </li>

        @endforeach
    </ul>
</x-layout>