<div>
    <div class="relative shadow-md sm:rounded-lg">
        <button wire:click="$toggle('formCreate')" class="ml-6 mt-5 px-4 py-2 rounded-xl text-blue-600 bg-green-200">{{ $formCreate ? 'Show Products' : 'Create Product' }}</button>
        @if ($formCreate)
            <livewire:product.create />
        @endif
        @if (!$formCreate)
            <div class="flex items-center px-6 py-5 justify-between pb-4 bg-white">
                <div>
                    <select class="rounded-lg border-gray-300" wire:model="paginate" name="paginate" id="paginate">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                    </select>
                </div>
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input wire:model.debounce.1000ms="search" type="text" id="table-search-users" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search product">
                </div>
            </div>
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $index => $product)
                        <tr class="bg-white hover:bg-gray-50">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                    <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <td class="px-6">
                                {{ $loop->iteration }}
                            </td>
                            <th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                <div class="text-base font-semibold">{{ $product->title }}</div>
                            </th>
                            <td class="px-6 py-4">
                                Rp {{ number_format($product->price,0,",",".") }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('edit', ['productId' => $product->id]) }}" class="font-medium text-blue-600 hover:underline">Edit</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4">No products found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="px-4 py-5">
                {{ $products->links() }}
            </div>
        @endif
    </div>
        
</div>
    