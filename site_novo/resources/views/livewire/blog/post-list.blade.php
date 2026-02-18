<div>
    <!-- Header da seção -->
    <div class="gradient-hero py-20 pt-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">Blog</h1>
            <p class="text-white/80 text-lg max-w-xl mx-auto">
                Artigos técnicos sobre PHP, Laravel e o ecossistema de desenvolvimento da comunidade.
            </p>
        </div>
    </div>

    <!-- Filtros -->
    <div class="bg-gray-50 dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800 sticky top-0 z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex flex-col sm:flex-row gap-3 items-start sm:items-center">
                <select wire:model.live="category"
                        class="px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-white text-sm focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                    <option value="">Todas as categorias</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat['slug'] }}">{{ $cat['name'] }}</option>
                    @endforeach
                </select>

                <select wire:model.live="order"
                        class="px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-white text-sm focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                    <option value="date_desc">Mais recentes</option>
                    <option value="date_asc">Mais antigos</option>
                </select>

                <span class="text-sm text-gray-500 dark:text-gray-400 sm:ml-auto">
                    {{ $postCount }} {{ $postCount === 1 ? 'artigo' : 'artigos' }}
                </span>
            </div>
        </div>
    </div>

    <!-- Lista de posts -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        @if (count($posts) > 0)
            <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($posts as $post)
                    <article class="group bg-white dark:bg-gray-900 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow border border-gray-100 dark:border-gray-800">
                        <a href="{{ route('blog.show', ['slug' => $post['slug']]) }}" class="block">
                            @if ($post['main_image_upload'] || $post['main_image_url'])
                                <div class="aspect-video overflow-hidden bg-gray-100 dark:bg-gray-800">
                                    <img class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300"
                                         src="{{ $post['main_image_upload'] ? \Illuminate\Support\Facades\Storage::url($post['main_image_upload']) : $post['main_image_url'] }}"
                                         alt="{{ $post['title'] }}"
                                         loading="lazy">
                                </div>
                            @else
                                <div class="aspect-video bg-gradient-to-br from-primary-100 to-primary-200 dark:from-primary-900 dark:to-primary-800 flex items-center justify-center">
                                    <img src="{{ asset('images/php-pb-logo.svg') }}" class="w-24 opacity-30" alt="">
                                </div>
                            @endif
                        </a>

                        <div class="p-6">
                            @if ($post['category'])
                                <span class="inline-block px-2 py-1 text-xs font-medium bg-primary-100 dark:bg-primary-900 text-primary-700 dark:text-primary-300 rounded-full mb-3">
                                    {{ $post['category']['name'] }}
                                </span>
                            @endif

                            <h2 class="text-lg font-bold text-gray-900 dark:text-white mb-2 leading-snug">
                                <a href="{{ route('blog.show', ['slug' => $post['slug']]) }}"
                                   class="hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                                    {{ $post['title'] }}
                                </a>
                            </h2>

                            <div class="flex items-center gap-3 text-sm text-gray-500 dark:text-gray-400 mt-4">
                                @if ($post['author'])
                                    <span class="flex items-center gap-1.5">
                                        @if ($post['author']['avatar'])
                                            <img src="{{ \Illuminate\Support\Facades\Storage::url($post['author']['avatar']) }}"
                                                 class="w-5 h-5 rounded-full object-cover"
                                                 alt="{{ $post['author']['name'] }}">
                                        @endif
                                        {{ $post['author']['name'] }}
                                    </span>
                                    <span>·</span>
                                @endif
                                @if ($post['published_at'])
                                    <time>{{ \Carbon\Carbon::parse($post['published_at'])->translatedFormat('d M Y') }}</time>
                                @endif
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            @if ($hasMore)
                <div class="mt-12 flex justify-center">
                    <button wire:click="loadMore"
                            class="inline-flex items-center px-6 py-3 border-2 border-primary-600 text-primary-600 dark:text-primary-400 dark:border-primary-400 font-semibold rounded-lg hover:bg-primary-600 hover:text-white dark:hover:bg-primary-400 dark:hover:text-gray-900 transition-all">
                        Carregar mais
                    </button>
                </div>
            @endif
        @else
            <div class="text-center py-24 text-gray-400 dark:text-gray-600">
                <svg class="w-12 h-12 mx-auto mb-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <p class="text-lg font-medium">Nenhum artigo encontrado</p>
            </div>
        @endif
    </div>
</div>
