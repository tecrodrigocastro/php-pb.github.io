<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<section class="relative min-h-screen flex items-center gradient-hero overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0"
            style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
        </div>
    </div>

    <!-- PHP Logo large background -->
    <div class="absolute right-0 top-1/2 -translate-y-1/2 opacity-5 hidden lg:block">
        <img src="{{ asset('images/php-pb-logo.svg') }}" width="600" height="600" alt="PHP-PB Logo">
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div class="text-center lg:text-left">
                <div
                    class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-white/90 text-sm font-medium mb-8">
                    <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                    Comunidade Ativa desde 2012
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                    Conectando <span class="text-gradient">desenvolvedores</span> PHP na Paraíba
                </h1>

                <p class="text-lg sm:text-xl text-white/80 mb-10 max-w-xl mx-auto lg:mx-0">
                    Uma comunidade dedicada a compartilhar conhecimento, networking e fortalecer o ecossistema PHP no
                    estado.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="https://chat.whatsapp.com/JaWCta8t2DF9Af0zgIb8LB?mode=gi_t" target="_blank" rel="noopener"
                        class="inline-flex items-center justify-center px-6 py-3 bg-white text-primary-700 font-semibold rounded-lg hover:bg-gray-100 transition-all shadow-lg hover:shadow-xl">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                        </svg>
                        Entrar na comunidade
                    </a>
                    <a href="#sobre"
                        class="inline-flex items-center justify-center px-6 py-3 border-2 border-white/30 text-white font-semibold rounded-lg hover:bg-white/10 transition-all">
                        Saiba mais
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
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
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
        </svg>
    </div>
</section>
