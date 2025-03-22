<nav {{ $attributes->class([]) }} >
    <ul class="flex space-x-2 items-center text-slate-500">
        <li>
            <a href="/">Home</a>
        </li>

        @foreach($links as $label => $link)

            <li>
                →
            </li>

            <li>
                @if($link !== '#')
                    <a href="{{ $link }}">{{ $label }}</a>
                @else
                    <span>{{$label}}</span>
                @endif
            </li>

        @endforeach

    </ul>
</nav>
