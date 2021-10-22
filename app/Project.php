<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Scopes\ActiveProject;


class Project extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public $timestamps = true;

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new ActiveProject);

        // Asi no nos hace falta crear la clase ActivePoject
        /* static::addGlobalScope('active', function ($query) {
            return $query->where('active', true);
        }); */
    }
}
