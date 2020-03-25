<?php
namespace  App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

class  Dizelwork extends Eloquent

{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [

        'start','stop','dizname','zapusk'

    ];

    public $timestamps = false;

}
