<?php

use Livewire\Component;

new class extends Component
{
    public bool $mobileMenuOpen = false;

    public function toggleMobileMenu(): void
    {
        $this->mobileMenuOpen = !$this->mobileMenuOpen;
    }
};
?>

<header
    x-data="{
        theme: document.documentElement.dataset.theme || 'dark',
        toggleTheme() {
            this.theme = this.theme === 'light' ? 'dark' : 'light';
            document.documentElement.dataset.theme = this.theme === 'light' ? 'light' : '';
            localStorage.setItem('theme', this.theme);
        },
    }"
    class="fixed top-0 left-0 right-0 z-50 bg-ink-950/80 backdrop-blur-md border-b border-ink-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-3 rounded-lg focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent-400">
                <img src="{{ asset('images/logo_phppb.png') }}" alt="PHP-PB" class="w-10 h-10 object-contain">
                <span class="text-xl font-semibold text-ink-100 font-display">PHP-PB</span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#sobre" class="text-ink-400 hover:text-accent transition-colors font-medium rounded focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent-400">
                    Sobre
                </a>
                <a href="#comunidade" class="text-ink-400 hover:text-accent transition-colors font-medium rounded focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent-400">
                    Comunidade
                </a>
                <a href="#eventos" class="text-ink-400 hover:text-accent transition-colors font-medium rounded focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent-400">
                    Eventos
                </a>
                <a href="/blog" class="font-medium rounded transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent-400 {{ request()->routeIs('blog.*') ? 'text-accent' : 'text-ink-400 hover:text-accent' }}">
                    Blog
                </a>
                <a href="{{ route('jobs.index') }}" class="font-medium rounded transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent-400 {{ request()->routeIs('jobs.index') ? 'text-accent' : 'text-ink-400 hover:text-accent' }}">
                    Vagas
                </a>
                <a href="{{ route('speakers.index') }}" class="font-medium rounded transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent-400 {{ request()->routeIs('speakers.index') ? 'text-accent' : 'text-ink-400 hover:text-accent' }}">
                    Palestrantes
                </a>
            </nav>

            <!-- CTA Button -->
            <div class="hidden md:flex items-center space-x-4">
                <button
                    @click="toggleTheme"
                    type="button"
                    aria-label="Alternar tema claro/escuro"
                    class="p-2 rounded-lg text-ink-400 hover:bg-ink-800 hover:text-accent transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent-400"
                >
                    <svg x-show="theme === 'dark'" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    <svg x-show="theme === 'light'" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 1020.354 15.354z"/>
                    </svg>
                </button>
                <a href="https://chat.whatsapp.com/JaWCta8t2DF9Af0zgIb8LB?mode=gi_t" target="_blank" rel="noopener"
                   class="inline-flex items-center px-4 py-2 bg-accent-600 hover:bg-accent-700 active:scale-[0.98] text-white font-semibold rounded-lg transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent-300">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Entrar
                </a>
            </div>

            <!-- Mobile menu button -->
            <button wire:click="toggleMobileMenu" class="md:hidden p-2 rounded-lg text-ink-400 hover:bg-ink-800 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent-400">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!$wire.mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="$wire.mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div x-show="$wire.mobileMenuOpen" x-transition class="md:hidden bg-ink-950 border-t border-ink-700">
        <div class="px-4 py-4 space-y-3">
            <a href="#sobre" class="block text-ink-400 hover:text-accent font-medium py-2">Sobre</a>
            <a href="#comunidade" class="block text-ink-400 hover:text-accent font-medium py-2">Comunidade</a>
            <a href="#eventos" class="block text-ink-400 hover:text-accent font-medium py-2">Eventos</a>
            <a href="/blog" class="block text-ink-400 hover:text-accent font-medium py-2">Blog</a>
            <a href="{{ route('jobs.index') }}" class="block text-ink-400 hover:text-accent font-medium py-2">Vagas</a>
            <a href="{{ route('speakers.index') }}" class="block text-ink-400 hover:text-accent font-medium py-2">Palestrantes</a>
            <button @click="toggleTheme" type="button" class="flex items-center gap-2 text-ink-400 hover:text-accent font-medium py-2">
                <svg x-show="theme === 'dark'" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                </svg>
                <svg x-show="theme === 'light'" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 1020.354 15.354z"/>
                </svg>
                <span x-text="theme === 'dark' ? 'Tema claro' : 'Tema escuro'"></span>
            </button>
            <a href="https://chat.whatsapp.com/JaWCta8t2DF9Af0zgIb8LB?mode=gi_t" target="_blank" rel="noopener"
               class="block w-full text-center px-4 py-2 bg-accent-600 hover:bg-accent-700 text-white font-semibold rounded-lg transition-colors">
                Entrar no WhatsApp
            </a>
        </div>
    </div>
</header>
