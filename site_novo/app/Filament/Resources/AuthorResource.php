<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AuthorResource\Pages;
use App\Models\Author;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class AuthorResource extends Resource
{
    protected static ?string $model = Author::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-user';

    protected static string|\UnitEnum|null $navigationGroup = 'Blog';

    protected static ?string $navigationLabel = 'Autores';

    protected static ?string $modelLabel = 'Autor';

    protected static ?string $pluralModelLabel = 'Autores';

    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')
                ->label('Nome')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(fn ($state, $set) => $set('slug', Str::slug($state ?? ''))),

            TextInput::make('slug')
                ->label('Slug')
                ->required()
                ->unique(ignoreRecord: true),

            Textarea::make('bio')
                ->label('Bio')
                ->rows(3)
                ->columnSpanFull(),

            FileUpload::make('avatar')
                ->label('Avatar')
                ->image()
                ->disk('public')
                ->directory('authors')
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('avatar')->label('')->disk('public')->circular(),
                TextColumn::make('name')->label('Nome')->sortable()->searchable(),
                TextColumn::make('slug')->label('Slug'),
                TextColumn::make('posts_count')
                    ->label('Posts')
                    ->counts('posts')
                    ->sortable(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAuthors::route('/'),
            'create' => Pages\CreateAuthor::route('/create'),
            'edit' => Pages\EditAuthor::route('/{record}/edit'),
        ];
    }
}
