<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<section id="eventos" class="py-20 lg:py-32 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center px-3 py-1 bg-primary-100 dark:bg-primary-900 rounded-full text-primary-700 dark:text-primary-300 text-sm font-medium mb-4">
                Comunidades parceiras
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                Juntos somos mais fortes
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-300">
                Fazemos parte de uma rede de comunidades PHP do Nordeste que juntas organizam o PHPeste.
            </p>
        </div>

        <!-- Communities -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            <!-- PHP-PB -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 text-center shadow-sm hover:shadow-md transition-shadow">
                <div class="w-16 h-16 bg-primary-100 dark:bg-primary-900 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-primary-600 dark:text-primary-400">PB</span>
                </div>
                <h3 class="font-bold text-gray-900 dark:text-white mb-1">PHP-PB</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Paraíba</p>
            </div>

            <!-- PHP com Rapadura -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 text-center shadow-sm hover:shadow-md transition-shadow">
                <div class="w-16 h-16 bg-yellow-100 dark:bg-yellow-900 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-yellow-600 dark:text-yellow-400">CE</span>
                </div>
                <h3 class="font-bold text-gray-900 dark:text-white mb-1">PHP com Rapadura</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Ceará</p>
            </div>

            <!-- PHP PE -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 text-center shadow-sm hover:shadow-md transition-shadow">
                <div class="w-16 h-16 bg-red-100 dark:bg-red-900 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-red-600 dark:text-red-400">PE</span>
                </div>
                <h3 class="font-bold text-gray-900 dark:text-white mb-1">PHP-PE</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Pernambuco</p>
            </div>

            <!-- PHP RN -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 text-center shadow-sm hover:shadow-md transition-shadow">
                <div class="w-16 h-16 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-green-600 dark:text-green-400">RN</span>
                </div>
                <h3 class="font-bold text-gray-900 dark:text-white mb-1">PHP-RN</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">Rio Grande do Norte</p>
            </div>
        </div>

        <!-- CTA Box -->
        <div class="relative overflow-hidden bg-gradient-to-r from-primary-600 to-primary-800 rounded-3xl p-8 lg:p-12">
            <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-8">
                <div class="text-center lg:text-left">
                    <h3 class="text-2xl lg:text-3xl font-bold text-white mb-4">
                        Pronto para fazer parte?
                    </h3>
                    <p class="text-white/80 max-w-xl">
                        Entre no nosso grupo do WhatsApp e comece a participar das discussões, tire dúvidas e conheça outros desenvolvedores PHP da Paraíba.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="https://chat.whatsapp.com/JaWCta8t2DF9Af0zgIb8LB?mode=gi_t" target="_blank" rel="noopener"
                       class="inline-flex items-center justify-center px-6 py-3 bg-white text-primary-700 font-semibold rounded-lg hover:bg-gray-100 transition-all shadow-lg">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        Entrar no WhatsApp
                    </a>
                    <a href="https://github.com/php-pb" target="_blank" rel="noopener"
                       class="inline-flex items-center justify-center px-6 py-3 border-2 border-white/30 text-white font-semibold rounded-lg hover:bg-white/10 transition-all">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                        GitHub
                    </a>
                </div>
            </div>
            <!-- Background decoration -->
            <div class="absolute top-0 right-0 -mt-16 -mr-16 w-64 h-64 bg-white/5 rounded-full"></div>
            <div class="absolute bottom-0 left-0 -mb-16 -ml-16 w-48 h-48 bg-white/5 rounded-full"></div>
        </div>
    </div>
</section>
