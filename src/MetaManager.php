<?php

namespace SoluzioneSoftware\SEO;

use SoluzioneSoftware\SEO\Traits\HasSeoable;

class MetaManager
{
    use HasSeoable;

    /**
     * @var string|null
     */
    protected $title = null;

    /**
     * @var string|null
     */
    protected $description = null;

    /**
     * @var string[]
     */
    protected $keywords = [];

    /**
     * @var string|null
     */
    protected $canonical = null;

    /**
     * @var array
     */
    protected $alternates = [];

    public function hasTitle(): bool
    {
        return !empty($this->getTitle());
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $content)
    {
        $this->description = $content;
        return $this;
    }

    public function hasDescription(): bool
    {
        return !empty($this->description);
    }

    public function getKeywords(): array
    {
        return $this->keywords;
    }

    public function setKeywords(array $keywords)
    {
        $this->keywords = $keywords;
        return $this;
    }

    public function getKeywordsAsString(): string
    {
        return implode(',', $this->keywords);
    }

    public function hasKeywords(): bool
    {
        return count($this->keywords) > 0;
    }

    public function getCanonical(): ?string
    {
        return $this->canonical;
    }

    public function setCanonical(string $canonical)
    {
        $this->canonical = $canonical;
        return $this;
    }

    public function hasCanonical(): bool
    {
        return !empty($this->canonical);
    }

    public function addAlternate(string $lang, string $url): self
    {
        $this->alternates[$lang] = $url;
        return $this;
    }

    public function getAlternates(): array
    {
        return $this->alternates;
    }

    public function hasAlternates(): bool
    {
        return count($this->alternates) > 0;
    }
}
