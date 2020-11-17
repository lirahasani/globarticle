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
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-name">
                    Name
                </label>
                <input wire:model.lazy="form.name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text">
            </div>
            @error('form.name')
            <span class="text-info">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <button type="submit" class="hover:bg-gray-200 hover:text-gray-700 bg-gray-800 text-white p-4 rounded">Update Category</button>
        </div>
    </form>
</div>