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
                        Entre no nosso grupo do Telegram e comece a participar das discussões, tire dúvidas e conheça outros desenvolvedores PHP da Paraíba.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="https://t.me/phppb" target="_blank" rel="noopener"
                       class="inline-flex items-center justify-center px-6 py-3 bg-white text-primary-700 font-semibold rounded-lg hover:bg-gray-100 transition-all shadow-lg">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/>
                        </svg>
                        Entrar no Telegram
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
