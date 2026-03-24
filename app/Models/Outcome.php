<?php

namespace App\Models;

use App\Models\Concerns\HasSortOrder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Outcome extends Model
{
    use HasSortOrder, HasTranslations;

    protected $fillable = [
        'sort_order',
        'content',
    ];

    public $translatable = [
        'content',
    ];
}
