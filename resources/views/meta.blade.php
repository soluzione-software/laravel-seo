@if(\SoluzioneSoftware\SEO\Facades\SEO::meta()->hasTitle())
    <title>{{ \SoluzioneSoftware\SEO\Facades\SEO::meta()->getTitle() }}</title>
@endif
@if(\SoluzioneSoftware\SEO\Facades\SEO::meta()->hasDescription())
    <meta name="description" content="{{ \SoluzioneSoftware\SEO\Facades\SEO::meta()->getDescription() }}"/>
@endif
@if(\SoluzioneSoftware\SEO\Facades\SEO::meta()->hasKeywords())
    <meta name="keywords" content="{{ \SoluzioneSoftware\SEO\Facades\SEO::meta()->getKeywordsAsString() }}"/>
@endif
@if(\SoluzioneSoftware\SEO\Facades\SEO::meta()->hasCanonical())
    <link rel="canonical" href="{{ \SoluzioneSoftware\SEO\Facades\SEO::meta()->getCanonical() }}"/>
@endif
@foreach(\SoluzioneSoftware\SEO\Facades\SEO::meta()->getAlternates() as $lang => $url)
    <link rel="alternate" hreflang="{{ $lang }}" href="{{ $url }}"/>
@endforeach
