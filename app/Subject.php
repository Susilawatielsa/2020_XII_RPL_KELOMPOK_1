<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $primaryKey = 'sbj_id';
    const CREATED_AT = 'sbj_created_at';
    const UPDATED_AT = 'sbj_updated_at';
    protected $guarded = [];
}
