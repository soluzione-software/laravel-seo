<?php

namespace SoluzioneSoftware\SEO\Traits;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Concerns\HasRelationships;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\App;
use SoluzioneSoftware\SEO\Models\SeoData;

/**
 * @property-read Collection seo_data
 * @property-read SeoData|null current_locale_seo_data
 */
trait HasSeoData
{
    use HasRelationships;

    public function getMetaTitle(): ?string
    {
        return $this->current_locale_seo_data ? $this->current_locale_seo_data->meta_title : null;
    }

    public function getMetaDescription(): ?string
    {
        return $this->current_locale_seo_data ? $this->current_locale_seo_data->meta_description : null;
    }

    public function getMetaKeywords(): array
    {
        return $this->current_locale_seo_data ? ($this->current_locale_seo_data->meta_keywords ?: []) : [];
    }

    public function getOpenGraphTitle(): ?string
    {
        return $this->current_locale_seo_data ? $this->current_locale_seo_data->open_graph_title : null;
    }

    public function getOpenGraphDescription(): ?string
    {
        return $this->current_locale_seo_data ? $this->current_locale_seo_data->open_graph_description : null;
    }

    public function getOpenGraphImages(): array
    {
        return $this->current_locale_seo_data ? ($this->current_locale_seo_data->open_graph_images ?: []) : [];
    }

    public function getTwitterTitle(): ?string
    {
        return $this->current_locale_seo_data ? $this->current_locale_seo_data->twitter_title : null;
    }

    public function getTwitterDescription(): ?string
    {
        return $this->current_locale_seo_data ? $this->current_locale_seo_data->twitter_description : null;
    }

    public function getTwitterImage(): ?string
    {
        return $this->current_locale_seo_data ? $this->current_locale_seo_data->twitter_image : null;
    }

    public function getTwitterImageAlt(): ?string
    {
        return $this->current_locale_seo_data ? $this->current_locale_seo_data->twitter_image_alt : null;
    }

    public function getCurrentLocaleSeoDataAttribute()
    {
        return $this->seo_data->where('locale', App::getLocale())->first();
    }

    public function seo_data(): MorphMany
    {
        return $this->morphMany(SeoData::class, 'seoable');
    }
}
