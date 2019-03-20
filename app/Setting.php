<?php
/**
 * Copyright © 大连理工大学软件学院
 * File: Setting.php
 * Author: 郗晓斌
 * Email: wall1002@mail.dlut.edu.cn
 * Date: 2019/3/20 6:39 PM
 * Desc:
 */

namespace App;

class Setting
{

    /**
     * @var array $allowd
     */
    protected $allowd = ['city', 'site', 'github', 'bio'];
    /**
     * @var User
     */
    protected $user;

    /**
     * Setting constructor.
     *
     * @param $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @param array $attributes
     *
     * @return bool
     */
    public function merge(array $attributes)
    {
        $settings = array_merge($this->user->setting, array_only($attributes, $this->allowd));
        return $this->user->update(['setting' => $settings]);
    }
}