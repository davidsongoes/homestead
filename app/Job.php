<?php
/**
 * Created by PhpStorm.
 * User: Davidson
 * Date: 14/09/2016
 * Time: 22:27
 */

namespace Jobs;


use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'homestead';

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'expires_at',
    ];
}