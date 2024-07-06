<x-layout>
    <x-slot:heading> Профессия </x-slot:heading>
    <h2 class="font-bold text-lg"> {{$job['title']}} </h2>

    <p>
        Годовая зарплата для этой професси {{ $job['salary'] }}.
    </p>
</x-layout>