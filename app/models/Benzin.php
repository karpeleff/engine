<?php
namespace  App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

class  Benzin extends Eloquent

{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [

        'date','admission','consumtion','type','balance'

    ];

    public $timestamps = false;

}

