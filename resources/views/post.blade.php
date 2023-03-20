<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>
        <div><i>
                {!! $post->body!!}
            </i>
        </div>
    </article>
    <a href="/">Go back ..</a>
</x-layout>
