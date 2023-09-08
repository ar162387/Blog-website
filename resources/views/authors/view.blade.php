<x-app>


<h1 class= "mt-10 text-3xl font-semibold">Latest Post by {{ $authorName}}</h1>
<ul class="mt-10 space-y-10">
    @foreach ($posts as $post)
    
    <x-post-items :post="$post" />

        
    @endforeach
</ul>
</x-app>
