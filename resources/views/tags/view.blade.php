<x-app>


    <h1 class= "mt-10 text-3xl font-semibold">Tagged {{ $tag}}</h1>
    
        @foreach ($posts as $post)
        
        
            <x-post-items :post="$post" />
        
            
        @endforeach
   
    </x-app>
    