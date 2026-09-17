<?php

use Livewire\Component;

new class extends Component
{
    public $timeline = [];

    public function mount(): void
    {
        $this->timeline = [
            ['year' => '2012', 'title' => 'Fundação', 'description' => 'Nasce a comunidade PHP-PB'],
            ['year' => '2015', 'title' => 'Primeiro PHPeste', 'description' => 'Organizamos a primeira conferência regional'],
            ['year' => '2018', 'title' => '500 Membros', 'description' => 'Atingimos 500 desenvolvedores ativos'],
            ['year' => '2026', 'title' => 'Presente', 'description' => 'Referência em PHP no Nordeste'],
        ];
    }
};
?>

<section id="sobre" class="py-20 lg:py-32 bg-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center px-3 py-1 bg-blue-500/20 border border-blue-500/30 rounded-full text-blue-300 text-sm font-medium mb-4">
                Nossa História
            </div>
            <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-black text-white mb-6">
                Uma Jornada de <span class="text-gradient">13 Anos</span>
            </h2>
            <p class="text-lg text-slate-300">
                Desde 2012 conectando e fortalecendo a comunidade PHP na Paraíba
            </p>
        </div>

        <!-- Timeline -->
        <div class="relative mb-20">
            <!-- Line -->
            <div class="absolute top-1/2 left-0 right-0 h-0.5 bg-slate-700 hidden lg:block"></div>
            
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 relative">
                @foreach($timeline as $index => $milestone)
                    <div class="text-center">
                        <!-- Dot -->
                        <div class="flex justify-center mb-4">
                            <div class="w-4 h-4 bg-blue-500 rounded-full ring-8 ring-slate-800"></div>
                        </div>
                        
                        <!-- Year -->
                        <div class="font-display text-3xl lg:text-4xl font-black text-white mb-2">{{ $milestone['year'] }}</div>
                        
                        <!-- Title -->
                        <h3 class="font-bold text-white mb-1">{{ $milestone['title'] }}</h3>
                        
                        <!-- Description -->
                        <p class="text-sm text-slate-400">{{ $milestone['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Stats -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <div class="bg-slate-800 rounded-2xl p-8 border border-slate-700 text-center">
                <div class="font-display text-5xl font-black text-white mb-2">13+</div>
                <div class="text-slate-400">Anos de história</div>
            </div>
            <div class="bg-slate-800 rounded-2xl p-8 border border-slate-700 text-center">
                <div class="font-display text-5xl font-black text-white mb-2">500+</div>
                <div class="text-slate-400">Membros ativos</div>
            </div>
            <div class="bg-slate-800 rounded-2xl p-8 border border-slate-700 text-center">
                <div class="font-display text-5xl font-black text-white mb-2">50+</div>
                <div class="text-slate-400">Eventos realizados</div>
            </div>
            <div class="bg-slate-800 rounded-2xl p-8 border border-slate-700 text-center">
                <div class="font-display text-5xl font-black text-white mb-2">6</div>
                <div class="text-slate-400">Edições do PHPeste</div>
            </div>
        </div>

        <!-- Values -->
        <div class="max-w-4xl mx-auto">
            <h3 class="font-display text-2xl lg:text-3xl font-bold text-white text-center mb-12">
                O que nos <span class="text-gradient">move</span>
            </h3>
            
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-slate-800 rounded-2xl p-6 border border-slate-700">
                    <div class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h4 class="font-bold text-white mb-2">Compartilhamento</h4>
                    <p class="text-slate-400 text-sm">Acreditamos no poder do conhecimento compartilhado e no crescimento coletivo.</p>
                </div>

                <div class="bg-slate-800 rounded-2xl p-6 border border-slate-700">
                    <div class="w-12 h-12 bg-violet-500/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h4 class="font-bold text-white mb-2">Comunidade</h4>
                    <p class="text-slate-400 text-sm">Valorizamos conexões genuínas e o suporte mútuo entre desenvolvedores.</p>
                </div>

                <div class="bg-slate-800 rounded-2xl p-6 border border-slate-700">
                    <div class="w-12 h-12 bg-pink-500/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h4 class="font-bold text-white mb-2">Inovação</h4>
                    <p class="text-slate-400 text-sm">Incentivamos a experimentação e a adoção de novas tecnologias e práticas.</p>
                </div>

                <div class="bg-slate-800 rounded-2xl p-6 border border-slate-700">
                    <div class="w-12 h-12 bg-green-500/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h4 class="font-bold text-white mb-2">Qualidade</h4>
                    <p class="text-slate-400 text-sm">Promovemos código limpo, boas práticas e desenvolvimento profissional.</p>
                </div>
            </div>
        </div>
    </div>
</section>
