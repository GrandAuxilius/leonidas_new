<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    use HasFactory;

    // If you want to use Laravel's convention for table names, you can remove the $table property
    protected $table = 'menuCategory';

    protected $fillable = [
        'menuCategoryName',
        'image',
    ];

    // Timestamps are handled automatically unless you specify otherwise
}
