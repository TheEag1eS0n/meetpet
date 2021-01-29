<?php

namespace App\Models;

use App\Traits\UsesUuidTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fieldset extends Model
{
    use HasFactory,
        UsesUuidTrait;

    const FIELDSET_CATEGORY = 'fieldset';

    protected $table = 'presets';

    static public function query(): Builder
    {
        return parent::query()->where(column: 'cat', value: self::FIELDSET_CATEGORY);
    }
}
