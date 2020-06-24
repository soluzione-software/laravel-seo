<?php

namespace SoluzioneSoftware\SEO;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;
use SoluzioneSoftware\SEO\Traits\HasSeoable;

class OpenGraphManager
{
    use HasSeoable;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string|null
     */
    protected $description = null;

    /**
     * @var array<string>
     */
    protected $images;

    /**
     * @var string
     */
    protected $url;

    public function __construct()
    {
        $this->type = Config::get('seo.open_graph.defaults.type');
        $this->title = Config::get('seo.open_graph.defaults.title') ?: Config::get('seo.defaults.title') ?: Config::get('app.name');
        $this->description = Config::get('seo.open_graph.defaults.description') ?: Config::get('seo.defaults.description');
        $this->images = (array) Config::get('seo.open_graph.defaults.images');
        $this->url = Config::get('seo.open_graph.defaults.url') ?: URL::current();
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
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

    public function getImages(): array
    {
        return $this->images;
    }

    public function setImages(string $images): self
    {
        $this->images = $images;
        return $this;
    }

    public function hasImages(): bool
    {
        return count($this->images) > 0;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }
}
