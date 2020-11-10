<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
{
    protected $primaryKey = 'stf_id';
    const CREATED_AT = 'stf_created_at';
    const UPDATED_AT = 'stf_updated_at';
    protected $guarded = [];
}
