<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "teams";

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'teamId';    	

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

	protected $fillable = ['name', 'project_id', 'isActive'];

	protected $attributes = ['isActive' => 1];

    public static function scopeListActive($query)
    {
        return $query->where('isActive', '<>', '0');
    }
}
