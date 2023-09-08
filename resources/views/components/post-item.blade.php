<div class="flex item">
    <li>
        <div class = "space-y-5 prose prose-lg max-w-none text-justify">
        <h2 class = "bold ">
            <a class = "no-underline font-bold hover:text-indigo-700 transition-colors duration-100" href="posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        </div>
        <div>
            {{ $post->excerpt }}
        </div>
        <x-author-meta :post="$post" />
    
    </li>
</div>