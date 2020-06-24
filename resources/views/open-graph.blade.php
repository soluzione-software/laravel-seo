<meta property="og:type" content="{{ \SoluzioneSoftware\SEO\Facades\SEO::openGraph()->getType() }}"/>
<meta property="og:title" content="{{ \SoluzioneSoftware\SEO\Facades\SEO::openGraph()->getTitle() }}"/>
@foreach(\SoluzioneSoftware\SEO\Facades\SEO::openGraph()->getImages() as $image)
    <meta property="og:image" content="{{ $image }}"/>
@endforeach
<meta property="og:url" content="{{ \SoluzioneSoftware\SEO\Facades\SEO::openGraph()->getUrl() }}"/>
@if(\SoluzioneSoftware\SEO\Facades\SEO::openGraph()->hasDescription())
    <meta name="og:description" content="{{ \SoluzioneSoftware\SEO\Facades\SEO::openGraph()->getDescription() }}"/>
@endif
