<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Tictalk extends Model implements HasMedia
{
    use HasSlug, HasTranslations, InteractsWithMedia;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array<string>
     */
    protected $guarded = [];

    public array $translatable = ['title', 'description', 'content'];

    /**
     * Get the category that owns the Ticktalks
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(TictalksCategory::class, 'tictalks_category_id');
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->usingLanguage('id')
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('thumbnail')
            ->singleFile();
    }

    /**
     * Filter out empty or disallowed translations
     * Modified to filter out empty array
     */
    protected function filterTranslations(mixed $value = null, ?string $locale = null, ?array $allowedLocales = null): bool
    {
        if ($value === null) {
            return false;
        }

        if ($value === '') {
            return false;
        }

        if ($value === []) {
            return false;
        }

        if ($value === '<p></p>') {
            return false;
        }

        if ($allowedLocales === null) {
            return true;
        }

        if (! in_array($locale, $allowedLocales)) {
            return false;
        }

        return true;
    }
}
