<x-layout>

    <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index'), $job->title => '#']" ></x-breadcrumbs>

    <x-job-card :$job >
        {{-- using {!! !!} interpolation will NOT escape html --}}
        <p class="text-sm text-slate-500 mb-4">
            {!! nl2br(e($job->description)) !!}
        </p>
    </x-job-card>
</x-layout>
