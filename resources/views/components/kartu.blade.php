@props(['judul' => 'Tanpa Judul'])

<div class="kartu">
    <h3>{{ $judul }}</h3>

    <div class="isi">
        {{ $slot }}
    </div>

    @if (isset($footer) && $footer->isNotEmpty())
        <div class="kaki">
            {{ $footer }}
        </div>
    @endif
</div>
