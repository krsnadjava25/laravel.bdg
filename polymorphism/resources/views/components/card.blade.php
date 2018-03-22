<div class="card">
    @isset($image)
    <div class="card-image" style="background-image: url('{{ $image }}')"></div>
    @endisset
    @isset($video)
    <div class="card-video">
        {{ $video }}
    </div>
    @endisset
    <div class="card-content">
        {{ $title }}
        {{ $slot }}
    </div>
</div>