<?php

namespace App\Domain\Product\Entities;

use App\Infrastructure\AbstractModels\BaseModel as Model;
use App\Domain\Product\Entities\Traits\Relations\ProductRelations;
use App\Domain\Product\Entities\Traits\CustomAttributes\ProductAttributes;
use App\Domain\Product\Repositories\Contracts\ProductRepository;

class Product extends Model
{
    use ProductRelations, ProductAttributes;

    /**
     * @var array
     */
    public static $logAttributes = ["*"];

    /**
     * The attributes that are going to be logged.
     *
     * @var array
     */
    protected static $logName = 'Product';

    /**
     * define belongsTo relations.
     *
     * @var array
     */
    private $belongsTo = ['owner'];

    /**
     * define hasMany relations.
     *
     * @var array
     */
    private $hasMany = [];

    /**
     * define belongsToMany relations.
     *
     * @var array
     */
    private $belongsToMany = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'desc',
        'user_id'
    ];

    /**
     * The table name.
     *
     * @var array
     */
    protected $table = "products";

    /**
     * Holds Repository Related to current Model.
     *
     * @var array
     */
    protected $routeRepoBinding = ProductRepository::class;
}
