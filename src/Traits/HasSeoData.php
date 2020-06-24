<?php

namespace SoluzioneSoftware\SEO\Traits;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use SoluzioneSoftware\SEO\Models\SeoData;

/**
 * @property-read Collection seo_data
 */
trait HasSeoData
{
    public function seo_data(): MorphMany
    {
        return $this->morphMany(SeoData::class, 'seoable');
    }
}
