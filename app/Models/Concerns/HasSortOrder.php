<?php

namespace App\Models\Concerns;

use Illuminate\Database\Eloquent\Builder;

trait HasSortOrder
{
    public function initializeHasSortOrder(): void
    {
        $this->mergeCasts(['sort_order' => 'integer']);
    }

    public function scopeOrdered(Builder $query, string $direction = 'asc'): Builder
    {
        return $query->orderBy('sort_order', $direction);
    }
}
