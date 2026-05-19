<div>
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
        <div>
            <flux:heading size="xl">Dosen</flux:heading>
            <flux:subheading>Daftar dosen program studi informatika.</flux:subheading>
        </div>
        <div class="flex items-center gap-4 w-full md:w-auto">
            <flux:input wire:model.live.debounce.500ms="search" icon="magnifying-glass" placeholder="Cari nama, NIDN, atau jabatan..." class="w-full md:w-64" />
        </div>
    </div>

    <div class="bg-white dark:bg-zinc-800 shadow rounded-lg overflow-hidden border border-zinc-200 dark:border-zinc-700">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
                    <th class="px-4 py-3 text-sm font-semibold text-zinc-800 dark:text-zinc-200">Nama</th>
                    <th class="px-4 py-3 text-sm font-semibold text-zinc-800 dark:text-zinc-200">NIDN</th>
                    <th class="px-4 py-3 text-sm font-semibold text-zinc-800 dark:text-zinc-200">Jabatan</th>
                    <th class="px-4 py-3 text-sm font-semibold text-zinc-800 dark:text-zinc-200">Email</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dosens as $dosen)
                    <tr class="border-b border-zinc-200 dark:border-zinc-700 last:border-b-0">
                        <td class="px-4 py-3 text-sm font-semibold text-zinc-800 dark:text-zinc-200">{{ $dosen->name }}</td>
                        <td class="px-4 py-3 text-sm text-zinc-600 dark:text-zinc-400">{{ $dosen->nidn ?? '-' }}</td>
                        <td class="px-4 py-3 text-sm text-zinc-600 dark:text-zinc-400">{{ $dosen->title ?? '-' }}</td>
                        <td class="px-4 py-3 text-sm text-zinc-600 dark:text-zinc-400">{{ $dosen->email ?? '-' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-8 text-center text-zinc-500">Data dosen tidak ditemukan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $dosens->links() }}
    </div>
</div>
