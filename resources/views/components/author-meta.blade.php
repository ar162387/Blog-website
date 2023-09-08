<div class="flex items-centre justify-between">
    <div class = "text-sm">
        Posted {{ $post->date->diffForHumans() }} by <a class = "no-underline font-bold text-indigo-500 hover:text-indigo-900 transition-colors duration-100" href="authors/{{ $post->author }}">{{ $post->author_name }}</a>
    </div>
    
    @if (count($post->TAGS))
    
        <div class="text-sm">
            @foreach ($post->TAGS as $tag)
    
            <a class = "hover:opacity-70 transition:text-opacity-200 duration-100" href="/tags/{{$tag}}">
                <span class = "bg-indigo-500 text-white capitalize rounded-full inline-flex text-xs font-semibold leading-5 py-0.5 px-3 ">{{$tag}}</span>
            </a>
    
            @endforeach
        </div>
    
    @endif
</div>