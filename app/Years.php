<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Years extends Model
{
    protected $primaryKey = 'yrs_id';
    const CREATED_AT = 'yrs_created_at';
    const UPDATED_AT = 'yrs_updated_at';
    protected $guarded = [];
}
