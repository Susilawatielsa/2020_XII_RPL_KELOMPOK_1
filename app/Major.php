<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $primaryKey = 'mjr_id';
    const CREATED_AT = 'mjr_created_at';
    const UPDATED_AT = 'mjr_updated_at';
    protected $guarded = [];
}
