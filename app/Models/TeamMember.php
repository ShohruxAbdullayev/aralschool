<?php

namespace App\Models;

use App\Models\Concerns\HasSortOrder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class TeamMember extends Model
{
    use HasSortOrder, HasTranslations;

    protected $fillable = [
        'image',
        'role_type',
        'sort_order',
        'name',
        'role',
        'bio',
    ];

    public $translatable = [
        'name',
        'role',
        'bio',
    ];
}
