<?php

use Livewire\Component;

new class extends Component {
    public $activities = [];

    public function mount(): void
    {
        // Mock data - em produção seria do banco de dados
        $this->activities = [
            [
                'type' => 'post',
                'icon' => 'chat',
                'color' => 'blue',
                'title' => 'Nova discussão sobre Laravel 12',
                'description' => 'João Paulo iniciou uma discussão sobre as novidades do Laravel 12 no grupo.',
                'time' => '2 horas atrás',
                'user' => [
                    'name' => 'João Paulo',
                    'avatar' => 'https://ui-avatars.com/api/?name=Joao+Paulo&background=3b82f6&color=fff'
                ]
            ],
            [
                'type' => 'article',
                'icon' => 'document',
                'color' => 'violet',
                'title' => 'Novo artigo publicado',
                'description' => 'Como otimizar queries com Eloquent - Um guia completo',
                'time' => '1 dia atrás',
                'user' => [
                    'name' => 'Maria Silva',
                    'avatar' => 'https://ui-avatars.com/api/?name=Maria+Silva&background=8b5cf6&color=fff'
                ]
            ],
            [
                'type' => 'event',
                'icon' => 'calendar',
                'color' => 'pink',
                'title' => 'Meetup confirmado',
                'description' => 'Meetup Laravel + Livewire marcado para 28 de Maio',
                'time' => '3 dias atrás',
                'user' => null
            ],
            [
                'type' => 'member',
                'icon' => 'user',
                'color' => 'green',
                'title' => 'Novos membros',
                'description' => '5 novos desenvolvedores entraram na comunidade',
                'time' => '1 semana atrás',
                'user' => null
            ]
        ];
    }
};
?>

<section id="atividades" class="py-20 lg:py-32 bg-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center px-3 py-1 bg-blue-500/20 border border-blue-500/30 rounded-full text-blue-300 text-sm font-medium mb-4">
                <span class="w-2 h-2 bg-blue-400 rounded-full mr-2 animate-pulse"></span>
                Acontecendo agora
            </div>
            <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-black text-white mb-6">
                Atividade <span class="text-gradient">Recente</span>
            </h2>
            <p class="text-lg text-slate-300">
                Veja o que está rolando na comunidade
            </p>
        </div>

        <!-- Activity Feed -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($activities as $activity)
                <div class="group bg-slate-900 rounded-2xl p-6 border border-slate-700 hover:border-{{ $activity['color'] }}-500/50 transition-all hover:-translate-y-1">
                    <!-- Icon -->
                    <div class="w-12 h-12 bg-{{ $activity['color'] }}-500/20 rounded-xl flex items-center justify-center mb-4 group-hover:bg-{{ $activity['color'] }}-500/30 transition-colors">
                        @if($activity['icon'] === 'chat')
                            <svg class="w-6 h-6 text-{{ $activity['color'] }}-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                        @elseif($activity['icon'] === 'document')
                            <svg class="w-6 h-6 text-{{ $activity['color'] }}-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        @elseif($activity['icon'] === 'calendar')
                            <svg class="w-6 h-6 text-{{ $activity['color'] }}-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        @else
                            <svg class="w-6 h-6 text-{{ $activity['color'] }}-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        @endif
                    </div>

                    <!-- Content -->
                    <h3 class="font-bold text-white mb-2 text-lg">{{ $activity['title'] }}</h3>
                    <p class="text-slate-400 text-sm mb-4 line-clamp-2">{{ $activity['description'] }}</p>

                    <!-- Footer -->
                    <div class="flex items-center justify-between">
                        @if($activity['user'])
                            <div class="flex items-center">
                                <img src="{{ $activity['user']['avatar'] }}" alt="{{ $activity['user']['name'] }}" class="w-6 h-6 rounded-full mr-2">
                                <span class="text-xs text-slate-500">{{ $activity['user']['name'] }}</span>
                            </div>
                        @else
                            <div></div>
                        @endif
                        <span class="text-xs text-slate-500">{{ $activity['time'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- CTA -->
        <div class="text-center mt-12">
            <a href="https://chat.whatsapp.com/JaWCta8t2DF9Af0zgIb8LB?mode=gi_t" target="_blank" rel="noopener"
               class="inline-flex items-center px-6 py-3 bg-slate-700 hover:bg-slate-600 text-white font-medium rounded-lg transition-all">
                Ver todas as atividades
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>
</section>
