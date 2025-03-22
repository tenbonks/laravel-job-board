@php use Illuminate\Support\Str; @endphp
<x-layout>

    <x-breadcrumbs class="mb-4" :links="['Jobs' => '#']" ></x-breadcrumbs>

    <x-card class="mb-4 text-sm">
        <div class="mb-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <div class="mb-1 font-semibold">Search</div>
                <x-text-input name="search" value="" placeholder="Search for any text" />
            </div>
            <div>
                <div class="mb-1 font-semibold">Salary</div>

                <div class="flex gap-4">
                    <x-text-input name="min_salary" value="" placeholder="From" />
                    <x-text-input name="max_salary" value="" placeholder="To" />
                </div>
            </div>
        </div>
    </x-card>

    @foreach($jobs as $job)
        <x-job-card class="mb-4" :job="$job">
            <x-link-button :href="route('jobs.show', $job)">
                Show
            </x-link-button>
        </x-job-card>
    @endforeach
</x-layout>
