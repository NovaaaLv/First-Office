<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class SalesAccount extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'name',
    'phone_number',
    'thumbnail',
    'job_title',
    'email',
  ];

  public function officeSpaces(): HasMany
  {
    return $this->hasMany(OfficeSpace::class);
  }
}
