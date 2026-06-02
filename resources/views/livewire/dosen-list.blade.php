<div class="space-y-6 p-6 lg:p-8">
    <!-- Header Block -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 bg-white dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 rounded-2xl p-6 shadow-sm">
        <div>
            <div class="flex items-center gap-2">
                <flux:heading size="xl" class="font-extrabold text-zinc-900 dark:text-white">Dosen</flux:heading>
                <flux:badge size="sm" color="amber" class="font-semibold">{{ $this->dosens->total() }}</flux:badge>
            </div>
            <flux:subheading class="text-zinc-500 mt-1">Daftar dosen dan staf pengajar aktif program studi Informatika.</flux:subheading>
        </div>
        <div class="flex items-center gap-3 w-full md:w-auto">
            <flux:input wire:model.live.debounce.500ms="search" icon="magnifying-glass" placeholder="Cari nama, NIDN, atau jabatan..." class="w-full md:w-64" />
            <flux:button variant="primary" wire:click="create" x-on:click="$flux.modal('dosen-modal').show()" class="shrink-0 bg-amber-600 hover:bg-amber-700 text-white shadow-sm transition-all duration-200">
                Tambah Dosen
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
                        <th class="px-6 py-4 font-bold text-zinc-700 dark:text-zinc-300 uppercase tracking-wider text-xs">Nama</th>
                        <th class="px-6 py-4 font-bold text-zinc-700 dark:text-zinc-300 uppercase tracking-wider text-xs">NIDN</th>
                        <th class="px-6 py-4 font-bold text-zinc-700 dark:text-zinc-300 uppercase tracking-wider text-xs">Program Studi</th>
                        <th class="px-6 py-4 font-bold text-zinc-700 dark:text-zinc-300 uppercase tracking-wider text-xs">Jabatan</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700">
                    @forelse ($this->dosens as $dosen)
                        <tr class="hover:bg-zinc-50 dark:hover:bg-zinc-750/30 transition-colors duration-200">
                            <td class="px-6 py-4 font-medium text-zinc-900 dark:text-white flex items-center gap-3">
                                @if($dosen->photo_url)
                                    <img class="h-10 w-10 rounded-full object-cover border border-zinc-200 dark:border-zinc-700" src="{{ asset('storage/' . $dosen->photo_url) }}" alt="{{ $dosen->name }}">
                                @else
                                    <div class="h-10 w-10 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 flex items-center justify-center font-bold text-sm border border-blue-200 dark:border-blue-800">
                                        {{ substr($dosen->name, 0, 2) }}
                                    </div>
                                @endif
                                <div>
                                    <p class="font-semibold text-zinc-950 dark:text-white">{{ $dosen->name }}</p>
                                    <p class="text-xs text-zinc-400">{{ $dosen->email ?? '-' }}</p>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-zinc-600 dark:text-zinc-400">
                                {{ $dosen->nidn ?? '-' }}
                            </td>
                            <td class="px-6 py-4">
                                @if($dosen->prodi)
                                    <flux:badge size="sm" color="blue" class="font-semibold">{{ $dosen->prodi->name }}</flux:badge>
                                @else
                                    <span class="text-zinc-400 italic">-</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 dark:bg-blue-950 text-blue-800 dark:text-blue-200">
                                    {{ $dosen->title ?? 'Dosen' }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-12 text-center text-zinc-500 dark:text-zinc-400">
                                <div class="flex flex-col items-center justify-center space-y-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-zinc-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    </svg>
                                    <span>Data dosen tidak ditemukan atau belum ada data.</span>
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
        {{ $this->dosens->links() }}
    </div>

    <!-- Modal Form -->
    <flux:modal name="dosen-modal" class="md:w-96">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg" class="font-bold text-zinc-900 dark:text-white">Tambah Dosen</flux:heading>
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

                <flux:field>
                    <flux:label>Program Studi</flux:label>
                    <flux:select wire:model="form.prodi_id" placeholder="Pilih program studi...">
                        @foreach ($this->prodis as $prodi)
                            <flux:select.option value="{{ $prodi->id }}">{{ $prodi->name }}</flux:select.option>
                        @endforeach
                    </flux:select>
                    <flux:error name="form.prodi_id" />
                </flux:field>

                <div class="flex justify-end gap-2 mt-6">
                    <flux:button variant="ghost" x-on:click="$flux.modal('dosen-modal').close()">Batal</flux:button>
                    <flux:button type="submit" variant="primary" wire:loading.attr="disabled" class="bg-amber-600 hover:bg-amber-700 text-white">Simpan</flux:button>
                </div>
            </form>
        </div>
    </flux:modal>

    <div x-data="{}" x-on:close-modal.window="$flux.modal('dosen-modal').close()"></div>
</div>

