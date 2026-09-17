<?php

use Livewire\Component;

new class extends Component {
    public $events = [];

    public function mount(): void
    {
        // Mock data - em produção seria do banco de dados
        $this->events = [
            [
                'title' => 'Meetup Laravel + Livewire',
                'date' => '28',
                'month' => 'MAI',
                'year' => '2026',
                'time' => '19:00',
                'location' => 'Hub PB, João Pessoa',
                'type' => 'presencial',
                'description' => 'Vamos explorar as novidades do Laravel 12 e como criar aplicações reativas com Livewire 4.',
                'attendees' => 45,
                'status' => 'upcoming'
            ],
            [
                'title' => 'Workshop: API REST com Symfony',
                'date' => '15',
                'month' => 'JUN',
                'year' => '2026',
                'time' => '14:00',
                'location' => 'Online via Google Meet',
                'type' => 'online',
                'description' => 'Workshop prático sobre construção de APIs RESTful profissionais usando Symfony e API Platform.',
                'attendees' => 120,
                'status' => 'upcoming'
            ],
            [
                'title' => 'PHPeste 2026',
                'date' => '20',
                'month' => 'JUL',
                'year' => '2026',
                'time' => '08:00',
                'location' => 'Recife, PE',
                'type' => 'presencial',
                'description' => 'A maior conferência PHP do Nordeste está de volta! 3 dias de conteúdo, networking e muito código.',
                'attendees' => 500,
                'status' => 'highlighted'
            ]
        ];
    }
};
?>

<section id="eventos" class="py-20 lg:py-32 bg-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center px-3 py-1 bg-pink-500/20 border border-pink-500/30 rounded-full text-pink-300 text-sm font-medium mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                Próximos Encontros
            </div>
            <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-black text-white mb-6">
                Eventos da <span class="text-gradient">Comunidade</span>
            </h2>
            <p class="text-lg text-slate-300">
                Participe dos nossos meetups, workshops e conferências
            </p>
        </div>

        <!-- Events Timeline -->
        <div class="space-y-6">
            @foreach($events as $index => $event)
                <div class="group relative bg-slate-900 rounded-2xl border border-slate-700 hover:border-{{ $event['status'] === 'highlighted' ? 'pink' : 'blue' }}-500/50 transition-all overflow-hidden
                    {{ $event['status'] === 'highlighted' ? 'ring-2 ring-pink-500/20' : '' }}">
                    
                    <!-- Highlight badge -->
                    @if($event['status'] === 'highlighted')
                        <div class="absolute top-0 right-0 bg-gradient-to-r from-pink-500 to-violet-500 text-white text-xs font-bold px-4 py-1 rounded-bl-xl">
                            DESTAQUE
                        </div>
                    @endif

                    <div class="grid lg:grid-cols-12 gap-6 p-6 lg:p-8">
                        <!-- Date Card -->
                        <div class="lg:col-span-2">
                            <div class="inline-flex lg:block bg-slate-800 rounded-xl p-4 text-center border border-slate-700">
                                <div>
                                    <div class="font-display text-4xl lg:text-5xl font-black text-white">{{ $event['date'] }}</div>
                                    <div class="text-blue-400 font-bold text-sm mt-1">{{ $event['month'] }}</div>
                                    <div class="text-slate-500 text-xs">{{ $event['year'] }}</div>
                                </div>
                            </div>
                        </div>

                        <!-- Event Info -->
                        <div class="lg:col-span-7">
                            <h3 class="font-display text-2xl font-bold text-white mb-3">{{ $event['title'] }}</h3>
                            <p class="text-slate-400 mb-4">{{ $event['description'] }}</p>
                            
                            <div class="flex flex-wrap gap-4 text-sm">
                                <!-- Time -->
                                <div class="flex items-center text-slate-300">
                                    <svg class="w-5 h-5 mr-2 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    {{ $event['time'] }}
                                </div>
                                
                                <!-- Location -->
                                <div class="flex items-center text-slate-300">
                                    <svg class="w-5 h-5 mr-2 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    {{ $event['location'] }}
                                </div>

                                <!-- Type badge -->
                                <span class="px-3 py-1 bg-{{ $event['type'] === 'presencial' ? 'green' : 'blue' }}-500/20 border border-{{ $event['type'] === 'presencial' ? 'green' : 'blue' }}-500/30 text-{{ $event['type'] === 'presencial' ? 'green' : 'blue' }}-300 rounded-full text-xs font-medium">
                                    {{ ucfirst($event['type']) }}
                                </span>
                            </div>
                        </div>

                        <!-- Actions & Stats -->
                        <div class="lg:col-span-3 flex lg:flex-col items-center lg:items-end justify-between lg:justify-center gap-4">
                            <!-- Attendees -->
                            <div class="text-center">
                                <div class="font-display text-3xl font-black text-white">{{ $event['attendees'] }}</div>
                                <div class="text-slate-400 text-xs">confirmados</div>
                            </div>

                            <!-- CTA -->
                            <a href="#" class="px-6 py-3 bg-gradient-to-r from-blue-500 to-violet-600 hover:from-blue-600 hover:to-violet-700 text-white font-medium rounded-lg transition-all text-center whitespace-nowrap">
                                Confirmar Presença
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- View all CTA -->
        <div class="text-center mt-12">
            <a href="#" class="inline-flex items-center px-6 py-3 bg-slate-700 hover:bg-slate-600 text-white font-medium rounded-lg transition-all">
                Ver todos os eventos
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>
</section>
