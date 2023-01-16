<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Kyslik\ColumnSortable\Sortable;

class Task extends Model
{
    use HasFactory, Sortable;

    protected $fillable = ['name', 'description'];

    public $sortable = ['name'];
}
