<?php

namespace App\src\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Message
 * @package App\src\Models
 */
class Message extends Model
{
    protected $table = 'messages';

    protected $fillable = [
        'id',
        'email',
        'phone',
        'message',
        'ip',
        'useragent',
    ];

}
