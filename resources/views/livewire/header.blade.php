<div class="header">
    <nav class="bg-black border-b border-gray-300">
        <div class="container mx-auto flex items-center justify-between px-4 py-6">
            <div class="flex items-center uppercase font-medium text-m tracking-wider text-white">
                <a href="/">
                    <div class="px-4 py-2 border-double border-4 border-gray-500 hover:border-gray-600 hover:text-gray-300 tracking-widest">GA</div>
                </a>
                <div>
                    <div x-data="{open: false}"> 
                        <span>
                            <button type="button" @click="open = !open" class="mx-4 uppercase focus:outline-none cursor-pointer text-white hover:text-blue-300 inline-flex justify-center p-2 pl-3 pr-1" :class="{'shadow-none': open, 'shadow-none': open}">
                            Explore our content
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" :class="{'rotate-180': open}" class="ml-1 transform inline-block fill-current text-gray-500 w-6 h-6"><path fill-rule="evenodd" d="M15.3 10.3a1 1 0 011.4 1.4l-4 4a1 1 0 01-1.4 0l-4-4a1 1 0 011.4-1.4l3.3 3.29 3.3-3.3z"/></svg>
                            </button>
                        </span>
                        <div x-show="open" class="pl-5" @click.away="open = false">
                            <ul class="absolute z-20 shadow rounded w-64 text-white uppercase bg-black" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-end="opacity-0 transform -translate-y-3">
                                @foreach($categories as $category)
                                    <li><a href="/category/{{$category->id}}" class="py-2 pl-8 block border border-gray-900 hover:text-blue-400">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div> 
                <a href="" class="pr-4 hover:text-blue-300">Subscribe</a>
            </div>
            <ul class="text-white flex font-medium items-center space-x-5 uppercase tracking-wider">
                <li class="hover:text-blue-300"><a href="/">Home</a></li>
                <li class="hover:text-blue-300"><a href="/articles">Articles</a></li>
                <li class="hover:text-blue-300"><a href="/categories">Categories</a></li>
                <li class="hover:text-blue-300"><a href="/tags">Tags</a></li>
                <li class="hover:text-blue-300"><a href="/contact">Contact</a></li>
                @if (Route::has('login'))
                    @auth
                        <form @submit.prevent="logout">
                            <jet-dropdown-link as="button">
                                Logout
                            </jet-dropdown-link>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="hover:text-blue-300">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 hover:text-blue-300">Register</a>
                        @endif
                    @endif
            @endif
            </ul>
        </div>
    </nav>
</div>