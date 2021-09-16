<?php

namespace App\Domain\User\Entities\Traits\Relations;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Relations\MorphedByMany;
use App\Domain\Product\Entities\Product;
trait UserRelations
{
    
    public function products() : HasMany
    {
        return $this->hasMany(Product::class);
    }

}
