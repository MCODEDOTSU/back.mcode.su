<?php

namespace App\src\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Portfolio
 * @package App\src\Models
 */
class Portfolio extends Model
{
    protected $table = 'portfolio';

    protected $fillable = [
        'id',
        'alias',
        'sort',
        'title',
        'src',
        'href',
        'description',
        'clock',
        'calendar',
        'briefcase',
        'color_1',
        'color_2',
    ];

}
