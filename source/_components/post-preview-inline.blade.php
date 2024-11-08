<div class="flex flex-col mb-4">


    <h2 class="text-3xl my-1 ">
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
            class="text-gray-900 font-extrabold"
        >{{ $post->title }}</a>
    </h2>
    <p class="text-gray-700 font-medium my-1">
        {{ $post->getDate()->format('d-m-Y') }}
    </p>
    <p class="mb-4 mt-0">{!! $post->getExcerpt(200) !!}</p>


</div>
