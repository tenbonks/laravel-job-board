<x-card {{ $attributes->class(['']) }}>

    <div class="mb-2 flex justify-between">
        <h2 class="text-lg font-medium">
            {{ $job->title  }}
        </h2>
        <div class="text-slate-500">
            £{{ number_format($job->salary) }}
        </div>
    </div>

    <div class="mb-4 flex justify-between text-sm items-center text-slate-500">
        <div class="flex space-x-4">
            <div>Company</div>
            <div>{{ $job->location }}</div>
        </div>
        <div class="flex space-x-1 text-xs">
            <x-pill>{{ Str::ucfirst($job->experience) }}</x-pill>
            <x-pill>{{ $job->category }}</x-pill>
        </div>
    </div>

    {{ $slot }}

</x-card>
