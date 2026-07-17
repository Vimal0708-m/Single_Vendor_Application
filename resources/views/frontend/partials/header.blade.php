<header x-data="{ isScrolled: false, isMobileOpen: false, isSearchOpen: false }"
    x-init="window.addEventListener('scroll', () => { isScrolled = window.scrollY > 10 })"
    x-on:click.outside="isMobileOpen = false"
    :class="isScrolled ? 'bg-white/95 backdrop-blur-xl border-b border-gray-200 shadow-lg' : 'bg-white/80 backdrop-blur-md border-b border-gray-200 shadow-sm'"
    class="sticky top-0 z-50 transition-all duration-300">
    <div class="container mx-auto px-4 sm:px-6 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-8 lg:space-x-12">
                <a class="text-2xl tracking-tight text-gray-900 hover:text-gray-700 transition-colors" href="{{ route('frontend.home') }}" aria-label="BloomShop Home">
                    BLOOM<span style="color: var(--bloom-primary);">SHOP</span>
                </a>

                <nav class="hidden md:flex items-center space-x-1" role="navigation" aria-label="Main navigation">
                    <a href="{{ route('frontend.shop') }}" class="relative py-2 px-4 rounded-lg text-sm font-medium transition-all duration-200 {{ request()->routeIs('frontend.shop') ? 'shadow-md' : 'text-gray-700 hover:bg-gray-100 hover:text-gray-900' }}" style="{{ request()->routeIs('frontend.shop') ? 'background-color: #fef3cd; color: var(--bloom-foreground);' : '' }}" {{ request()->routeIs('frontend.shop') ? 'aria-current="page"' : '' }}>
                        Shop
                    </a>
                    <a href="{{ route('frontend.contact') }}" class="relative py-2 px-4 rounded-lg text-sm font-medium transition-all duration-200 {{ request()->routeIs('frontend.contact') ? 'shadow-md' : 'text-gray-700 hover:bg-gray-100 hover:text-gray-900' }}" style="{{ request()->routeIs('frontend.contact') ? 'background-color: #fef3cd; color: var(--bloom-foreground);' : '' }}" {{ request()->routeIs('frontend.contact') ? 'aria-current="page"' : '' }}>
                        Contact
                    </a>
                    <a href="{{ route('frontend.about') }}" class="relative py-2 px-4 rounded-lg text-sm font-medium transition-all duration-200 {{ request()->routeIs('frontend.about') ? 'shadow-md' : 'text-gray-700 hover:bg-gray-100 hover:text-gray-900' }}" style="{{ request()->routeIs('frontend.about') ? 'background-color: #fef3cd; color: var(--bloom-foreground);' : '' }}" {{ request()->routeIs('frontend.about') ? 'aria-current="page"' : '' }}>
                        About
                    </a>
                </nav>
            </div>

            <div class="hidden lg:flex flex-1 max-w-md mx-8">
                <form class="relative w-full" action="{{ route('frontend.shop') }}" method="GET">
                    <input type="search" name="search" placeholder="Search products..." value="{{ request('search') }}" class="w-full pl-10 pr-4 py-2 text-sm border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition-all" aria-label="Search products" />
                    <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><circle cx="11" cy="11" r="8"/><path stroke-linecap="round" stroke-linejoin="round" d="m21 21-4.35-4.35"/></svg>
                </form>
            </div>

            <div class="flex items-center space-x-2 sm:space-x-4">
                <button x-on:click="isSearchOpen = !isSearchOpen" class="lg:hidden p-2 rounded-full hover:bg-gray-100 transition-colors" aria-label="Search">
                    <svg class="h-5 w-5 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><circle cx="11" cy="11" r="8"/><path stroke-linecap="round" stroke-linejoin="round" d="m21 21-4.35-4.35"/></svg>
                </button>

                <button x-on:click="isMobileOpen = !isMobileOpen" class="md:hidden p-2 rounded-full hover:bg-gray-100 transition-colors" aria-label="Toggle navigation menu" :aria-expanded="isMobileOpen">
                    <template x-if="!isMobileOpen">
                        <svg class="h-6 w-6 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/></svg>
                    </template>
                    <template x-if="isMobileOpen">
                        <svg class="h-6 w-6 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/></svg>
                    </template>
                </button>

                <a href="{{ route('frontend.cart') }}" class="relative p-2 rounded-full hover:bg-gray-100 transition-all duration-200 group" aria-label="Shopping cart">
                    <svg class="h-6 w-6 text-gray-700 group-hover:text-gray-900 transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/></svg>
                    <span x-show="$store.cart.count() > 0" x-text="$store.cart.count() > 99 ? '99+' : $store.cart.count()" x-transition class="absolute -top-1 -right-1 text-white text-xs font-bold rounded-full min-w-[20px] h-5 flex items-center justify-center px-1" style="background-color: var(--bloom-primary);"></span>
                </a>

                <div class="hidden sm:flex items-center space-x-2">
                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-sm text-sm font-medium transition-colors h-8 px-3 text-xs text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                        Sign In
                    </a>
                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-sm text-sm font-medium transition-colors h-8 px-3 text-xs text-white shadow hover:opacity-90" style="background-color: var(--bloom-primary);">
                        Sign Up
                    </a>
                </div>
            </div>
        </div>

        <div x-show="isSearchOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" class="lg:hidden mt-4" style="display: none;">
            <form class="relative" action="{{ route('frontend.shop') }}" method="GET">
                <input type="search" name="search" placeholder="Search products..." value="{{ request('search') }}" class="w-full pl-10 pr-4 py-3 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent" aria-label="Search products" autofocus />
                <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><circle cx="11" cy="11" r="8"/><path stroke-linecap="round" stroke-linejoin="round" d="m21 21-4.35-4.35"/></svg>
            </form>
        </div>

        <div x-show="isMobileOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" class="md:hidden mt-4" style="display: none;">
            <div class="flex flex-col space-y-3 pb-4 border-b border-gray-200">
                <a href="{{ route('frontend.shop') }}" class="text-sm font-medium py-2 px-3 rounded-lg transition-all {{ request()->routeIs('frontend.shop') ? '' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-50' }}" style="{{ request()->routeIs('frontend.shop') ? 'background-color: #fef3cd;' : '' }}" {{ request()->routeIs('frontend.shop') ? 'aria-current="page"' : '' }}>
                    Shop
                </a>
                <a href="{{ route('frontend.contact') }}" class="text-sm font-medium py-2 px-3 rounded-lg transition-all {{ request()->routeIs('frontend.contact') ? '' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-50' }}" style="{{ request()->routeIs('frontend.contact') ? 'background-color: #fef3cd;' : '' }}" {{ request()->routeIs('frontend.contact') ? 'aria-current="page"' : '' }}>
                    Contact
                </a>
                <a href="{{ route('frontend.about') }}" class="text-sm font-medium py-2 px-3 rounded-lg transition-all {{ request()->routeIs('frontend.about') ? '' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-50' }}" style="{{ request()->routeIs('frontend.about') ? 'background-color: #fef3cd;' : '' }}" {{ request()->routeIs('frontend.about') ? 'aria-current="page"' : '' }}>
                    About
                </a>
            </div>

            <div class="flex flex-col space-y-3 pt-4 sm:hidden">
                <a href="{{ route('login') }}" class="w-full text-sm text-center inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-sm text-sm font-medium transition-colors border border-gray-300 bg-white shadow-sm hover:bg-gray-50 h-8 px-3">
                    Sign In
                </a>
                <a href="{{ route('register') }}" class="w-full text-sm text-center inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-sm text-sm font-medium transition-colors text-white shadow hover:opacity-90 h-8 px-3" style="background-color: var(--bloom-primary);">
                    Sign Up
                </a>
            </div>
        </div>
    </div>
</header>
