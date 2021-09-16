<?php

namespace App\Domain\User\Repositories\Eloquent;

use App\Domain\User\Repositories\Contracts\UserRepository;
use App\Domain\User\Entities\User;
use App\Infrastructure\AbstractRepositories\EloquentRepository;

/**
 * Class UserRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class UserRepositoryEloquent extends EloquentRepository implements UserRepository
{
    
    /**
     * Specify Fields
     *
     * @return string
     */
    protected $allowedFields = [
        'id',
        'name',
        'products.id',
        'products.name',
        'products.desc',
        'products.user_id',
    ];

    /**
     * Include Relationships
     *
     * @return string
     */
    protected $allowedIncludes = [
       'products',
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }
    
    /**
     * Specify Model Relationships
     *
     * @return string
     */
    public function relations()
    {
        return [
           'products'
        ];
    }
}