<?php

namespace App\Domain\Product\Entities\Traits\Relations;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Relations\MorphedByMany;
use App\Domain\User\Entities\User;  
trait ProductRelations
{
    ###allowedRelations###
    ###\allowedRelations###

    
    public function owner()
    {
       return $this->belongsTo(User::class,'user_id');
    }

}
