    @props(['active'])

    @php
        $classes = $active
            ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white'
            : 'rounded-md  px-3 py-2 text-sm font-medium text-gray-200 hover:bg-gray-800 hover:text-white';
    @endphp

    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
