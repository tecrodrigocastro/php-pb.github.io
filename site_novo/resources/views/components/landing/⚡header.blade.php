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

<header class="fixed top-0 left-0 right-0 z-50 bg-slate-900/80 backdrop-blur-md border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-3">
                <img src="{{ asset('images/logo_phppb.png') }}" alt="PHP-PB" class="w-10 h-10 object-contain">
                <span class="text-xl font-bold text-white font-display">PHP-PB</span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#sobre" class="text-slate-300 hover:text-blue-400 transition-colors font-medium">
                    Sobre
                </a>
                <a href="#comunidade" class="text-slate-300 hover:text-blue-400 transition-colors font-medium">
                    Comunidade
                </a>
                <a href="#eventos" class="text-slate-300 hover:text-blue-400 transition-colors font-medium">
                    Eventos
                </a>
                <a href="/blog" class="text-slate-300 hover:text-blue-400 transition-colors font-medium">
                    Blog
                </a>
                <a href="{{ route('jobs.index') }}" class="text-slate-300 hover:text-blue-400 transition-colors font-medium">
                    Vagas
                </a>
                <a href="{{ route('speakers.index') }}" class="text-slate-300 hover:text-blue-400 transition-colors font-medium">
                    Palestrantes
                </a>
            </nav>

            <!-- CTA Button -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="https://chat.whatsapp.com/JaWCta8t2DF9Af0zgIb8LB?mode=gi_t" target="_blank" rel="noopener"
                   class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-500 to-violet-600 hover:from-blue-600 hover:to-violet-700 text-white font-medium rounded-lg transition-all">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Entrar
                </a>
            </div>

            <!-- Mobile menu button -->
            <button wire:click="toggleMobileMenu" class="md:hidden p-2 rounded-lg text-slate-300 hover:bg-slate-800">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!$wire.mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="$wire.mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div x-show="$wire.mobileMenuOpen" x-transition class="md:hidden bg-slate-900 border-t border-slate-800">
        <div class="px-4 py-4 space-y-3">
            <a href="#sobre" class="block text-slate-300 hover:text-blue-400 font-medium py-2">Sobre</a>
            <a href="#comunidade" class="block text-slate-300 hover:text-blue-400 font-medium py-2">Comunidade</a>
            <a href="#eventos" class="block text-slate-300 hover:text-blue-400 font-medium py-2">Eventos</a>
            <a href="/blog" class="block text-slate-300 hover:text-blue-400 font-medium py-2">Blog</a>
            <a href="{{ route('jobs.index') }}" class="block text-slate-300 hover:text-blue-400 font-medium py-2">Vagas</a>
            <a href="{{ route('speakers.index') }}" class="block text-slate-300 hover:text-blue-400 font-medium py-2">Palestrantes</a>
            <a href="https://chat.whatsapp.com/JaWCta8t2DF9Af0zgIb8LB?mode=gi_t" target="_blank" rel="noopener"
               class="block w-full text-center px-4 py-2 bg-gradient-to-r from-blue-500 to-violet-600 text-white font-medium rounded-lg transition-colors">
                Entrar no WhatsApp
            </a>
        </div>
    </div>
</header>
