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

<header class="fixed top-0 left-0 right-0 z-50 bg-white/80 dark:bg-gray-950/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-primary-600 rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-lg">PB</span>
                </div>
                <span class="text-xl font-bold text-gray-900 dark:text-white">PHP-PB</span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#sobre" class="text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors font-medium">
                    Sobre
                </a>
                <a href="#comunidade" class="text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors font-medium">
                    Comunidade
                </a>
                <a href="#eventos" class="text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors font-medium">
                    Eventos
                </a>
                <a href="/blog" class="text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors font-medium">
                    Blog
                </a>
            </nav>

            <!-- CTA Button -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="https://t.me/phppb" target="_blank" rel="noopener"
                   class="inline-flex items-center px-4 py-2 bg-primary-600 hover:bg-primary-700 text-white font-medium rounded-lg transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/>
                    </svg>
                    Entrar no Telegram
                </a>
            </div>

            <!-- Mobile menu button -->
            <button wire:click="toggleMobileMenu" class="md:hidden p-2 rounded-lg text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!$wire.mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="$wire.mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div x-show="$wire.mobileMenuOpen" x-transition class="md:hidden bg-white dark:bg-gray-950 border-t border-gray-200 dark:border-gray-800">
        <div class="px-4 py-4 space-y-3">
            <a href="#sobre" class="block text-gray-600 dark:text-gray-300 hover:text-primary-600 font-medium py-2">Sobre</a>
            <a href="#comunidade" class="block text-gray-600 dark:text-gray-300 hover:text-primary-600 font-medium py-2">Comunidade</a>
            <a href="#eventos" class="block text-gray-600 dark:text-gray-300 hover:text-primary-600 font-medium py-2">Eventos</a>
            <a href="/blog" class="block text-gray-600 dark:text-gray-300 hover:text-primary-600 font-medium py-2">Blog</a>
            <a href="https://t.me/phppb" target="_blank" rel="noopener"
               class="block w-full text-center px-4 py-2 bg-primary-600 hover:bg-primary-700 text-white font-medium rounded-lg transition-colors">
                Entrar no Telegram
            </a>
        </div>
    </div>
</header>
