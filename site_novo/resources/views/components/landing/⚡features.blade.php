<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<section id="comunidade" class="py-20 lg:py-32 bg-white dark:bg-gray-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center px-3 py-1 bg-primary-100 dark:bg-primary-900 rounded-full text-primary-700 dark:text-primary-300 text-sm font-medium mb-4">
                O que oferecemos
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                Faça parte da comunidade
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-300">
                Reunimos desenvolvedores de todos os níveis para aprender, compartilhar e crescer juntos.
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="group p-8 bg-gray-50 dark:bg-gray-900 rounded-2xl hover:bg-primary-50 dark:hover:bg-primary-950 transition-colors">
                <div class="w-14 h-14 bg-primary-100 dark:bg-primary-900 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-200 dark:group-hover:bg-primary-800 transition-colors">
                    <svg class="w-7 h-7 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Grupo no Telegram</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Discussões diárias sobre PHP, Laravel, dúvidas técnicas e networking com outros devs.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="group p-8 bg-gray-50 dark:bg-gray-900 rounded-2xl hover:bg-primary-50 dark:hover:bg-primary-950 transition-colors">
                <div class="w-14 h-14 bg-primary-100 dark:bg-primary-900 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-200 dark:group-hover:bg-primary-800 transition-colors">
                    <svg class="w-7 h-7 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Meetups & Hangouts</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Encontros presenciais e online para palestras, workshops e troca de experiências.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="group p-8 bg-gray-50 dark:bg-gray-900 rounded-2xl hover:bg-primary-50 dark:hover:bg-primary-950 transition-colors">
                <div class="w-14 h-14 bg-primary-100 dark:bg-primary-900 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-200 dark:group-hover:bg-primary-800 transition-colors">
                    <svg class="w-7 h-7 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Vagas de Emprego</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Oportunidades exclusivas compartilhadas pelos membros e empresas parceiras.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="group p-8 bg-gray-50 dark:bg-gray-900 rounded-2xl hover:bg-primary-50 dark:hover:bg-primary-950 transition-colors">
                <div class="w-14 h-14 bg-primary-100 dark:bg-primary-900 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-200 dark:group-hover:bg-primary-800 transition-colors">
                    <svg class="w-7 h-7 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Artigos & Tutoriais</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Conteúdo técnico produzido pela comunidade sobre PHP, frameworks e boas práticas.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="group p-8 bg-gray-50 dark:bg-gray-900 rounded-2xl hover:bg-primary-50 dark:hover:bg-primary-950 transition-colors">
                <div class="w-14 h-14 bg-primary-100 dark:bg-primary-900 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-200 dark:group-hover:bg-primary-800 transition-colors">
                    <svg class="w-7 h-7 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Mentoria</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    Devs experientes ajudando iniciantes a evoluir na carreira e nas habilidades técnicas.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="group p-8 bg-gray-50 dark:bg-gray-900 rounded-2xl hover:bg-primary-50 dark:hover:bg-primary-950 transition-colors">
                <div class="w-14 h-14 bg-primary-100 dark:bg-primary-900 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-200 dark:group-hover:bg-primary-800 transition-colors">
                    <svg class="w-7 h-7 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">PHPeste</h3>
                <p class="text-gray-600 dark:text-gray-400">
                    A maior conferência PHP do Nordeste, organizada em parceria com comunidades da região.
                </p>
            </div>
        </div>
    </div>
</section>
