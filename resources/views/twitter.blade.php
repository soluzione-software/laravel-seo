<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="{{ \SoluzioneSoftware\SEO\Facades\SEO::twitter()->getTitle() }}"/>
@if(\SoluzioneSoftware\SEO\Facades\SEO::twitter()->hasDescription())
    <meta name="twitter:description" content="{{ \SoluzioneSoftware\SEO\Facades\SEO::twitter()->getDescription() }}"/>
@endif
@if(\SoluzioneSoftware\SEO\Facades\SEO::twitter()->hasImage())
    <meta name="twitter:image" content="{{ \SoluzioneSoftware\SEO\Facades\SEO::twitter()->getImage() }}"/>
@endif
@if(\SoluzioneSoftware\SEO\Facades\SEO::twitter()->hasImageAlt())
    <meta name="twitter:image:alt" content="{{ \SoluzioneSoftware\SEO\Facades\SEO::twitter()->getImageAlt() }}"/>
@endif
