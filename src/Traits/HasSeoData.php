<?php

namespace SoluzioneSoftware\SEO\Traits;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Concerns\HasRelationships;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Arr;
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
        $title = $this->current_locale_seo_data ? $this->current_locale_seo_data->meta_title : null;
        return $title ?: $this->getDefaultSeoTitle();
    }

    protected function getDefaultSeoTitle(): ?string
    {
        return null;
    }

    public function getMetaDescription(): ?string
    {
        $description = $this->current_locale_seo_data ? $this->current_locale_seo_data->meta_description : null;
        return $description ?: $this->getDefaultSeoDescription();
    }

    protected function getDefaultSeoDescription(): ?string
    {
        return null;
    }

    public function getMetaKeywords(): array
    {
        return $this->current_locale_seo_data ? ($this->current_locale_seo_data->meta_keywords ?: []) : [];
    }

    public function getOpenGraphTitle(): ?string
    {
        $title = $this->current_locale_seo_data ? $this->current_locale_seo_data->open_graph_title : null;
        return $title ?: $this->getDefaultSeoTitle();
    }

    public function getOpenGraphDescription(): ?string
    {
        $description = $this->current_locale_seo_data ? $this->current_locale_seo_data->open_graph_description : null;
        return $description ?: $this->getDefaultSeoDescription();
    }

    public function getOpenGraphImages(): array
    {
        $images = $this->current_locale_seo_data ? ($this->current_locale_seo_data->open_graph_images ?: []) : [];
        return $images ?: $this->getDefaultSeoImages();
    }

    protected function getDefaultSeoImages(): array
    {
        return [];
    }

    public function getTwitterTitle(): ?string
    {
        $title = $this->current_locale_seo_data ? $this->current_locale_seo_data->twitter_title : null;
        return $title ?: $this->getDefaultSeoTitle();
    }

    public function getTwitterDescription(): ?string
    {
        $description = $this->current_locale_seo_data ? $this->current_locale_seo_data->twitter_description : null;
        return $description ?: $this->getDefaultSeoDescription();
    }

    public function getTwitterImage(): ?string
    {
        $image = $this->current_locale_seo_data ? $this->current_locale_seo_data->twitter_image : null;
        return $image ?: Arr::first($this->getDefaultSeoImages());
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
