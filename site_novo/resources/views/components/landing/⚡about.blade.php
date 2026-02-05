<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<section id="sobre" class="py-20 lg:py-32 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Image/Illustration -->
            <div class="relative">
                <div class="aspect-square rounded-2xl bg-gradient-to-br from-primary-100 to-primary-200 dark:from-primary-900 dark:to-primary-800 p-8 lg:p-12">
                    <!-- PHP Elephant -->
                    <div class="w-full h-full flex items-center justify-center">
                        <svg class="w-48 h-48 lg:w-64 lg:h-64 text-primary-600 dark:text-primary-400" viewBox="0 0 256 134" fill="currentColor">
                            <ellipse cx="128" cy="67" rx="128" ry="67" fill="currentColor" opacity="0.1"/>
                            <path d="M39.844 95.375l7.672-39.813h15.953c7.406 0 12.454 1.36 15.141 4.078 2.688 2.719 3.39 6.687 2.11 11.906-0.61 2.563-1.61 4.907-3 7.032-1.391 2.125-3.094 3.953-5.11 5.485-2.469 1.89-5.141 3.25-8.015 4.078-2.875 0.828-6.453 1.234-10.735 1.234h-6.781l-2.672 14h-7.563v-8zm13.953-20.625h5.313c4.125 0 7.218-0.563 9.281-1.688 2.062-1.125 3.438-3.188 4.125-6.188 0.719-3.218 0.281-5.406-1.313-6.562-1.594-1.157-4.5-1.735-8.718-1.735h-4.985l-3.703 16.172z"/>
                            <path d="M93.531 55.563l-0.984 5.219c1.266-1.922 2.906-3.438 4.922-4.547 2.016-1.109 4.219-1.672 6.609-1.672 3.656 0 6.328 1.078 8.016 3.234 1.688 2.157 2.125 5.14 1.313 8.953l-5.047 25.25h-7.5l4.797-24.172c0.453-2.25 0.266-3.969-0.563-5.156-0.828-1.188-2.328-1.781-4.5-1.781-2.547 0-4.672 0.844-6.375 2.531-1.703 1.688-2.859 4.063-3.469 7.125l-4.297 21.453h-7.5l7.672-39.813h7.906v3.376z"/>
                            <path d="M125.453 55.563l-1.047 5.219c1.266-1.922 2.906-3.438 4.922-4.547 2.016-1.109 4.219-1.672 6.609-1.672 3.656 0 6.328 1.078 8.016 3.234 1.688 2.157 2.125 5.14 1.313 8.953l-5.047 25.25h-7.5l4.797-24.172c0.453-2.25 0.266-3.969-0.563-5.156-0.828-1.188-2.328-1.781-4.5-1.781-2.547 0-4.672 0.844-6.375 2.531-1.703 1.688-2.859 4.063-3.469 7.125l-4.297 21.453h-7.5l7.672-39.813h7.969v3.376z"/>
                        </svg>
                    </div>
                </div>
                <!-- Floating elements -->
                <div class="absolute -top-4 -right-4 bg-white dark:bg-gray-800 rounded-xl shadow-lg p-4">
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-900 dark:text-white">Comunidade Ativa</span>
                    </div>
                </div>
                <div class="absolute -bottom-4 -left-4 bg-white dark:bg-gray-800 rounded-xl shadow-lg p-4">
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 bg-primary-100 dark:bg-primary-900 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-900 dark:text-white">+500 membros</span>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div>
                <div class="inline-flex items-center px-3 py-1 bg-primary-100 dark:bg-primary-900 rounded-full text-primary-700 dark:text-primary-300 text-sm font-medium mb-4">
                    Sobre nós
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                    Comunidade PHP na Paraíba
                </h2>

                <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                    Somos um grupo de desenvolvedores PHP apaixonados por tecnologia, formados através do objetivo de promover a interatividade entre pessoas interessadas na linguagem de programação PHP.
                </p>

                <p class="text-lg text-gray-600 dark:text-gray-300 mb-8">
                    Desde 2012, organizamos meetups, hangouts, workshops e conferências para compartilhar conhecimento e fortalecer a comunidade de desenvolvedores no estado.
                </p>

                <div class="grid sm:grid-cols-2 gap-6">
                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 bg-primary-100 dark:bg-primary-900 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">Compartilhar conhecimento</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Palestras, artigos e tutoriais</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 bg-primary-100 dark:bg-primary-900 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">Networking</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Conexões profissionais</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 bg-primary-100 dark:bg-primary-900 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">Eventos</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Meetups e conferências</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 bg-primary-100 dark:bg-primary-900 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">Oportunidades</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Vagas e projetos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
