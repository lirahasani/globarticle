<div>
    <div class="container my-10 w-full flex justify-center">
        <div class="max-w-6xl w-full lg:flex">
            <div class="lg:h-auto lg:w-1/2 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center">
                @if($article->photo)
                    <img class="min-h-full min-w-full" src="{{ Storage::url($article->photo) }}">
                @endif
            </div>
            <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 justify-between leading-normal">
                <div class="mb-8">
                    <div class="font-bold text-xl mb-2 uppercase text-gray-900">{{ $article['title'] }}</div>
                    <p class="text-base py-2 text-gray-900">{{ $article['body'] }}</p>
                </div>
                <div class="flex items-center">
                    <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
                    <div class="text-sm">
                        <p class="text-gray-900 leading-none">{{$article->user->name}}</p>
                        <p class="text-gray-dark">{{ $article['created_at']->diffForHumans() }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewire('comments.show-comments')
</div>
