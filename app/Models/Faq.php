<?php

namespace App\Models;

use App\Models\Concerns\HasSortOrder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Faq extends Model
{
    use HasSortOrder, HasTranslations;

    protected $fillable = [
        'sort_order',
        'column',
        'question',
        'answer',
    ];

    public $translatable = [
        'question',
        'answer',
    ];
}
