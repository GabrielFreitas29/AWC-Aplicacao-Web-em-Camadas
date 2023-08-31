</head>
<body>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method("PUT")
        Título: <input type="text" name>
    </form>
</body>