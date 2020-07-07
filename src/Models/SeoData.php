<?php

namespace SoluzioneSoftware\SEO\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

/**
 * @property Model seoable
 * @property string locale
 * @property string|null meta_title
 * @property string|null meta_description
 * @property array|null meta_keywords
 * @property string|null open_graph_title
 * @property string|null open_graph_description
 * @property array|null open_graph_images
 * @property string|null twitter_title
 * @property string|null twitter_description
 * @property string|null twitter_image
 * @property string|null twitter_image_alt
 */
class SeoData extends Model
{
    protected $casts = [
        'meta_keywords' => 'array',
        'open_graph_images' => 'array',
    ];

    public function getTable()
    {
        return static::table();
    }

    public static function table()
    {
        return Config::get('seo.table');
    }

    public function seoable()
    {
        return $this->morphTo();
    }
}
