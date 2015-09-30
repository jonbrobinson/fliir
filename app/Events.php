<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'startDate'];
}
