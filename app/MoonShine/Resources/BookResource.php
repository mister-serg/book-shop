<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

use MoonShine\Fields\Text;
use MoonShine\Fields\Number;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Fields\Image;
use MoonShine\CKEditor\Fields\CKEditor;

/**
 * @extends ModelResource<Book>
 */
class BookResource extends ModelResource
{
    protected string $model = Book::class;

    protected string $title = 'Books';

    public function indexFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Title')->sortable(),
            Text::make('Publication Year', 'publication_year')->sortable(),
            BelongsTo::make('Author', formatted:fn($author)=> "$author->name $author->surname")->sortable(),
            BelongsTo::make('Genre', formatted: 'name')->sortable(),
            Number::make('Price')->sortable(),
            Number::make('Count')->sortable(),
        ];
    }

    public function formFields(): array
    {
        return [
            ID::make(),
            Text::make('Title'),
            Image::make('Cover')
            ->dir('covers')
            ->allowedExtensions(['jpg', 'jpeg', 'png', 'webp'])
            ->removable()
            ->nullable(),
            CKEditor::make('Label')->nullable(),
            Text::make('Publication Year', 'publication_year'),
            BelongsTo::make('Author', formatted: fn($author)=> "$author->name $author->surname"),
            BelongsTo::make('Genre', formatted: 'name'),
            Number::make('Price'),
            Number::make('Count'),
        ];
    }

    public function detailFields(): array
    {
        return [
            ID::make(),
            Text::make('Title'),
            Image::make('Cover'),
            CKEditor::make('Label'),
            Text::make('Publication Year', 'publication_year'),
            BelongsTo::make('Author', formatted: fn($author)=> "$author->name $author->surname"),
            BelongsTo::make('Genre', formatted: 'name'),
            Number::make('Price'),
            Number::make('Count'),
        ];
    }

    public function search(): array
    {
        return ['title', 'description', 'publication_year'];
    }


    /**
     * @param Book $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
