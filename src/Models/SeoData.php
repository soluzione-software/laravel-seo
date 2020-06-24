<?php

namespace SoluzioneSoftware\SEO\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

/**
 * @property string|null meta_title
 */
class SeoData extends Model
{
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
