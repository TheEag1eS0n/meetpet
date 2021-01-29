<?php

namespace App\Models;

use App\Traits\UsesUuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Pet model
 * @package App\Models
 *
 * @property string name
 * @property Collection fieldset
 */
class Pet extends Model
{
    use HasFactory,
        UsesUuidTrait;
}
