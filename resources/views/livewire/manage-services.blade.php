<div class="space-y-6 p-6 lg:p-8">
    <!-- Header Block -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 bg-white dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 rounded-2xl p-6 shadow-sm">
        <div>
            <div class="flex items-center gap-2">
                <flux:heading size="xl" class="font-extrabold text-zinc-900 dark:text-white">Services</flux:heading>
                <flux:badge size="sm" color="blue" class="font-semibold">{{ $services->total() }}</flux:badge>
            </div>
            <flux:subheading class="text-zinc-500 mt-1">Kelola daftar layanan program studi yang ditampilkan pada halaman utama.</flux:subheading>
        </div>
        <div class="flex items-center gap-3 w-full md:w-auto">
            <flux:input wire:model.live="search" icon="magnifying-glass" placeholder="Cari layanan..." class="w-full md:w-64" />
            <flux:button variant="primary" wire:click="create" x-on:click="$flux.modal('service-modal').show()" class="shrink-0 bg-blue-600 hover:bg-blue-700 text-white shadow-sm transition-all duration-200">
                Tambah Service
            </flux:button>
        </div>
    </div>

    <!-- Alert Message -->
    @if (session()->has('message'))
        <div class="flex items-center gap-3 p-4 bg-emerald-50 dark:bg-emerald-950/30 text-emerald-800 dark:text-emerald-400 border border-emerald-200 dark:border-emerald-800/50 rounded-2xl text-sm font-medium animate-fadeIn">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            {{ session('message') }}
        </div>
    @endif

    <!-- Data Table Container -->
    <div class="bg-white dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 rounded-2xl overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-sm">
                <thead>
                    <tr class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
                        <th class="px-6 py-4 font-bold text-zinc-700 dark:text-zinc-300 uppercase tracking-wider text-xs">Title</th>
                        <th class="px-6 py-4 font-bold text-zinc-700 dark:text-zinc-300 uppercase tracking-wider text-xs">Description</th>
                        <th class="px-6 py-4 font-bold text-zinc-700 dark:text-zinc-300 uppercase tracking-wider text-xs text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700">
                    @forelse ($services as $service)
                        <tr class="hover:bg-zinc-50 dark:hover:bg-zinc-750/30 transition-colors duration-200">
                            <td class="px-6 py-4 font-semibold text-zinc-900 dark:text-white">
                                {{ $service->title }}
                            </td>
                            <td class="px-6 py-4 text-zinc-600 dark:text-zinc-400 max-w-md">
                                {{ Str::limit($service->desc, 120) }}
                            </td>
                            <td class="px-6 py-4 text-right space-x-1 whitespace-nowrap">
                                <flux:button size="sm" variant="outline" wire:click="edit({{ $service->id }})" x-on:click="$flux.modal('service-modal').show()" class="hover:bg-zinc-100 dark:hover:bg-zinc-700 transition-colors">
                                    Edit
                                </flux:button>
                                <flux:button size="sm" variant="danger" wire:click="delete({{ $service->id }})" wire:confirm="Apakah Anda yakin ingin menghapus layanan ini?" class="hover:bg-red-600 transition-colors">
                                    Delete
                                </flux:button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-6 py-12 text-center text-zinc-500 dark:text-zinc-400">
                                <div class="flex flex-col items-center justify-center space-y-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-zinc-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0a2 2 0 01-2 2H6a2 2 0 01-2-2m16 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2" />
                                    </svg>
                                    <span>Layanan tidak ditemukan atau belum ada data.</span>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Pagination -->
    <div class="mt-4">
        {{ $services->links() }}
    </div>

    <!-- Modal Form -->
    <flux:modal name="service-modal" class="md:w-96">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg" class="font-bold text-zinc-900 dark:text-white">{{ $service_id ? 'Edit Service' : 'Add Service' }}</flux:heading>
                <flux:subheading>Isi formulir untuk menyimpan detail layanan.</flux:subheading>
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

                <div class="flex justify-end gap-2 mt-6">
                    <flux:button variant="ghost" x-on:click="$flux.modal('service-modal').close()">Batal</flux:button>
                    <flux:button type="submit" variant="primary" wire:loading.attr="disabled" wire:target="store" class="bg-blue-600 hover:bg-blue-700 text-white">
                        <span wire:loading.remove wire:target="store">Simpan</span>
                        <span wire:loading wire:target="store" class="flex items-center gap-2">
                            <svg class="animate-spin h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Menyimpan...
                        </span>
                    </flux:button>
                </div>
            </form>
        </div>
    </flux:modal>
    
    <div x-data="{}" x-on:close-modal.window="$flux.modal('service-modal').close()"></div>
</div>

