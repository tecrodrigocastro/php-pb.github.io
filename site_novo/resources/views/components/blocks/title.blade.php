@props(['text', 'level' => 'h2'])

<{{ $level }} class="font-semibold text-ink-100 mt-8 mb-4 @if($level === 'h2') text-3xl @elseif($level === 'h3') text-2xl @else text-xl @endif">
    {{ $text }}
</{{ $level }}>
