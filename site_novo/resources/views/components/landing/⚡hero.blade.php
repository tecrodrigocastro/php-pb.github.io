<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<section class="relative min-h-screen flex items-center gradient-hero overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>

    <!-- PHP Logo large background -->
    <div class="absolute right-0 top-1/2 -translate-y-1/2 opacity-5 hidden lg:block">
        <svg class="w-[600px] h-[600px]" viewBox="0 0 256 134" fill="currentColor">
            <ellipse cx="128" cy="67" rx="128" ry="67" fill="white"/>
            <path d="M39.844 95.375l7.672-39.813h15.953c7.406 0 12.454 1.36 15.141 4.078 2.688 2.719 3.39 6.687 2.11 11.906-0.61 2.563-1.61 4.907-3 7.032-1.391 2.125-3.094 3.953-5.11 5.485-2.469 1.89-5.141 3.25-8.015 4.078-2.875 0.828-6.453 1.234-10.735 1.234h-6.781l-2.672 14h-7.563v-8zm13.953-20.625h5.313c4.125 0 7.218-0.563 9.281-1.688 2.062-1.125 3.438-3.188 4.125-6.188 0.719-3.218 0.281-5.406-1.313-6.562-1.594-1.157-4.5-1.735-8.718-1.735h-4.985l-3.703 16.172zM93.531 55.563l-0.984 5.219c1.266-1.922 2.906-3.438 4.922-4.547 2.016-1.109 4.219-1.672 6.609-1.672 3.656 0 6.328 1.078 8.016 3.234 1.688 2.157 2.125 5.14 1.313 8.953l-5.047 25.25h-7.5l4.797-24.172c0.453-2.25 0.266-3.969-0.563-5.156-0.828-1.188-2.328-1.781-4.5-1.781-2.547 0-4.672 0.844-6.375 2.531-1.703 1.688-2.859 4.063-3.469 7.125l-4.297 21.453h-7.5l7.672-39.813h7.906v3.376zM125.453 55.563l-1.047 5.219c1.266-1.922 2.906-3.438 4.922-4.547 2.016-1.109 4.219-1.672 6.609-1.672 3.656 0 6.328 1.078 8.016 3.234 1.688 2.157 2.125 5.14 1.313 8.953l-5.047 25.25h-7.5l4.797-24.172c0.453-2.25 0.266-3.969-0.563-5.156-0.828-1.188-2.328-1.781-4.5-1.781-2.547 0-4.672 0.844-6.375 2.531-1.703 1.688-2.859 4.063-3.469 7.125l-4.297 21.453h-7.5l7.672-39.813h7.969v3.376z" fill="#4169a4"/>
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div class="text-center lg:text-left">
                <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-white/90 text-sm font-medium mb-8">
                    <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                    Comunidade Ativa desde 2012
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                    Conectando <span class="text-gradient">desenvolvedores</span> PHP na Paraíba
                </h1>

                <p class="text-lg sm:text-xl text-white/80 mb-10 max-w-xl mx-auto lg:mx-0">
                    Uma comunidade dedicada a compartilhar conhecimento, networking e fortalecer o ecossistema PHP no estado.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="https://t.me/phppb" target="_blank" rel="noopener"
                       class="inline-flex items-center justify-center px-6 py-3 bg-white text-primary-700 font-semibold rounded-lg hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/>
                        </svg>
                        Entrar na comunidade
                    </a>
                    <a href="#sobre"
                       class="inline-flex items-center justify-center px-6 py-3 border-2 border-white/30 text-white font-semibold rounded-lg hover:bg-white/10 transition-all">
                        Saiba mais
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                </div>

                <!-- Stats -->
                <div class="mt-12 grid grid-cols-3 gap-8 max-w-lg mx-auto lg:mx-0">
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-bold text-white">500+</div>
                        <div class="text-white/60 text-sm">Membros</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-bold text-white">13+</div>
                        <div class="text-white/60 text-sm">Anos ativos</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-bold text-white">50+</div>
                        <div class="text-white/60 text-sm">Eventos</div>
                    </div>
                </div>
            </div>

            <!-- Terminal/Code illustration -->
            <div class="hidden lg:block">
                <div class="bg-gray-900 rounded-xl shadow-2xl overflow-hidden border border-gray-700">
                    <!-- Terminal header -->
                    <div class="flex items-center px-4 py-3 bg-gray-800 border-b border-gray-700">
                        <div class="flex space-x-2">
                            <div class="w-3 h-3 rounded-full bg-red-500"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        </div>
                        <div class="ml-4 text-gray-400 text-sm font-mono">welcome.php</div>
                    </div>
                    <!-- Terminal content -->
                    <div class="p-6 font-mono text-sm">
                        <div class="text-gray-500">&lt;?php</div>
                        <div class="mt-2">
                            <span class="text-purple-400">namespace</span>
                            <span class="text-white"> PHPPB;</span>
                        </div>
                        <div class="mt-4">
                            <span class="text-purple-400">class</span>
                            <span class="text-yellow-300"> Comunidade</span>
                        </div>
                        <div class="text-white">{</div>
                        <div class="ml-4 mt-2">
                            <span class="text-purple-400">public function</span>
                            <span class="text-blue-300"> bemVindo</span>
                            <span class="text-white">(): </span>
                            <span class="text-yellow-300">string</span>
                        </div>
                        <div class="ml-4 text-white">{</div>
                        <div class="ml-8">
                            <span class="text-purple-400">return</span>
                            <span class="text-green-400"> "Olá, dev! 👋"</span>
                            <span class="text-white">;</span>
                        </div>
                        <div class="ml-4 text-white">}</div>
                        <div class="text-white">}</div>
                        <div class="mt-4 flex items-center">
                            <span class="text-green-400">$</span>
                            <span class="text-white ml-2">php artisan inspire</span>
                            <span class="w-2 h-5 bg-white ml-1 animate-pulse"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
        </svg>
    </div>
</section>
