<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

use MoonShine\Fields\Number;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Relationships\HasMany;
use MoonShine\Fields\Select;
use MoonShine\Fields\Text;
// use MoonShine\Decorations\Block;
use MoonShine\Resources\ModelResource;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
// use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Order>
 */
class OrderResource extends ModelResource
{
    protected string $model = Order::class;

    protected string $title = 'Orders';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function indexFields(): array
    {
        return [
            ID::make()->sortable(),
            BelongsTo::make('User', formatted: 'name'),
            HasMany::make('Books', resource: new BookResource())
                ->onlyLink(condition: function (int $count, Field $field): bool {
                    return $count > 10;
                }),
            Number::make('Total cost', 'total_cost'),
            Select::make('Status')
                ->options(Order::STATUSES)
                ->sortable(),
        ];
    }

    public function formFields(): array
    {
        return [
            ID::make(),
            BelongsTo::make('User', formatted: 'name')->disabled(),
            HasMany::make('Books', resource: new BookResource())
                ->onlyLink(condition: function (int $count, Field $field): bool {
                    return $count > 10;
                })
                ->disabled(),
            Number::make('Total cost', 'total_cost'),
            Select::make('Status')
                ->options(Order::STATUSES),
        ];
    }

    public function detailFields(): array
    {
        return [
            ID::make(),
            ID::make(),
            BelongsTo::make('User', formatted: 'name')->disabled(),
            HasMany::make('Books', resource: new BookResource())
                ->onlyLink(condition: function (int $count, Field $field): bool {
                    return $count > 10;
                })
                ->disabled(),
            Number::make('Total cost', 'total_cost'),
            Select::make('Status')
                ->options(Order::STATUSES),
        ];
    }

    /**
     * @param Order $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
