<nav {{ $attributes }}>
    <ul class="flex space-x-2 text-slate-400 text-sm">
        <li>
            <a href="/">Home </a>
        </li>

        @foreach ($links as $label => $link)
            <li> / </li>
            <li>
                <a href="{{ $link }}">
                    {{ $label }}
                </a>
            </li>

        @endforeach
</nav>
