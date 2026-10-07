@php
    $renderHookScopes = $livewire?->getRenderHookScopes();
@endphp

<x-filament-panels::layout.base :livewire="$livewire">
    @props([
        'after' => null,
        'heading' => null,
        'subheading' => null,
    ])

    <div class="fi-login-split-layout flex min-h-screen">
        {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::SIMPLE_LAYOUT_START, scopes: $renderHookScopes) }}

        <!-- Painel de marca -->
        <div class="fi-login-brand-panel hidden lg:flex lg:w-[420px] xl:w-[480px] shrink-0 flex-col justify-between p-12 text-white">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo_phppb.png') }}" alt="PHP-PB" class="w-12 h-12 object-contain">
                <span class="text-xl font-semibold">PHP-PB</span>
            </div>

            <div>
                <h1 class="text-3xl font-semibold leading-tight mb-4">
                    A comunidade PHP que conecta a Paraíba
                </h1>
                <p class="text-white/80 leading-relaxed">
                    Onde desenvolvedores se conectam, aprendem e evoluem juntos desde 2012.
                </p>
            </div>

            <div class="flex gap-8">
                <div>
                    <div class="text-2xl font-semibold">500+</div>
                    <div class="text-sm text-white/70">membros</div>
                </div>
                <div>
                    <div class="text-2xl font-semibold">50+</div>
                    <div class="text-sm text-white/70">eventos</div>
                </div>
                <div>
                    <div class="text-2xl font-semibold">6</div>
                    <div class="text-sm text-white/70">PHPestes</div>
                </div>
            </div>
        </div>

        <!-- Formulário -->
        <div class="fi-simple-main-ctn flex-1 flex flex-col">
            @if (($hasTopbar ?? true) && filament()->auth()->check())
                <div class="fi-simple-layout-header">
                    @if (filament()->hasDatabaseNotifications())
                        @livewire(Filament\Livewire\DatabaseNotifications::class, [
                            'lazy' => filament()->hasLazyLoadedDatabaseNotifications(),
                            'position' => \Filament\Enums\DatabaseNotificationsPosition::Topbar,
                        ])
                    @endif

                    @if (filament()->hasUserMenu())
                        @livewire(Filament\Livewire\SimpleUserMenu::class)
                    @endif
                </div>
            @endif

            <main class="flex-1 flex items-center justify-center p-6">
                <div class="w-full fi-width-{{ ($maxContentWidth ?? \Filament\Support\Enums\Width::Large) instanceof \Filament\Support\Enums\Width ? ($maxContentWidth ?? \Filament\Support\Enums\Width::Large)->value : ($maxContentWidth ?? 'lg') }}">
                    {{ $slot }}
                </div>
            </main>
        </div>

        {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::FOOTER, scopes: $renderHookScopes) }}

        {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::SIMPLE_LAYOUT_END, scopes: $renderHookScopes) }}
    </div>
</x-filament-panels::layout.base>
