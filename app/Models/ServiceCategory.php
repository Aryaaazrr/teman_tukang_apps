<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $table = 'service_category';

    protected $guarded = [];

    public function category() {
        return $this->hasMany(Service::class, 'service_category_id');
    }
}
