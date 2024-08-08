<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EulimsSupplier extends Model
{
    use HasFactory;

    protected $table = 'tbl_suppliers';
    protected $primaryKey = 'suppliers_id';
}
