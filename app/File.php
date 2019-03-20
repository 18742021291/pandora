<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    /**
     * @var string $table
     */
    protected $table    = 'file';
    /**
     * @var array $fillable
     */
    protected $fillable = [
        'userid',
        'path',
        'size',
        'type',
        'is_visible',
    ];

    public function belongsToUser(){
        return $this->belongsTo('User','user_id','id');
    }
}
