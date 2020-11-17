<div>
    <div class="w-full text-center text-2xl py-10 font-black tracking-wider uppercase">Category: {{$categories->name}}</div>
<!-- component -->
<!-- Display Container (not part of component) START -->
  <div class="mx-auto px-16 sm:pb-20">
    @foreach($categories->articles as $articles)
    <!-- Carousel Body -->
    <div class="relative rounded-lg block md:flex mb-20 items-center pb-10 bg-gray-100 shadow-md" style="min-height: 19rem;">
      <div class="relative w-full md:w-2/5 h-full overflow-hidden rounded-t-lg md:rounded-t-none md:rounded-l-lg" style="min-height: 19rem;">
      @if($articles->photo)
        <img src="{{ Storage::url($articles->photo) }}"  class="absolute inset-0 w-full h-full object-cover object-center" alt="">
        @endif
        <div class="absolute inset-0 w-full h-full bg-indigo-900 opacity-50"></div>
      </div>
      <div class="w-full md:w-3/5 h-full flex items-center bg-gray-100 rounded-lg">
        <div class="p-12 md:pr-24 md:pl-16 md:py-12">
          <p class="text-gray-600"><span class="text-gray-900">{{$articles->title}}</p>
          <p class="text-gray-600">{{$articles->body}}</p>
        </div>
        <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-gray-100 -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
          <polygon points="50,0 100,0 50,100 0,100" />
        </svg>
      </div>
    </div>
    @endforeach
  </div>
  <!-- Display Container (not part of component) END -->
  </div>