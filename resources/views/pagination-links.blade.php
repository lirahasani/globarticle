@if($paginator->hasPages())
<ul class="flex justify-between">
    <!-- //previous -->
    @if($paginator->onFirstPage())
    <li class="w-16 mt-4 px-2 ml-10 py-1 cursor-not-allowed  text-gray-600 text-center rounded border bg-gray-100">Prev</li>
    @else
    <li  wire:key="navnext-{{ Str::random(10) }}" class="w-16 mt-4 px-2 ml-10 py-1 cursor-pointer  text-gray-600 text-center rounded border shadow bg-white" wire:click="previousPage">Prev</li>
    @endif

    <!-- //next -->
    @if($paginator->hasMorePages())
    <li class="w-16 mt-4 px-2 mr-12 py-1 cursor-pointer  text-gray-600 text-center rounded border shadow bg-white" wire:click="nextPage">Next</li>
    @else
    <li class="w-16 mt-4 px-2 mr-12 py-1 cursor-not-allowed  text-gray-600 text-center rounded border bg-gray-100">Next</li>
    @endif
</ul>
@endif