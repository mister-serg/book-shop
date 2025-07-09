<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\Fields\Text;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Genre>
 */
class GenreResource extends ModelResource
{
    protected string $model = Genre::class;

    protected string $title = 'Genres';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function indexFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Name')->sortable(),
        ];
    }

    public function formFields(): array
    {
        return [
            ID::make(),
            Text::make('Name'),
        ];
    }

    public function detailFields(): array
    {
        return [
            ID::make(),
            Text::make('Name'),
        ];
    }

    /**
     * @param Genre $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
