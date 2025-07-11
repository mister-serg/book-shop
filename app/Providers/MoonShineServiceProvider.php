<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\AuthorResource;
use App\MoonShine\Resources\BookResource;
use App\MoonShine\Resources\GenreResource;
use App\MoonShine\Resources\OrderResource;
use App\MoonShine\Resources\UserResource;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    protected function resources(): array
    {
        return [];
    }

    protected function pages(): array
    {
        return [];
    }

    protected function menu(): array
    {
        return [
            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
               MenuItem::make(
                   static fn() => __('moonshine::ui.resource.admins_title'),
                   new MoonShineUserResource()
               ),
               MenuItem::make(
                   static fn() => __('moonshine::ui.resource.role_title'),
                   new MoonShineUserRoleResource()
               ),
            ]),

            MenuItem::make(
                'Authors',
                new AuthorResource()
            ),

            MenuItem::make(
                'Books',
                new BookResource()
            ),
            

            MenuItem::make(
                'Genres',
                new GenreResource()
            ),
            

            MenuItem::make(
                'Orders',
                new OrderResource()
            ),
            

            MenuItem::make(
                'Users',
                new UserResource()
            ),

            MenuItem::make('Documentation', 'https://moonshine-laravel.com')
               ->badge(fn() => 'Check'),
        ];
    }

    /**
     * @return array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
