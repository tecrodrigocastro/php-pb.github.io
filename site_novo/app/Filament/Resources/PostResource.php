<?php

namespace App\Filament\Resources;

use App\Filament\Fields\PostContent;
use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Pboivin\FilamentPeek\Forms\Actions\InlinePreviewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Pboivin\FilamentPeek\Tables\Actions\ListPreviewAction;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-document-text';

    protected static string|\UnitEnum|null $navigationGroup = 'Blog';

    protected static ?string $navigationLabel = 'Posts';

    protected static ?string $modelLabel = 'Post';

    protected static ?string $pluralModelLabel = 'Posts';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return $schema->columns(1)->components([
            Grid::make()->columns(2)->schema([
                TextInput::make('title')
                    ->label('Título')
                    ->required()
                    ->lazy()
                    ->afterStateUpdated(function ($set, $get, $state) {
                        if ($get('slug')) {
                            return;
                        }
                        $set('slug', Str::slug($state));
                    }),

                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                DateTimePicker::make('published_at')
                    ->label('Publicado em')
                    ->nullable(),

                Select::make('category_id')
                    ->label('Categoria')
                    ->relationship('category', 'name')
                    ->required()
                    ->searchable(),

                Select::make('author_id')
                    ->label('Autor')
                    ->relationship('author', 'name')
                    ->nullable()
                    ->searchable(),

                Toggle::make('is_featured')
                    ->label('Destaque')
                    ->columnSpanFull()
                    ->default(false),
            ]),

            Section::make('Imagem principal')->schema([
                TextInput::make('main_image_url')
                    ->label('URL da imagem')
                    ->url()
                    ->columnSpanFull(),

                FileUpload::make('main_image_upload')
                    ->label('ou Upload de imagem')
                    ->image()
                    ->disk('public')
                    ->directory('posts')
                    ->columnSpanFull(),
            ])->collapsible(),

            Section::make('Conteúdo')->schema([
                Actions::make([
                    InlinePreviewAction::make()
                        ->label('Preview do Conteúdo')
                        ->builderPreview('content_blocks'),
                ])->columnSpanFull()->alignRight(),
                PostContent::make('content_blocks'),
            ])->collapsible(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('main_image_upload')
                    ->label('')
                    ->disk('public'),

                TextColumn::make('title')
                    ->label('Título')
                    ->sortable()
                    ->searchable()
                    ->limit(50),

                TextColumn::make('category.name')
                    ->label('Categoria')
                    ->sortable(),

                TextColumn::make('author.name')
                    ->label('Autor')
                    ->sortable(),

                IconColumn::make('is_featured')
                    ->label('Destaque')
                    ->boolean(),

                TextColumn::make('published_at')
                    ->label('Publicado')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('category')->label('Categoria')->relationship('category', 'name'),
                SelectFilter::make('author')->label('Autor')->relationship('author', 'name'),
                TernaryFilter::make('is_featured')->label('Destaque'),
            ])
            ->recordActions([
                ListPreviewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->defaultSort('published_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
