<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<section class="relative min-h-screen flex items-center bg-ink-950 bg-noise overflow-hidden">
    <!-- Glow radial único, sutil -->
    <div class="absolute -top-32 -right-32 w-[560px] h-[560px] bg-accent-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <!-- Logo grande de fundo -->
    <div class="absolute -right-16 top-1/2 -translate-y-1/2 opacity-[0.07] hidden lg:block pointer-events-none">
        <img src="{{ asset('images/logo_phppb.png') }}" alt="" class="w-[480px] grayscale">
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20 w-full">
        <div class="max-w-3xl">
            <!-- Status label -->
            <div class="inline-flex items-center mb-8">
                <span class="w-2 h-2 bg-accent-400 rounded-full mr-3"></span>
                <span class="text-ink-400 font-medium text-sm tracking-wide">500+ membros ativos</span>
            </div>

            <!-- Main heading -->
            <h1 class="font-display font-semibold text-4xl sm:text-5xl lg:text-6xl leading-[1.1] mb-6 text-ink-100 text-balance scroll-reveal">
                A comunidade PHP que conecta a <span class="text-accent-400">Paraíba</span>
            </h1>

            <p class="text-lg lg:text-xl text-ink-400 max-w-xl mb-12 leading-relaxed scroll-reveal">
                Onde desenvolvedores se conectam, aprendem e evoluem juntos desde <span class="text-ink-100 font-medium">2012</span>.
            </p>

            <!-- CTAs -->
            <div class="flex flex-col sm:flex-row gap-4 scroll-reveal">
                <a href="https://chat.whatsapp.com/JaWCta8t2DF9Af0zgIb8LB?mode=gi_t" target="_blank" rel="noopener"
                   class="group px-8 py-4 bg-accent-500 hover:bg-accent-600 active:scale-[0.98] rounded-xl font-semibold text-lg text-ink-950 transition-all inline-flex items-center justify-center focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent-300">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Entrar na Comunidade
                    <span class="inline-block ml-2 group-hover:translate-x-1 transition-transform">→</span>
                </a>
                <a href="#sobre"
                   class="px-8 py-4 border border-ink-600 rounded-xl font-semibold text-lg text-ink-100 hover:bg-ink-800 hover:border-ink-400 transition-all inline-flex items-center justify-center focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent-400">
                    Explorar Conteúdo
                </a>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-ink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
        </svg>
    </div>
</section>
