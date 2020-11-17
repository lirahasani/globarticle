<div class="container my-10 w-full flex justify-center">
    <div>
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>
    <form class="w-full max-w-lg" wire:submit.prevent="update()" enctype="multipart/form-data">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-title">
                    Title
                </label>
                <input wire:model.lazy="form.title" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text">
            </div>
            @error('form.title')
            <span class="text-info">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <div class="uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-title">
                    Category
                </div>
                <select wire:model="form.category_id" class="w-full h-10 bg-gray-200 text-gray-700 px-4">
                    <option selected="selected">Choose a category</option>
                    @foreach($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('form.category_id')
            <span class="text-info">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-body">
                    Body
                </label>
                <input wire:model.lazy="form.body" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded pt-3 pb-10 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Enter the content">
            </div>
            @error('form.body')
            <span class="text-info">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-wrap -mx-3 mt-10 mb-12">
            <div class="w-full px-3">
                <label class="rounded-lg px-20 text-center text-gray-500 p-8 cursor-pointer border border-dashed border-gray-500"
            style="background-image: linear-gradient( 89.9deg,  rgba(208,246,255,1) 0.1%, rgba(255,237,237,1) 47.9%, rgba(255,255,231,1) 100.2% );">Upload Image
                <input type="file" class="hidden" wire:model.lazy="photo">
                </label>
            </div>
            @error('form.photo')
                <span class="text-info">{{ $message }}</span>
            @enderror

            @if($photo)
                <img src="{{ $photo->temporaryUrl() }}" class="mt-16 pl-3">
             @elseif($form['photo'] ?? false)
                <img src="{{ $article->photo_url }}" class="mt-16 pl-3">
            @endif
        </div>
        <div>
            <button type="submit" class="hover:bg-gray-200 hover:text-gray-700 bg-gray-800 text-white p-4 rounded">Update Article</button>
        </div>
    </form>
</div>