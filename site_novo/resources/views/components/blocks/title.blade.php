@props(['text', 'level' => 'h2'])

<{{ $level }} class="font-bold text-gray-900 dark:text-white mt-8 mb-4 @if($level === 'h2') text-3xl @elseif($level === 'h3') text-2xl @else text-xl @endif">
    {{ $text }}
</{{ $level }}>
