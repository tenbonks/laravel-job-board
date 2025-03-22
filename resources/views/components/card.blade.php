{{-- The array of class names are the default classes, any class we use when calling the component, will be merged with the default classes --}}
<article {{ $attributes->class(['rounded-md border border-slate-300 bg-white p-4 shadow-sm']) }} >
    {{ $slot }}
</article>
