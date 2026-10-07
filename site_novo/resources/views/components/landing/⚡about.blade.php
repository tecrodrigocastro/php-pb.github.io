<?php

use Livewire\Component;

new class extends Component
{
    public int $foundedYear = 2012;

    public int $yearsActive = 0;

    public array $timeline = [];

    public function mount(): void
    {
        $this->yearsActive = now()->year - $this->foundedYear;

        $this->timeline = [
            ['year' => (string) $this->foundedYear, 'title' => 'Fundação', 'description' => 'Nasce a comunidade PHP-PB'],
            ['year' => '2015', 'title' => 'Primeiro PHPeste', 'description' => 'Organizamos a primeira conferência regional'],
            ['year' => '2018', 'title' => '500 Membros', 'description' => 'Atingimos 500 desenvolvedores ativos'],
            ['year' => (string) now()->year, 'title' => 'Presente', 'description' => 'Referência em PHP no Nordeste'],
        ];
    }
};
?>

<section id="sobre" class="py-20 lg:py-32 bg-ink-950 bg-noise">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="max-w-2xl mb-16">
            <div class="text-accent text-sm font-semibold tracking-wide mb-4">
                Nossa história
            </div>
            <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-semibold text-ink-100 mb-6 text-balance">
                Uma jornada de <span class="text-accent">{{ $yearsActive }} anos</span>
            </h2>
            <p class="text-lg text-ink-400">
                Desde 2012 conectando e fortalecendo a comunidade PHP na Paraíba
            </p>
        </div>

        <!-- Timeline -->
        <div class="relative mb-20">
            <!-- Line -->
            <div class="absolute top-1/2 left-0 right-0 h-px bg-ink-700 hidden lg:block"></div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 relative">
                @foreach($timeline as $index => $milestone)
                    <div class="text-center">
                        <!-- Dot -->
                        <div class="flex justify-center mb-4">
                            <div class="w-3 h-3 bg-accent-400 rounded-full ring-8 ring-ink-950"></div>
                        </div>

                        <!-- Year -->
                        <div class="font-display text-3xl lg:text-4xl font-semibold text-ink-100 mb-2">{{ $milestone['year'] }}</div>

                        <!-- Title -->
                        <h3 class="font-semibold text-ink-100 mb-1">{{ $milestone['title'] }}</h3>

                        <!-- Description -->
                        <p class="text-sm text-ink-400">{{ $milestone['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-2 lg:grid-cols-4 divide-x divide-y lg:divide-y-0 divide-ink-700 bg-ink-900 rounded-2xl mb-16 overflow-hidden">
            <div class="p-8 text-center">
                <div class="font-display text-5xl font-semibold text-ink-100 mb-2">{{ $yearsActive }}+</div>
                <div class="text-ink-400">Anos de história</div>
            </div>
            <div class="p-8 text-center">
                <div class="font-display text-5xl font-semibold text-ink-100 mb-2">500+</div>
                <div class="text-ink-400">Membros ativos</div>
            </div>
            <div class="p-8 text-center">
                <div class="font-display text-5xl font-semibold text-ink-100 mb-2">50+</div>
                <div class="text-ink-400">Eventos realizados</div>
            </div>
            <div class="p-8 text-center">
                <div class="font-display text-5xl font-semibold text-ink-100 mb-2">6</div>
                <div class="text-ink-400">Edições do PHPeste</div>
            </div>
        </div>

        <!-- Values -->
        <div class="max-w-4xl mx-auto">
            <h3 class="font-display text-2xl lg:text-3xl font-semibold text-ink-100 text-center mb-12">
                O que nos <span class="text-accent">move</span>
            </h3>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-ink-900 rounded-2xl p-6">
                    <div class="w-12 h-12 bg-accent-500/15 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-ink-100 mb-2">Compartilhamento</h4>
                    <p class="text-ink-400 text-sm">Acreditamos no poder do conhecimento compartilhado e no crescimento coletivo.</p>
                </div>

                <div class="bg-ink-900 rounded-2xl p-6">
                    <div class="w-12 h-12 bg-accent-500/15 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-ink-100 mb-2">Comunidade</h4>
                    <p class="text-ink-400 text-sm">Valorizamos conexões genuínas e o suporte mútuo entre desenvolvedores.</p>
                </div>

                <div class="bg-ink-900 rounded-2xl p-6">
                    <div class="w-12 h-12 bg-accent-500/15 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-ink-100 mb-2">Inovação</h4>
                    <p class="text-ink-400 text-sm">Incentivamos a experimentação e a adoção de novas tecnologias e práticas.</p>
                </div>

                <div class="bg-ink-900 rounded-2xl p-6">
                    <div class="w-12 h-12 bg-accent-500/15 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-ink-100 mb-2">Qualidade</h4>
                    <p class="text-ink-400 text-sm">Promovemos código limpo, boas práticas e desenvolvimento profissional.</p>
                </div>
            </div>
        </div>
    </div>
</section>
