<x-layout>
    @foreach($jobs as $job)
        <x-card class="mb-4">
            <h1 class="text-xl">{{ $job->title  }}</h1>
        </x-card>
    @endforeach
</x-layout>
