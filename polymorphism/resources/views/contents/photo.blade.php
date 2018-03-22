@component('components.card')
@slot('image')
{{ $url }}
@endslot
@slot('title')
<div class="card-title">{{ $caption }}</div>
@endslot
@endcomponent