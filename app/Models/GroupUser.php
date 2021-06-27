<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model
{
    use HasFactory;
    public $table = 'group_user';

    protected $fillable=[
        'user_id', 'group_id'
    ];

    public function group()
    {
        return $this->belongsTo('App\Group', 'group_id', 'id');
    }

    public function user()
    {
        return $this->hasMany('App\User', 'user_id', 'id');
    }

}
