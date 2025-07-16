<?php

namespace App\Models;

use Illuminate\Database\Query\Builder;
use \Illuminate\Database\Eloquent\Builder as EloquentBuider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'biography',
    ];
    public function books (): HasMany
    {
        return $this->hasMany(Book::class);
    }

    public function scopeWhoseBooksExist(EloquentBuider $eloquentQuery): void
    {
       $eloquentQuery
            ->whereExists(function (Builder $querry) {
                $querry->select(DB::raw(1))
                    ->from('books')
                    ->whereColumn('books.author_id', 'authors.id')
                ;
            })
            ->get()
        ;
    }
}
