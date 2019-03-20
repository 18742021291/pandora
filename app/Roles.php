<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    /**
     * @var string $table
     */
    protected $table    = 'roles';
    /**
     * @var array $fillable
     */
    protected $fillable = [
        'name',
        'description',
    ];

    public function permissions(){
        return $this->belongsToMany('Permissions','role_has_permissions','role_id','permission_id');
    }

    /**
     * $users=Role::find(1)->hasManyUsers()->get();
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hasManyUsers(){
        return $this->hasMany('User','role_id','id');
    }

}
