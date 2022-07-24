<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Vendor extends Model
{
    use HasFactory,Sortable;

    protected $fillable = [ 'name', 'email', 'phone' ];
    public $sortable = ['id', 'name', 'email','phone', 'role', 'created_at'];
    protected $table = 'vendors';
}
