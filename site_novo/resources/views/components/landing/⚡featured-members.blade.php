<?php

use Livewire\Component;

new class extends Component {
    public $members = [];

    public function mount(): void
    {
        // Mock data - em produção seria do banco de dados
        $this->members = [
            [
                'name' => 'João Paulo Santos',
                'role' => 'Senior PHP Developer',
                'avatar' => 'https://ui-avatars.com/api/?name=Joao+Paulo&background=16304a&color=a9d2ec&size=256',
                'bio' => 'Apaixonado por Laravel e arquitetura limpa. Contribuidor open source.',
                'github' => 'https://github.com',
                'linkedin' => 'https://linkedin.com',
                'stack' => ['Laravel', 'Vue.js', 'MySQL', 'Docker']
            ],
            [
                'name' => 'Maria Silva',
                'role' => 'Full Stack Developer',
                'avatar' => 'https://ui-avatars.com/api/?name=Maria+Silva&background=16304a&color=a9d2ec&size=256',
                'bio' => 'Desenvolvedora full stack com foco em soluções escaláveis e performance.',
                'github' => 'https://github.com',
                'linkedin' => 'https://linkedin.com',
                'stack' => ['PHP', 'React', 'PostgreSQL', 'AWS']
            ],
            [
                'name' => 'Carlos Eduardo',
                'role' => 'Tech Lead',
                'avatar' => 'https://ui-avatars.com/api/?name=Carlos+Eduardo&background=16304a&color=a9d2ec&size=256',
                'bio' => 'Liderando times de desenvolvimento há 10 anos. Mentor e palestrante.',
                'github' => 'https://github.com',
                'linkedin' => 'https://linkedin.com',
                'stack' => ['Symfony', 'API Platform', 'Redis', 'MongoDB']
            ]
        ];
    }
};
?>

<section id="membros" class="py-20 lg:py-32 bg-ink-950 bg-noise">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="max-w-2xl mb-16">
            <div class="text-accent-400 text-sm font-semibold tracking-wide mb-4">
                Comunidade
            </div>
            <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-semibold text-ink-100 mb-6 text-balance">
                Membros em <span class="text-accent-400">destaque</span>
            </h2>
            <p class="text-lg text-ink-400">
                Conheça alguns dos desenvolvedores mais ativos da nossa comunidade
            </p>
        </div>

        <!-- Members Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($members as $member)
                <div class="group bg-ink-900 rounded-2xl p-8 hover:bg-ink-800 transition-all">
                    <!-- Avatar -->
                    <div class="relative inline-block mb-6">
                        <img src="{{ $member['avatar'] }}" alt="{{ $member['name'] }}"
                             class="w-24 h-24 rounded-2xl object-cover">
                        <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-accent-400 rounded-full border-4 border-ink-900"></div>
                    </div>

                    <!-- Info -->
                    <h3 class="font-display text-xl font-semibold text-ink-100 mb-1">{{ $member['name'] }}</h3>
                    <p class="text-accent-400 text-sm font-medium mb-4">{{ $member['role'] }}</p>
                    <p class="text-ink-400 text-sm mb-6">{{ $member['bio'] }}</p>

                    <!-- Tech Stack -->
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach($member['stack'] as $tech)
                            <span class="px-3 py-1 bg-ink-800 text-ink-400 text-xs font-medium rounded-full">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>

                    <!-- Social Links -->
                    <div class="flex gap-3">
                        <a href="{{ $member['github'] }}" target="_blank" rel="noopener"
                           class="flex-1 flex items-center justify-center px-4 py-2 bg-ink-800 hover:bg-ink-700 text-ink-400 rounded-lg transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        <a href="{{ $member['linkedin'] }}" target="_blank" rel="noopener"
                           class="flex-1 flex items-center justify-center px-4 py-2 bg-ink-800 hover:bg-ink-700 text-ink-400 rounded-lg transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- CTA -->
        <div class="text-center mt-12">
            <p class="text-ink-400 mb-4">Quer aparecer aqui?</p>
            <a href="https://chat.whatsapp.com/JaWCta8t2DF9Af0zgIb8LB?mode=gi_t" target="_blank" rel="noopener"
               class="inline-flex items-center px-6 py-3 bg-accent-500 hover:bg-accent-600 active:scale-[0.98] text-ink-950 font-semibold rounded-lg transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent-300">
                Junte-se à comunidade
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>
</section>
