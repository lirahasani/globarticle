<div class="container mx-6 my-10 flex justify-center">
    <div x-data="{open: false}" class="flex flex-col">
        <div class="flex items-center justify-between">
            <div class="w-full uppercase text-gray-800 ml-10 font-semibold text-xl mb-4">Articles Table</div>
            <a href="/articles/create" class="hover:text-gray-900 border-gray-800 text-gray-700 p-4 w-full text-right pr-16 uppercase tracking-widest rounded-full mb-4">Add Article</a>
        </div>
        <div class="-my-2 overflow-x-auto">
            <div class="py-2 align-middle inline-block man-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-3 py-1 bg-gray-50 text-center uppercase tracking-wide text-gray-600 text-xs font-bold mb-2">
                                    Title
                                </th>
                                <th class="py-3 bg-gray-50 text-center uppercase tracking-wide text-gray-600 text-xs font-bold mb-2">
                                    Body
                                </th>
                                <th class="px-3 py-3 bg-gray-50 text-center uppercase tracking-wide text-gray-600 text-xs font-bold mb-2">
                                    Author
                                </th>
                                <th class="px-3 py-3 bg-gray-50 text-center uppercase tracking-wide text-gray-600 text-xs font-bold mb-2">
                                    Created At
                                </th>
                                <th class="px-3 py-3 bg-gray-50 text-center uppercase tracking-wide text-gray-600 text-xs font-bold mb-2">
                                    Updated At
                                </th>
                                <th class="px-3 py-3 bg-gray-50 text-center uppercase tracking-wide text-gray-600 text-xs font-bold mb-2">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($articles as $article)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-600">
                                    {{$article->title}}
                                </td>
                                <td class="px-6 py-4 text-sm max-w-24 leading-5 text-gray-600">
                                    {{substr($article->body, 0, 100)}}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-600">
                                    Lira Hasani
                                </td>
                                <td class="px-6 py-4 text-sm leading-5 text-gray-600">
                                    {{$article->created_at->shortRelativeDiffForHumans()}}
                                </td>
                                <td class="px-6 py-4 text-sm leading-5 text-gray-600">
                                    {{$article->updated_at->shortRelativeDiffForHumans()}}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-600">
                                    <a href="/article/{{$article->id}}" class="p-2"><i class="fas fa-eye"></i></a>
                                    <a href="/article/{{$article->id}}/edit" class="p-2"><i class="fas fa-edit"></i></a>
                                    <button class="p-2 outline-none" wire:click="show({{$article->id}})" @click="open=true"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            @endforeach
                            <!-- More rows... -->
                        </tbody>
                    </table>


                    <!-- modal -->
                    <div x-show="open" class="fixed inset-0 bg-opacity-50 bg-white flex items-center justify-center">
                        <div class="flex flex-col bg-white shadow-2xl rounded-lg border-1 border-gray-300 p-6">
                            <div class="flex justify-between mb-4">
                                <p>Are you sure you want to delete this article?</p>
                            </div>
                            <div>
                                <button class="hover:bg-gray-200 hover:text-gray-700 bg-gray-800 text-white p-4 rounded" type="submit" wire:click="delete()" @click="open=false">Delete</button>
                                <button class="hover:bg-gray-200 hover:text-gray-700 bg-gray-800 text-white p-4 rounded" @click="open=false">Cancel</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{ $articles->links('pagination-links') }}
    </div>
</div>