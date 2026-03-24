<?php

namespace App\Models;

use App\Models\Concerns\HasSortOrder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ApplyStep extends Model
{
    use HasSortOrder, HasTranslations;

    protected $fillable = [
        'sort_order',
        'type',
        'title',
        'content',
    ];

    public $translatable = [
        'title',
        'content',
    ];
}
