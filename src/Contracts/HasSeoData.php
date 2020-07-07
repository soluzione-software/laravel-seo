<?php

namespace SoluzioneSoftware\SEO\Contracts;

interface HasSeoData
{
    public function getMetaTitle(): ?string;

    public function getMetaDescription(): ?string;

    public function getMetaKeywords(): array;

    public function getOpenGraphTitle(): ?string;

    public function getOpenGraphDescription(): ?string;

    public function getOpenGraphImages(): array;

    public function getTwitterTitle(): ?string;

    public function getTwitterDescription(): ?string;

    public function getTwitterImage(): ?string;

    public function getTwitterImageAlt(): ?string;
}
