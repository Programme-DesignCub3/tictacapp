{{-- resources/views/filament/forms/components/rich-editor/rich-content-custom-blocks/youtube/index.blade.php --}}
@php
    $videoId = null;
    if (!empty($url)) {
        preg_match(
            '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/i',
            $url,
            $matches,
        );
        $videoId = $matches[1] ?? null;
    }
@endphp

@if ($videoId)
    <img class="youtube-embed-placeholder my-6 aspect-video w-full cursor-pointer rounded-xl object-cover shadow-md transition-opacity hover:opacity-90"
        src="https://img.youtube.com/vi/{{ $videoId }}/maxresdefault.jpg" alt="YouTube Video Thumbnail" />
@endif
