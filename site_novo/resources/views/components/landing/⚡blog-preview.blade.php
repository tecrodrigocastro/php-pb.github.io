<?php

use App\Models\Post;
use Livewire\Component;

new class extends Component {
    public $recentPosts = [];

    public function mount(): void
    {
        // Buscar os 3 posts mais recentes publicados
        $this->recentPosts = Post::published()
            ->with(['category', 'author'])
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();
    }

    public function getReadTime($content): string
    {
        if (!$content) return '5 min';

        $wordCount = str_word_count(strip_tags(json_encode($content)));
        $minutes = max(1, ceil($wordCount / 200));

        return $minutes . ' min';
    }
};
?>

<section id="blog" class="py-20 lg:py-32 bg-ink-950 bg-noise">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="max-w-2xl mb-16">
            <div class="inline-flex items-center text-accent text-sm font-semibold tracking-wide mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
                Conteúdo da comunidade
            </div>
            <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-semibold text-ink-100 mb-6 text-balance">
                Últimos <span class="text-accent">artigos</span>
            </h2>
            <p class="text-lg text-ink-400">
                Aprenda com a experiência dos membros da comunidade
            </p>
        </div>

        <!-- Posts Grid -->
        @if($recentPosts->count() > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($recentPosts as $post)
                    <article class="group bg-ink-900 rounded-2xl overflow-hidden hover:bg-ink-800 transition-all">
                        <!-- Image -->
                        @if($post->getMainImage())
                            <div class="aspect-video overflow-hidden bg-ink-800">
                                <img src="{{ $post->getMainImage() }}" alt="{{ $post->title }}"
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                        @else
                            <div class="aspect-video bg-ink-800 flex items-center justify-center">
                                <span class="font-display text-6xl font-semibold text-ink-700">PHP</span>
                            </div>
                        @endif

                        <div class="p-6">
                            <!-- Category & Meta -->
                            <div class="flex items-center justify-between mb-3">
                                @if($post->category)
                                    <span class="px-3 py-1 bg-accent-500/15 text-accent text-xs font-medium rounded-full">
                                        {{ $post->category->name }}
                                    </span>
                                @endif
                                <span class="text-ink-400 text-xs">
                                    {{ $this->getReadTime($post->content_blocks) }} de leitura
                                </span>
                            </div>

                            <!-- Title -->
                            <h3 class="font-display text-xl font-semibold text-ink-100 mb-3 line-clamp-2 group-hover:text-accent transition-colors">
                                <a href="{{ route('blog.show', $post->slug) }}">
                                    {{ $post->title }}
                                </a>
                            </h3>

                            <!-- Author & Date -->
                            <div class="flex items-center gap-3 pt-4 border-t border-ink-700">
                                @if($post->author)
                                    <div class="flex items-center flex-1">
                                        @if($post->author->getAvatar())
                                            <img src="{{ $post->author->getAvatar() }}" alt="{{ $post->author->name }}"
                                                 class="w-8 h-8 rounded-full mr-2">
                                        @endif
                                        <div class="min-w-0">
                                            <p class="text-sm text-ink-100 font-medium truncate">{{ $post->author->name }}</p>
                                        </div>
                                    </div>
                                @endif
                                @if($post->published_at)
                                    <time class="text-xs text-ink-400">
                                        {{ $post->published_at->translatedFormat('d M') }}
                                    </time>
                                @endif
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        @else
            <!-- Empty state -->
            <div class="text-center py-16">
                <svg class="w-16 h-16 mx-auto text-ink-700 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
                <p class="text-ink-400">Nenhum artigo publicado ainda. Em breve!</p>
            </div>
        @endif

        <!-- View all CTA -->
        <div class="text-center mt-12">
            <a href="/blog" class="inline-flex items-center px-6 py-3 bg-accent-600 hover:bg-accent-700 active:scale-[0.98] text-white font-semibold rounded-lg transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-accent-300">
                Ver todos os artigos
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>
</section>
