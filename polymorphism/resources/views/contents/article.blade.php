@component('components.card')
@slot('title')
<div class="card-title">{{ $title }}</div>
@endslot
{{ $content }}
@endcomponent