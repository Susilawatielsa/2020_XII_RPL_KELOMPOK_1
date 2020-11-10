<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PositionTypes extends Model
{
    protected $primaryKey = 'pst_id';
    const CREATED_AT = 'pst_created_at';
    const UPDATED_AT = 'pst_updated_at';
    protected $guarded = [];
}
