<?php

namespace App\Domain\Product\Http\Resources\Product;
use App\Domain\User\Http\Resources\User\UserResource;
use Illuminate\Http\Request;
use App\Infrastructure\Http\AbstractResources\BaseResource as JsonResource;

class ProductResource extends JsonResource
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
            'desc'             => $this->when($this->desc, $this->desc),
            'owner'             => UserResource::make($this->whenLoaded('owner')),
        ];
    }
}
