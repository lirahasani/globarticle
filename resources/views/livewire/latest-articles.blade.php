<div>
<!-- component -->
    <section>
        <div class="container mx-auto text-gray-900 pt-10 pb-16">
            <div class="min-w-full text-center font-black uppercase pb-6 text-2xl">Latest Articles</div>
            <div class="flex flex-wrap px-6">
                @foreach($articles as $article)
                <div class="w-full lg:w-1/2 md:px-4 lg:px-6 py-5">
                    <div class="bg-white min-h-full shadow-2xl">
                        <div>
                            @if($article->photo)
                                <img src="{{ $article->photo_url }}"  class="object-cover h-48 w-full" alt="">
                            @endif
                        </div>
                        <!-- <div class="py-4 flex items-center justify-between">
                            <div class="pl-10 flex items-center w-full text-sm font-normal tracking-wider">
                                Lira Hasani, {{$article->created_at->diffForHumans()}}
                            </div>
                            <div class="italic w-6/12">{{ $article->category->name }}</div>
                        </div> -->
                        <div class="px-4 py-4 md:px-10">
                            <h1 class="font-bold text-2xl uppercase tracking-wider">
                                {{$article->title}}
                            </h1>
                            <p class="py-4 truncate">{{substr($article->body, 0, 120)}}<span class="tracking-widest">...<span></p>
                            <div>
                                @foreach($article->tags as $tag)
                                    <a href="/tag/articles/{{$tag->id}}" class="text-xs font-black p-1 my-3 mr-2 border border-gray-300 bg-gray-200 text-black rounded-lg hover:bg-blue-400 hover:text-gray-900">
                                        {{ $tag->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <hr>
                        <div class="px-4 md:px-10">
                            <div class="flex flex-wrap pt-3">
                                <div class="2/3 pb-5">
                                    <a href="article/{{$article->id}}" class="text-sm hover:text-indigo-500 tracking-wider uppercase font-medium">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
