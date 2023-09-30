<div>
    @foreach ($posts as $post)
        <h2 class="mb-2 text-lg font-semibold">{{ $post->user->email }} :</h2>
        <ul class="max-w-md space-y-1 list-disc list-inside">
            <li>
                {{ $post->body }}
            </li>
        </ul> 
    @endforeach
</div>
