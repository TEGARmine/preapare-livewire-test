<div>
    <div class="mx-96 mt-10 bg-slate-50 rounded-2xl flex items-center justify-between px-5">
        <div class="py-10 px-5">
            <form wire:submit.prevent="save">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Your message</label>
                <textarea wire:model="message.body" id="message" rows="2" class="w-[420px] block p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
                @error('message.body')
                    <p class="text-red-600 text-sm">
                        {{ $message }}
                    </p>
                @enderror
                <button class="mt-5 bg-blue-500 text-white px-5 py-2 rounded-xl hover:bg-blue-400" type="submit">Submit</button>
            </form>
        </div>
        <div>
            <livewire:post.index />
        </div>
    </div>
</div>
