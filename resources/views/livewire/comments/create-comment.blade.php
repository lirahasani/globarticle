<div class="container w-full flex justify-center">
    <div>
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>
  	<form class="m-4 flex" wire:submit.prevent="addComment">
        <div class="mt-2">
    	    <input class="rounded p-4 w-96 border mr-0 text-gray-800 border-gray-200 bg-white" wire:model.lazy="form.body" placeholder="Leave a comment here.."/>
		</div>
        @error('name')
            <span class="text-info">{{ $message }}</span>
        @enderror
        <div class="m-2">
            <button type="submit" class="px-8 rounded bg-yellow-400 w-28 text-gray-800 font-bold p-4 uppercase border-yellow-500 border">Add</button>
        </div>
    </form>
</div>