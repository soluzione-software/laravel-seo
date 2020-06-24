<?php

namespace SoluzioneSoftware\SEO\Facades;

use Illuminate\Support\Facades\Facade;
use SoluzioneSoftware\SEO\Contracts\HasSeoData;
use SoluzioneSoftware\SEO\MetaManager;
use SoluzioneSoftware\SEO\OpenGraphManager;
use SoluzioneSoftware\SEO\SEOManager;
use SoluzioneSoftware\SEO\TwitterManager;

/**
 * @method static MetaManager meta()
 * @method static OpenGraphManager openGraph()
 * @method static TwitterManager twitter()
 * @method static SEOManager setSeoable(HasSeoData $seoable)
 * @method static SEOManager setTitle(string $title)
 * @method static SEOManager setDescription(string $description)
 *
 * @see \SoluzioneSoftware\SEO\SEOManager
 */
class SEO extends Facade
{
    /**
     * @inheritDoc
     */
    protected static function getFacadeAccessor()
    {
        return 'seo.manager';
    }
}
