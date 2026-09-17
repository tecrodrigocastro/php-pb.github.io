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

<section id="blog" class="py-20 lg:py-32 bg-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center px-3 py-1 bg-blue-500/20 border border-blue-500/30 rounded-full text-blue-300 text-sm font-medium mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
                Conteúdo da Comunidade
            </div>
            <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-black text-white mb-6">
                Últimos <span class="text-gradient">Artigos</span>
            </h2>
            <p class="text-lg text-slate-300">
                Aprenda com a experiência dos membros da comunidade
            </p>
        </div>

        <!-- Posts Grid -->
        @if($recentPosts->count() > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($recentPosts as $post)
                    <article class="group bg-slate-800 rounded-2xl border border-slate-700 hover:border-blue-500/50 transition-all overflow-hidden hover:-translate-y-1">
                        <!-- Image -->
                        @if($post->getMainImage())
                            <div class="aspect-video overflow-hidden bg-slate-700">
                                <img src="{{ $post->getMainImage() }}" alt="{{ $post->title }}" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                        @else
                            <div class="aspect-video bg-gradient-to-br from-blue-500 to-violet-600 flex items-center justify-center">
                                <span class="font-display text-6xl font-black text-white/20">PHP</span>
                            </div>
                        @endif

                        <div class="p-6">
                            <!-- Category & Meta -->
                            <div class="flex items-center justify-between mb-3">
                                @if($post->category)
                                    <span class="px-3 py-1 bg-blue-500/20 border border-blue-500/30 text-blue-300 text-xs font-medium rounded-full">
                                        {{ $post->category->name }}
                                    </span>
                                @endif
                                <span class="text-slate-500 text-xs">
                                    {{ $this->getReadTime($post->content_blocks) }} de leitura
                                </span>
                            </div>

                            <!-- Title -->
                            <h3 class="font-display text-xl font-bold text-white mb-3 line-clamp-2 group-hover:text-blue-400 transition-colors">
                                <a href="{{ route('blog.show', $post->slug) }}">
                                    {{ $post->title }}
                                </a>
                            </h3>

                            <!-- Author & Date -->
                            <div class="flex items-center gap-3 pt-4 border-t border-slate-700">
                                @if($post->author)
                                    <div class="flex items-center flex-1">
                                        @if($post->author->getAvatar())
                                            <img src="{{ $post->author->getAvatar() }}" alt="{{ $post->author->name }}" 
                                                 class="w-8 h-8 rounded-full mr-2">
                                        @endif
                                        <div class="min-w-0">
                                            <p class="text-sm text-slate-300 font-medium truncate">{{ $post->author->name }}</p>
                                        </div>
                                    </div>
                                @endif
                                @if($post->published_at)
                                    <time class="text-xs text-slate-500">
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
                <svg class="w-16 h-16 mx-auto text-slate-700 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
                <p class="text-slate-400">Nenhum artigo publicado ainda. Em breve!</p>
            </div>
        @endif

        <!-- View all CTA -->
        <div class="text-center mt-12">
            <a href="/blog" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-500 to-violet-600 hover:from-blue-600 hover:to-violet-700 text-white font-medium rounded-lg transition-all">
                Ver todos os artigos
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>
</section>
