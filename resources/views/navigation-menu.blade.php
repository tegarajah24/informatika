<flux:sidebar sticky stashable class="bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">
    <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

    <flux:brand href="{{ route('dashboard') }}" class="px-2 mb-4 mt-2" wire:navigate.hover>
        <div class="w-8 h-8 bg-blue-900 rounded flex items-center justify-center mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
            </svg>
        </div>
        <span class="font-bold text-xl text-zinc-900 dark:text-white">Informatika</span>
    </flux:brand>

    <flux:navlist variant="outline">
        <flux:navlist.item icon="home" href="{{ route('dashboard') }}" :current="request()->routeIs('dashboard')" wire:navigate.hover>Dashboard</flux:navlist.item>
        <flux:navlist.item icon="rectangle-stack" href="{{ route('services') }}" :current="request()->routeIs('services')" wire:navigate.hover>Services</flux:navlist.item>
        <flux:navlist.item icon="photo" href="{{ route('portfolios') }}" :current="request()->routeIs('portfolios')" wire:navigate.hover>Portfolio</flux:navlist.item>
        <flux:navlist.item icon="chat-bubble-left-right" href="{{ route('testimonials') }}" :current="request()->routeIs('testimonials')" wire:navigate.hover>Testimonials</flux:navlist.item>
        <flux:navlist.item icon="user" href="{{ route('profile.show') }}" :current="request()->routeIs('profile.show')" wire:navigate.hover>Profile</flux:navlist.item>
        <flux:navlist.item icon="cog-6-tooth" href="#" wire:navigate.hover>Settings</flux:navlist.item>
    </flux:navlist>

    <flux:spacer />

    <flux:navlist variant="outline">
        <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf
            <flux:navlist.item icon="arrow-right-start-on-rectangle" href="{{ route('logout') }}" @click.prevent="$root.submit();">
                Logout
            </flux:navlist.item>
        </form>
    </flux:navlist>
</flux:sidebar>

<flux:header class="lg:hidden bg-white dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-3" inset="left" />
    <flux:brand href="{{ route('dashboard') }}" class="ml-2" wire:navigate.hover>
        <span class="font-bold text-lg text-zinc-900 dark:text-white">Informatika</span>
    </flux:brand>
</flux:header>
