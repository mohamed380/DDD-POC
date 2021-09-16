<?php

namespace App\Domain\Product\Repositories\Eloquent;

use App\Domain\Product\Repositories\Contracts\ProductRepository;
use App\Domain\Product\Entities\Product;
use App\Infrastructure\AbstractRepositories\EloquentRepository;

/**
 * Class ProductRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ProductRepositoryEloquent extends EloquentRepository implements ProductRepository
{
    
    /**
     * Specify Fields
     *
     * @return string
     */
    protected $allowedFields = [
       'name',
       'desc',
       'user_id',
       'owner.id',
       'owner.name',
    ];

    /**
     * Specify Fields
     *
     * @return string
     */
    protected $allowedFilters = [
        'name',
        'desc',
     ];

    /**
     * Include Relationships
     *
     * @return string
     */
    protected $allowedIncludes = [
        'owner'
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Product::class;
    }
    
    /**
     * Specify Model Relationships
     *
     * @return string
     */
    public function relations()
    {
        return [
            'owner'
        ];
    }
}