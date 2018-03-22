@component('components.card')
@slot('video')
<iframe width="560" height="315" src="{{ $url }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
@endslot
@slot('title')
<div class="card-title">{{ $caption }}</div>
@endslot
@endcomponent