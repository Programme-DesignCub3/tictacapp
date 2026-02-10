<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class ActivityCategory extends Model
{
    use HasTranslations;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array<string>
     */
    protected $guarded = [];

    public array $translatable = ['name'];

    /**
     * Get all of the activity for the activityCategory
     */
    public function activity(): HasMany
    {
        return $this->hasMany(Activity::class);
    }
}
