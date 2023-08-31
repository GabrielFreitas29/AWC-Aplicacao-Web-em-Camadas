@foreac($posts as $post)

    <h1><a href="{{ route('post.show', $post->id) }}"{{ $post->title }}></a></h1>
    <p>{{  $post -> content }}</p>


@endforeach