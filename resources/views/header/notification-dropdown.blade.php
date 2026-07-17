<div x-data="{ open: false }" class="relative">
    <button @click="open = !open"
        class="relative flex items-center justify-center text-gray-500 transition-colors bg-white border border-gray-200 rounded-full hover:text-dark-900 h-11 w-11 hover:bg-gray-100 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-white">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M13.73 21a2 2 0 0 1-3.46 0" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span class="absolute -top-0.5 -right-0.5 flex h-4 w-4 items-center justify-center rounded-full bg-red-500 text-[10px] font-medium text-white">3</span>
    </button>

    <div x-show="open" @click.away="open = false" x-transition
        class="absolute right-0 mt-2 w-80 rounded-lg border border-gray-200 bg-white p-4 shadow-lg dark:border-gray-800 dark:bg-gray-900 z-50">
        <div class="flex items-center justify-between mb-3">
            <h4 class="text-sm font-semibold text-gray-800 dark:text-white">Notifications</h4>
            <button class="text-xs text-brand-500 hover:underline">Mark all read</button>
        </div>
        <div class="space-y-3">
            <div class="flex items-start gap-3 p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-white/[0.03]">
                <div class="flex h-9 w-9 items-center justify-center rounded-full bg-green-50 text-green-600">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <div>
                    <p class="text-sm text-gray-700 dark:text-gray-300">New order received</p>
                    <p class="text-xs text-gray-400">2 minutes ago</p>
                </div>
            </div>
            <div class="flex items-start gap-3 p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-white/[0.03]">
                <div class="flex h-9 w-9 items-center justify-center rounded-full bg-blue-50 text-blue-600">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M16 21V19C16 17.9391 15.5786 16.9217 14.8284 16.1716C14.0783 15.4214 13.0609 15 12 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><circle cx="8.5" cy="7" r="4" stroke="currentColor" stroke-width="1.5"/></svg>
                </div>
                <div>
                    <p class="text-sm text-gray-700 dark:text-gray-300">New user registered</p>
                    <p class="text-xs text-gray-400">1 hour ago</p>
                </div>
            </div>
        </div>
    </div>
</div>
