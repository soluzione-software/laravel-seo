<?php

namespace SoluzioneSoftware\SEO\Traits;

use SoluzioneSoftware\SEO\Contracts\HasSeoData;

trait HasSeoable
{
    /**
     * @var HasSeoData|null
     */
    protected $seoable;

    public function setSeoable(HasSeoData $seoable): self
    {
        $this->seoable = $seoable;
        return $this;
    }
}
