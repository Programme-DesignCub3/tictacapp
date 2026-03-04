@php
    $videoId = null;
    $videoTitle = null;
    if (!empty($url)) {
        preg_match(
            '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/i',
            $url,
            $matches,
        );
        $videoId = $matches[1] ?? null;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.youtube.com/oembed?url=$url&format=json");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            $videoTitle = null;
        } else {
            $response = json_decode($response, true);
            $videoTitle = $response['title'] ?? null;
        }
        curl_close($ch);
    }

@endphp
@if (!empty($url))
    <div class="flex items-center gap-3 rounded-lg border border-gray-300 bg-gray-100 p-4">
        <img class="aspect-video w-32 cursor-pointer rounded-xl object-cover shadow-md transition-opacity hover:opacity-90"
            src="https://img.youtube.com/vi/{{ $videoId }}/mqdefault.jpg" alt="YouTube Video Thumbnail" />
        <div>
            <?php
            ?>
            <p class="text-sm font-bold text-gray-800">{{ $videoTitle ?? 'YouTube Embed' }}</p>
            <p class="text-xs text-gray-500">{{ $url }}</p>
        </div>
    </div>
@else
    <div class="rounded-lg border border-dashed border-gray-300 bg-gray-50 p-4 text-center text-sm text-gray-400">
        YouTube Block Placeholder
    </div>
@endif
