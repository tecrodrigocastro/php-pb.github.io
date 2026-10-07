<x-layouts.app title="Eventos - PHP-PB">
    <livewire:landing.header />

    <main>
        <!-- Header da seção -->
        <div class="gradient-hero py-20 pt-32">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">Eventos</h1>
                <p class="text-white/80 text-lg max-w-xl mx-auto">
                    Participe dos nossos meetups, workshops e conferências.
                </p>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            @if ($events->count() > 0)
                <div class="space-y-6">
                    @foreach ($events as $event)
                        <div class="group relative bg-ink-800 rounded-2xl hover:bg-ink-700 transition-all overflow-hidden
                            {{ $event->is_featured ? 'ring-1 ring-accent-400/40' : '' }}">

                            @if ($event->is_featured)
                                <div class="absolute top-0 right-0 bg-accent-500 text-ink-950 text-xs font-bold px-4 py-1 rounded-bl-xl">
                                    DESTAQUE
                                </div>
                            @endif

                            <div class="grid lg:grid-cols-12 gap-6 p-6 lg:p-8">
                                <!-- Date Card -->
                                <div class="lg:col-span-2">
                                    <div class="inline-flex lg:block bg-ink-900 rounded-xl p-4 text-center">
                                        <div>
                                            <div class="font-display text-4xl lg:text-5xl font-semibold text-ink-100">{{ $event->starts_at->format('d') }}</div>
                                            <div class="text-accent font-semibold text-sm mt-1">{{ mb_strtoupper($event->starts_at->translatedFormat('M')) }}</div>
                                            <div class="text-ink-400 text-xs">{{ $event->starts_at->format('Y') }}</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Event Info -->
                                <div class="lg:col-span-7">
                                    <h2 class="font-display text-2xl font-semibold text-ink-100 mb-3">{{ $event->title }}</h2>
                                    @if ($event->description)
                                        <p class="text-ink-400 mb-4">{{ $event->description }}</p>
                                    @endif

                                    <div class="flex flex-wrap gap-4 text-sm">
                                        <div class="flex items-center text-ink-400">
                                            <svg class="w-5 h-5 mr-2 text-ink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            {{ $event->starts_at->format('H:i') }}
                                        </div>

                                        <div class="flex items-center text-ink-400">
                                            <svg class="w-5 h-5 mr-2 text-ink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            </svg>
                                            {{ $event->location }}
                                        </div>

                                        <span class="px-3 py-1 bg-accent-500/15 text-accent rounded-full text-xs font-medium">
                                            {{ $event->type->getLabel() }}
                                        </span>
                                    </div>
                                </div>

                                <!-- Actions & Stats -->
                                <div class="lg:col-span-3 flex lg:flex-col items-center lg:items-end justify-between lg:justify-center gap-4">
                                    @if ($event->attendees_count)
                                        <div class="text-center">
                                            <div class="font-display text-3xl font-semibold text-ink-100">{{ $event->attendees_count }}</div>
                                            <div class="text-ink-400 text-xs">confirmados</div>
                                        </div>
                                    @endif

                                    @if ($event->external_url)
                                        <a href="{{ $event->external_url }}" target="_blank" rel="noopener"
                                           class="px-6 py-3 bg-accent-600 hover:bg-accent-700 text-white font-medium rounded-lg transition-all text-center whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent-300">
                                            Confirmar Presença
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-24 text-ink-400">
                    <svg class="w-12 h-12 mx-auto mb-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <p class="text-lg font-medium">Nenhum evento agendado no momento</p>
                </div>
            @endif
        </div>
    </main>

    <livewire:landing.footer />
</x-layouts.app>
