<div>
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
        <div>
            <flux:heading size="xl">Dosen</flux:heading>
            <flux:subheading>Daftar dosen program studi informatika.</flux:subheading>
        </div>
        <div class="flex items-center gap-4 w-full md:w-auto">
            <flux:input wire:model.live.debounce.500ms="search" icon="magnifying-glass" placeholder="Cari nama, NIDN, atau jabatan..." class="w-full md:w-64" />
            <flux:button variant="primary" wire:click="create" x-on:click="$flux.modal('dosen-modal').show()" class="shrink-0">
                Tambah Dosen
            </flux:button>
        </div>
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

    <flux:modal name="dosen-modal" class="md:w-96">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Tambah Dosen</flux:heading>
                <flux:subheading>Tambah data dosen baru ke program studi.</flux:subheading>
            </div>

            <form wire:submit="save" class="space-y-4">
                <flux:field>
                    <flux:label>Nama Lengkap</flux:label>
                    <flux:input wire:model="form.name" placeholder="Nama Lengkap beserta gelar" />
                    <flux:error name="form.name" />
                </flux:field>

                <flux:field>
                    <flux:label>NIDN</flux:label>
                    <flux:input wire:model="form.nidn" placeholder="Nomor Induk Dosen Nasional" />
                    <flux:error name="form.nidn" />
                </flux:field>

                <flux:field>
                    <flux:label>Email</flux:label>
                    <flux:input type="email" wire:model="form.email" placeholder="email@domain.com" />
                    <flux:error name="form.email" />
                </flux:field>

                <flux:field>
                    <flux:label>Jabatan Fungsional</flux:label>
                    <flux:select wire:model="form.title" placeholder="Pilih jabatan...">
                        <flux:select.option value="Asisten Ahli">Asisten Ahli</flux:select.option>
                        <flux:select.option value="Lektor">Lektor</flux:select.option>
                        <flux:select.option value="Lektor Kepala">Lektor Kepala</flux:select.option>
                        <flux:select.option value="Guru Besar">Guru Besar</flux:select.option>
                    </flux:select>
                    <flux:error name="form.title" />
                </flux:field>

                <div class="flex justify-end gap-2 mt-4">
                    <flux:button variant="ghost" x-on:click="$flux.modal('dosen-modal').close()">Batal</flux:button>
                    <flux:button type="submit" variant="primary" wire:loading.attr="disabled">Simpan</flux:button>
                </div>
            </form>
        </div>
    </flux:modal>

    <div x-data="{}" x-on:close-modal.window="$flux.modal('dosen-modal').close()"></div>
</div>
