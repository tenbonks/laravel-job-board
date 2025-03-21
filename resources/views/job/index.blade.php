<x-layout>
    @foreach($jobs as $job)
        <div><h1 class="text-xl">{{ $job->title  }}</h1></div>
    @endforeach
</x-layout>
