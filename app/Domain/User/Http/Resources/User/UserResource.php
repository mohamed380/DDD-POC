<?php

namespace App\Domain\User\Http\Resources\User;

use App\Domain\Product\Http\Resources\Product\ProductResourceCollection;
use Illuminate\Http\Request;
use App\Infrastructure\Http\AbstractResources\BaseResource as JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function data(Request $request):array
    {
        return [
            'id'               => $this->when($this->id, $this->id),
            'name'             => $this->when($this->name, $this->name),
            'prodcuts'         => new ProductResourceCollection($this->whenLoaded('products')),
        ];
    }
}

