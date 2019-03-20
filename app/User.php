<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

//1、一对一使用方法：hasOne()
//2、一对多使用方法：hasMany()
//3、多对一使用方法：belongsTo()
//4、多对多使用方法：belongsToMany()
    /**
     * The table that model represents.
     *
     * @var string $table
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array $fillable
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'confirmation_token',
        'imgurl',
        'remember_token',
        'setting',
        'api_token',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array $hidden
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @var array $casts
     */
    protected $casts = [
        'setting' => 'array',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function files(){
        return $this->hasMany(File::class,'user_id','id');
    }

    public function belongsToRole(){
        return $this->belongsTo('Roles','role_id','id');
    }

    public function setting(){
        return new Setting($this);
    }
}
