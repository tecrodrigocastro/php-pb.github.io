<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<section class="relative min-h-screen flex items-center bg-slate-900 overflow-hidden">
    <!-- Animated grid background -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0"
            style="background-image: linear-gradient(rgba(59, 130, 246, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(59, 130, 246, 0.1) 1px, transparent 1px); background-size: 50px 50px;">
        </div>
    </div>

    <!-- Gradient overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900 via-transparent to-slate-900"></div>

    <!-- Logo grande de fundo -->
    <div class="absolute -right-16 top-1/2 -translate-y-1/2 opacity-10 hidden lg:block pointer-events-none">
        <img src="{{ asset('images/logo_phppb.png') }}" alt="" class="w-[480px] grayscale">
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20 w-full">
        <div class="text-center">
            <!-- Live status badge -->
            <div class="inline-flex items-center px-4 py-2 bg-blue-500/20 backdrop-blur-sm rounded-full mb-8 border border-blue-500/30">
                <span class="w-3 h-3 bg-green-400 rounded-full mr-3 animate-pulse"></span>
                <span class="text-blue-200 font-semibold text-sm sm:text-base">500+ membros ativos</span>
            </div>

            <!-- Main heading com gradiente -->
            <h1 class="font-display font-black text-5xl sm:text-6xl lg:text-8xl leading-none mb-6 scroll-reveal">
                <span class="block text-white mb-2">A MAIOR</span>
                <span class="block mb-2">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-violet-500 italic">
                        COMUNIDADE
                    </span>
                    <span class="text-white italic"> DE PHP</span>
                </span>
                <span class="block text-white">DA PARAÍBA</span>
            </h1>

            <p class="text-xl lg:text-2xl text-slate-300 max-w-3xl mb-12 mx-auto font-medium scroll-reveal">
                Onde desenvolvedores se conectam, aprendem e evoluem juntos desde <strong class="text-white">2012</strong>
            </p>

            <!-- CTAs -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16 scroll-reveal">
                <a href="https://chat.whatsapp.com/JaWCta8t2DF9Af0zgIb8LB?mode=gi_t" target="_blank" rel="noopener"
                   class="group px-8 py-4 bg-gradient-to-r from-blue-500 to-violet-600 rounded-xl font-bold text-lg text-white hover:shadow-2xl hover:shadow-blue-500/50 transition-all inline-flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Entrar na Comunidade
                    <span class="inline-block ml-2 group-hover:translate-x-1 transition-transform">→</span>
                </a>
                <a href="#sobre"
                   class="px-8 py-4 border-2 border-slate-600 rounded-xl font-bold text-lg text-slate-300 hover:bg-slate-800 hover:border-slate-500 transition-all inline-flex items-center justify-center">
                    Explorar Conteúdo
                </a>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
        </svg>
    </div>
</section>
