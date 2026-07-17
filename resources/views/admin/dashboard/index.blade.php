@extends('admin.layouts.app')

@section('content')
    <div class="grid grid-cols-12 gap-4 md:gap-6">
        <div class="col-span-12 space-y-6 xl:col-span-3">
            <div class="rounded-lg border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Categories</p>
                        <h4 class="mt-1 text-2xl font-bold text-gray-800 dark:text-white">{{ $totalCategories ?? 0 }}</h4>
                    </div>
                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-500/10">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M9.10927 2.55078H5.09927C3.89927 2.55078 2.91927 3.53078 2.91927 4.73078V8.74078C2.91927 9.94078 3.89927 10.9208 5.09927 10.9208H9.10927C10.3093 10.9208 11.2893 9.94078 11.2893 8.74078V4.73078C11.2893 3.53078 10.3093 2.55078 9.10927 2.55078Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.10927 13.0808H5.09927C3.89927 13.0808 2.91927 14.0608 2.91927 15.2608V19.2708C2.91927 20.4708 3.89927 21.4508 5.09927 21.4508H9.10927C10.3093 21.4508 11.2893 20.4708 11.2893 19.2708V15.2608C11.2893 14.0608 10.3093 13.0808 9.10927 13.0808Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-12 space-y-6 xl:col-span-3">
            <div class="rounded-lg border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Brands</p>
                        <h4 class="mt-1 text-2xl font-bold text-gray-800 dark:text-white">{{ $totalBrands ?? 0 }}</h4>
                    </div>
                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-purple-50 text-purple-600 dark:bg-purple-500/10">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-12 space-y-6 xl:col-span-3">
            <div class="rounded-lg border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Products</p>
                        <h4 class="mt-1 text-2xl font-bold text-gray-800 dark:text-white">{{ $totalProducts ?? 0 }}</h4>
                    </div>
                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-green-50 text-green-600 dark:bg-green-500/10">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M21 8V21H3V8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M1 3H23V8H1V3Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-12 space-y-6 xl:col-span-3">
            <div class="rounded-lg border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Orders</p>
                        <h4 class="mt-1 text-2xl font-bold text-gray-800 dark:text-white">{{ $totalOrders ?? 0 }}</h4>
                    </div>
                    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-orange-50 text-orange-600 dark:bg-orange-500/10">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M8 2V5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 2V5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M3 10H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M21 12V8C21 6.89543 20.1046 6 19 6H5C3.89543 6 3 6.89543 3 8V12C3 13.1046 3.89543 14 5 14H19C20.1046 14 21 13.1046 21 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
