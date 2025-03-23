
{{--
    It's ideal to keep components to one root element ie, everything contained within a div,
    this isn't a strict requirement for components, but it is for livewire components, so
    if we keep to one root element, then converting to livewire will be a simpler process
 --}}

<div>

    <label for="{{ $name }}" class="mb-1 flex items-center">
        <input type="radio" name="{{ $name }}" value="" @checked(!request( $name ))/>
        <span class="ml-2">All</span>
    </label>

    @foreach($options as $option)
        <label for="{{ $name }}" class="mb-1 flex items-center">
            <input type="radio" name="{{ $name }}" value="{{ $option }}" @checked(request( $name ) === $option)/>
            <span class="ml-2">{{ \Illuminate\Support\Str::ucfirst($option) }}</span>
        </label>
    @endforeach
</div>
