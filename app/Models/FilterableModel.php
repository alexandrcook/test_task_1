<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FilterableModel extends Model
{
    protected array $filterable = [];

    public function getFilterableAttrs() : array
    {
        return $this->filterable;
    }
}
