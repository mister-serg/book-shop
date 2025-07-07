<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Author;

use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Author>
 */
class AuthorResource extends ModelResource
{
    protected string $model = Author::class;

    protected string $title = 'Authors';

//    /**
//     * @return list<MoonShineComponent|Field>
//     */
//    public function fields(): array
//    {
//        return [
//            Block::make([
//                ID::make()->sortable(),
//            ]),
//        ];
//    }
    public function indexFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Name')->sortable(),
            Text::make('Surname')->sortable(),
        ];
    }

    public function formFields(): array
    {
        return [
            ID::make(),
            Text::make('Name'),
            Text::make('Surname'),
            Text::make('Biography')->nullable(),
        ];
    }

    public function detailFields(): array
    {
        return [
            ID::make(),
            Text::make('Name'),
            Text::make('Surname'),
            Text::make('Biography'),
        ];
    }

    public function search(): array
    {
        return ['surname', 'biography'];
    }

    /**
     * @param Author $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
