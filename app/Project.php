<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	// protected $primaryKey = "id";

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "Projects";

    /**
     * The primary key for the model.
     *
     * @var string
     */
    // protected $primaryKey = 'id';    	

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'int';

            /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

	protected $fillable = ['name', 'isActive'];

	protected $attributes = ['isActive' => 1];

	// public $name;

	// public $isActive;

	// public $isActive = $this->attributes['isActive'];

	// function __construct($name)
	// {
	// 	// echo 'abc';
	// 	$this->name = $name;
	// 	// $this->isActive = $isActive;
	// }
    
    // public static function listActive()
    // {
    //     return static::where('isActive', '<>', '0')->get();
    // } 

    public function teams()
    {
        return $this->hasMany(Team::class);
    }


    public static function scopeListActive($query)
    {
        return $query->where('isActive', '=', '1');
    }




}
