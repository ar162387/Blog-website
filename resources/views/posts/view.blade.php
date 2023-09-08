<x-app>
    
    <div class = "mt-10 spcae-y-5 prose prose-lg max-w-none text-justify">
    <h1 class = "font-bold">{{$post->title}}</h1>

    <x-author-meta :post="$post" />


    <div>
        
        
        {{$post->contents}}
        
        
    </div>

    
</div>
</x-app>