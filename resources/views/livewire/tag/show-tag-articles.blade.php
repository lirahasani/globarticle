<div>
    <div class="w-full text-center my-8 text-2xl ">Articles with <span class="italic underline">{{$tag->name}}</span> tag</div>
    <!-- component -->
    <!-- post card -->
    @foreach($tag->articles as $article)
    <div class="flex bg-white shadow-lg rounded-lg md:mx-auto my-8 max-w-md md:max-w-2xl "><!--horizantil margin is just for display-->
        <div class="flex items-start px-4 py-6">
            <img class="w-12 h-12 rounded-full object-cover mr-4 shadow" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
            <div class="">
                <div class="flex items-center justify-between">
                    <h2 class="text-lg font-semibold text-gray-900 -mt-1">{{$article->user->name}}, <span class="text-sm">{{$article->created_at->diffForHumans()}}</span></h2>
                    
                </div>
                <p class="text-gray-700">{{ $article->title }} </p>
                <p class="mt-3 text-gray-700 text-sm">{{substr($article->body, 0, 120)}}</p>
            </div>
        </div>
        <hr>
        <div class="px-4 md:px-10">
            <div class="pt-3">
                <div class="2/3 pb-5">
                    <a href="{{ route('articles.show',$article)}}" class="text-sm hover:text-indigo-500 tracking-wider uppercase font-medium">Read More</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>