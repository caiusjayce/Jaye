<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class MPLteams
 * @package App\Models
 * @version September 18, 2021, 3:06 am UTC
 *
 * @property string $yourName
 * @property string $Birthdate
 * @property string $Address
 * @property string $teamName
 * @property string $teamRole
 */
class MPLteams extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'mplteams';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'yourName',
        'Birthdate',
        'Address',
        'teamName',
        'teamRole'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'yourName' => 'string',
        'Birthdate' => 'date',
        'Address' => 'string',
        'teamName' => 'string',
        'teamRole' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'yourName' => 'required|string|max:100',
        'Birthdate' => 'required',
        'Address' => 'required|string|max:100',
        'teamName' => 'required|string|max:100',
        'teamRole' => 'required|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
