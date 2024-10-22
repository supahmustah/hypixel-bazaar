<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Item extends Model
{
    protected $table = 'items';

    public function craftingItems(): BelongsToMany
    {
        return $this->belongsToMany(Item::class, 'item_crafting_items', 'item_id', 'crafting_item_id')
            ->withPivot('quantity');
    }

    public function usedInCrafting(): BelongsToMany
    {
        return $this->belongsToMany(Item::class, 'item_crafting_items', 'crafting_item_id', 'item_id')
            ->withPivot('quantity');
    }

    public function hasCraftingItems(): bool
    {
        return $this->craftingItems()->exists();
    }
}
