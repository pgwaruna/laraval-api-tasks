<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class Batch
 *
 * @property string $title
 * @property string $description
 *
 * @package App\Models
 */
class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = [
        'title',
        'description',
    ];

}
