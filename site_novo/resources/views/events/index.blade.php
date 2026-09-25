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
                        <div class="group relative bg-slate-900 rounded-2xl border border-slate-700 hover:border-{{ $event->is_featured ? 'pink' : 'blue' }}-500/50 transition-all overflow-hidden
                            {{ $event->is_featured ? 'ring-2 ring-pink-500/20' : '' }}">

                            @if ($event->is_featured)
                                <div class="absolute top-0 right-0 bg-gradient-to-r from-pink-500 to-violet-500 text-white text-xs font-bold px-4 py-1 rounded-bl-xl">
                                    DESTAQUE
                                </div>
                            @endif

                            <div class="grid lg:grid-cols-12 gap-6 p-6 lg:p-8">
                                <!-- Date Card -->
                                <div class="lg:col-span-2">
                                    <div class="inline-flex lg:block bg-slate-800 rounded-xl p-4 text-center border border-slate-700">
                                        <div>
                                            <div class="font-display text-4xl lg:text-5xl font-black text-white">{{ $event->starts_at->format('d') }}</div>
                                            <div class="text-blue-400 font-bold text-sm mt-1">{{ mb_strtoupper($event->starts_at->translatedFormat('M')) }}</div>
                                            <div class="text-slate-500 text-xs">{{ $event->starts_at->format('Y') }}</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Event Info -->
                                <div class="lg:col-span-7">
                                    <h2 class="font-display text-2xl font-bold text-white mb-3">{{ $event->title }}</h2>
                                    @if ($event->description)
                                        <p class="text-slate-400 mb-4">{{ $event->description }}</p>
                                    @endif

                                    <div class="flex flex-wrap gap-4 text-sm">
                                        <div class="flex items-center text-slate-300">
                                            <svg class="w-5 h-5 mr-2 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            {{ $event->starts_at->format('H:i') }}
                                        </div>

                                        <div class="flex items-center text-slate-300">
                                            <svg class="w-5 h-5 mr-2 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            </svg>
                                            {{ $event->location }}
                                        </div>

                                        <span class="px-3 py-1 bg-{{ $event->type->value === 'presencial' ? 'green' : 'blue' }}-500/20 border border-{{ $event->type->value === 'presencial' ? 'green' : 'blue' }}-500/30 text-{{ $event->type->value === 'presencial' ? 'green' : 'blue' }}-300 rounded-full text-xs font-medium">
                                            {{ $event->type->getLabel() }}
                                        </span>
                                    </div>
                                </div>

                                <!-- Actions & Stats -->
                                <div class="lg:col-span-3 flex lg:flex-col items-center lg:items-end justify-between lg:justify-center gap-4">
                                    @if ($event->attendees_count)
                                        <div class="text-center">
                                            <div class="font-display text-3xl font-black text-white">{{ $event->attendees_count }}</div>
                                            <div class="text-slate-400 text-xs">confirmados</div>
                                        </div>
                                    @endif

                                    @if ($event->external_url)
                                        <a href="{{ $event->external_url }}" target="_blank" rel="noopener"
                                           class="px-6 py-3 bg-gradient-to-r from-blue-500 to-violet-600 hover:from-blue-600 hover:to-violet-700 text-white font-medium rounded-lg transition-all text-center whitespace-nowrap">
                                            Confirmar Presença
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-24 text-gray-400 dark:text-gray-600">
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
