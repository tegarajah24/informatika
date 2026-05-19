<div>
    <div class="flex justify-between items-center mb-6">
        <div>
            <flux:heading size="xl">Services</flux:heading>
            <flux:subheading>Manage the services offered on the landing page.</flux:subheading>
        </div>
        <flux:button variant="primary" wire:click="create" x-on:click="$flux.modal('service-modal').show()">
            Add Service
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
                    <th class="px-4 py-3 text-sm font-semibold text-zinc-800 dark:text-zinc-200">Description</th>
                    <th class="px-4 py-3 text-sm font-semibold text-zinc-800 dark:text-zinc-200 text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($services as $service)
                    <tr class="border-b border-zinc-200 dark:border-zinc-700 last:border-b-0">
                        <td class="px-4 py-3 text-sm text-zinc-800 dark:text-zinc-200">{{ $service->title }}</td>
                        <td class="px-4 py-3 text-sm text-zinc-600 dark:text-zinc-400">{{ Str::limit($service->desc, 50) }}</td>
                        <td class="px-4 py-3 text-right">
                            <flux:button size="sm" variant="outline" wire:click="edit({{ $service->id }})" x-on:click="$flux.modal('service-modal').show()">Edit</flux:button>
                            <flux:button size="sm" variant="danger" wire:click="delete({{ $service->id }})" wire:confirm="Are you sure you want to delete this service?">Delete</flux:button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-4 py-8 text-center text-zinc-500">No services found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <flux:modal name="service-modal" class="md:w-96">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">{{ $service_id ? 'Edit Service' : 'Add Service' }}</flux:heading>
                <flux:subheading>Fill in the details for the service.</flux:subheading>
            </div>

            <form wire:submit="store" class="space-y-4">
                <flux:field>
                    <flux:label>Title</flux:label>
                    <flux:input wire:model="title" placeholder="e.g. Web Development" />
                    <flux:error name="title" />
                </flux:field>

                <flux:field>
                    <flux:label>Description</flux:label>
                    <flux:textarea wire:model="desc" rows="4" placeholder="Description of the service..." />
                    <flux:error name="desc" />
                </flux:field>

                <div class="flex justify-end gap-2 mt-4">
                    <flux:button variant="ghost" x-on:click="$flux.modal('service-modal').close()">Cancel</flux:button>
                    <flux:button type="submit" variant="primary">Save</flux:button>
                </div>
            </form>
        </div>
    </flux:modal>
    
    <div x-data="{}" x-on:close-modal.window="$flux.modal('service-modal').close()"></div>
</div>
