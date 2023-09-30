<div>
    <div class="mx-[400px] px-6 py-5">
        <form wire:submit.prevent="store">
            <div class="mb-6 flex gap-4">
                <div class="flex-1">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                    <input wire:model="product.title" type="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Samsung Galaxy" required>
                </div>
                <div class="flex-1">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
                    <input wire:model="product.price" type="number" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Rp.100000" required>
                </div>
            </div>
            <div class="mb-6">
                <label for="description" class="block mb-2 text-sm font-medium">Description</label>
                <textarea wire:model="product.description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description is..."></textarea>
            </div>
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium" for="user_avatar">Image</label>
                <input wire:model="image" class="block w-full text-sm border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                @if ($image)
                    <img src="{{ $image->temporaryUrl() }}" alt="" height="200">
                @else
                    <img src="{{ $imageOld }}" alt="" height="200">
                @endif
            </div>
            <div class="flex items-start">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </form>
    </div>
</div>
