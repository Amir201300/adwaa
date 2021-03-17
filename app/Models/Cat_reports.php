<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cat_reports extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reports()
    {
        return $this->hasMany('App\Models\Reports','cat_id');
    }
}
