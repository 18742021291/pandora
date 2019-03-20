<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    /**
     * @var string $table
     */
    protected $table    = 'permissions';
    /**
     * @var array $fillable
     */
    protected $fillable = [
        'description',
        'key',
    ];

}
