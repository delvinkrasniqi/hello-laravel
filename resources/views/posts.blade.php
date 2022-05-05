@include('partials.header')


@foreach($posts as $post)

    <p>{{ $post }}</p>
    <a href="/posts/{{ $post->id }}">Lexo me shume</a>

@endforeach

@include('partials.footer')