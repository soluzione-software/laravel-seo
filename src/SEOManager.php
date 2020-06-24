<?php

namespace SoluzioneSoftware\SEO;

use SoluzioneSoftware\SEO\Contracts\HasSeoData;
use SoluzioneSoftware\SEO\Traits\HasSeoable;

class SEOManager
{
    use HasSeoable;

    /**
     * @var MetaManager
     */
    protected $metaManager;

    /**
     * @var OpenGraphManager
     */
    protected $openGraphManager;

    /**
     * @var TwitterManager
     */
    protected $twitterManager;

    public function __construct(
        MetaManager $metaManager,
        OpenGraphManager $openGraphManager,
        TwitterManager $twitterManager
    ) {
        $this->metaManager = $metaManager;
        $this->openGraphManager = $openGraphManager;
        $this->twitterManager = $twitterManager;
    }

    public function meta(): MetaManager
    {
        return $this->metaManager;
    }

    public function openGraph(): OpenGraphManager
    {
        return $this->openGraphManager;
    }

    public function twitter(): TwitterManager
    {
        return $this->twitterManager;
    }

    public function setSeoable(HasSeoData $seoable): self
    {
        $this->seoable = $seoable;
        $this->metaManager->setSeoable($seoable);
        $this->openGraphManager->setSeoable($seoable);
        $this->twitterManager->setSeoable($seoable);
        return $this;
    }

    public function setTitle(string $title): self
    {
        $this->metaManager->setTitle($title);
        $this->openGraphManager->setTitle($title);
        $this->twitterManager->setTitle($title);
        return $this;
    }

    public function setDescription(string $title): self
    {
        $this->metaManager->setDescription($title);
        $this->openGraphManager->setDescription($title);
        $this->twitterManager->setDescription($title);
        return $this;
    }
}
