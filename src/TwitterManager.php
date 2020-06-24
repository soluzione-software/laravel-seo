<?php

namespace SoluzioneSoftware\SEO;

use Illuminate\Support\Facades\Config;
use SoluzioneSoftware\SEO\Traits\HasSeoable;

class TwitterManager
{
    use HasSeoable;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string|null
     */
    protected $description = null;

    /**
     * @var string|null
     */
    protected $image = null;

    /**
     * @var string|null
     */
    protected $imageAlt = null;

    public function __construct()
    {
        $this->title = Config::get('seo.twitter.defaults.title') ?: Config::get('seo.defaults.title') ?: Config::get('app.name');
        $this->description = Config::get('seo.twitter.defaults.description') ?: Config::get('seo.defaults.description');
        $this->image = Config::get('seo.twitter.defaults.image');
        $this->imageAlt = Config::get('seo.twitter.defaults.image_alt');
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function hasDescription(): bool
    {
        return !empty($this->description);
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;
        return $this;
    }

    public function hasImage(): bool
    {
        return !empty($this->image);
    }

    public function getImageAlt(): ?string
    {
        return $this->imageAlt;
    }

    public function setImageAlt(string $imageAlt): self
    {
        $this->imageAlt = $imageAlt;
        return $this;
    }

    public function hasImageAlt(): bool
    {
        return !empty($this->imageAlt);
    }
}
