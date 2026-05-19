<div>
    <div class="flex justify-between items-center mb-6">
        <div>
            <flux:heading size="xl">Portfolios</flux:heading>
            <flux:subheading>Manage your portfolio items.</flux:subheading>
        </div>
        <flux:button variant="primary" wire:click="create" x-on:click="$flux.modal('portfolio-modal').show()">
            Add Portfolio
        </flux:button>
    </div>

    @if (session()->has('message'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <div class="bg-white dark:bg-zinc-800 shadow rounded-lg overflow-hidden border border-zinc-200 dark:border-zinc-700">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
                    <th class="px-4 py-3 text-sm font-semibold text-zinc-800 dark:text-zinc-200">Title</th>
                    <th class="px-4 py-3 text-sm font-semibold text-zinc-800 dark:text-zinc-200">Image URL</th>
                    <th class="px-4 py-3 text-sm font-semibold text-zinc-800 dark:text-zinc-200 text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($portfolios as $portfolio)
                    <tr class="border-b border-zinc-200 dark:border-zinc-700 last:border-b-0">
                        <td class="px-4 py-3 text-sm text-zinc-800 dark:text-zinc-200">{{ $portfolio->title }}</td>
                        <td class="px-4 py-3 text-sm text-zinc-600 dark:text-zinc-400">
                            @if($portfolio->image_url)
                                <img src="{{ $portfolio->image_url }}" alt="Portfolio Image" class="h-10 rounded">
                            @else
                                <span class="text-zinc-400 italic">No image</span>
                            @endif
                        </td>
                        <td class="px-4 py-3 text-right">
                            <flux:button size="sm" variant="outline" wire:click="edit({{ $portfolio->id }})" x-on:click="$flux.modal('portfolio-modal').show()">Edit</flux:button>
                            <flux:button size="sm" variant="danger" wire:click="delete({{ $portfolio->id }})" wire:confirm="Are you sure you want to delete this portfolio?">Delete</flux:button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-4 py-8 text-center text-zinc-500">No portfolios found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <flux:modal name="portfolio-modal" class="md:w-96">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">{{ $portfolio_id ? 'Edit Portfolio' : 'Add Portfolio' }}</flux:heading>
                <flux:subheading>Fill in the details for the portfolio.</flux:subheading>
            </div>

            <form wire:submit="store" class="space-y-4">
                <flux:field>
                    <flux:label>Title</flux:label>
                    <flux:input wire:model="title" placeholder="e.g. Web App Design" />
                    <flux:error name="title" />
                </flux:field>

                <flux:field>
                    <flux:label>Image URL</flux:label>
                    <flux:input wire:model="image_url" placeholder="https://example.com/image.jpg" />
                    <flux:error name="image_url" />
                </flux:field>

                <div class="flex justify-end gap-2 mt-4">
                    <flux:button variant="ghost" x-on:click="$flux.modal('portfolio-modal').close()">Cancel</flux:button>
                    <flux:button type="submit" variant="primary" wire:loading.attr="disabled" wire:target="store">
                        <span wire:loading.remove wire:target="store">Save</span>
                        <span wire:loading wire:target="store" class="flex items-center gap-2">
                            <svg class="animate-spin h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Saving...
                        </span>
                    </flux:button>
                </div>
            </form>
        </div>
    </flux:modal>
    
    <div x-data="{}" x-on:close-modal.window="$flux.modal('portfolio-modal').close()"></div>
</div>
