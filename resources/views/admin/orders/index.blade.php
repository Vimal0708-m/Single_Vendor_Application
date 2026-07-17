@extends('admin.layouts.app')

@section('content')
    <div class="mb-6">
        <h2 class="text-xl font-bold text-gray-800 dark:text-white">Orders</h2>
    </div>

    <div class="rounded-lg border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-gray-200 dark:border-gray-800">
                        <th class="px-5 py-3 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">#</th>
                        <th class="px-5 py-3 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">Customer</th>
                        <th class="px-5 py-3 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">Total</th>
                        <th class="px-5 py-3 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">Status</th>
                        <th class="px-5 py-3 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">Payment</th>
                        <th class="px-5 py-3 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">Date</th>
                        <th class="px-5 py-3 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-800">
                    @forelse ($orders as $order)
                        <tr class="hover:bg-gray-50 dark:hover:bg-white/[0.02]">
                            <td class="px-5 py-4 text-sm text-gray-600 dark:text-gray-400">#{{ $order->id }}</td>
                            <td class="px-5 py-4 text-sm font-medium text-gray-800 dark:text-white">{{ $order->user->name ?? 'Guest' }}</td>
                            <td class="px-5 py-4 text-sm text-gray-600 dark:text-gray-400">${{ number_format($order->total_amount, 2) }}</td>
                            <td class="px-5 py-4">
                                <span class="inline-flex rounded-full px-2.5 py-0.5 text-xs font-medium
                                    {{ $order->status === 'completed' ? 'bg-green-50 text-green-700 dark:bg-green-500/10 dark:text-green-400' : ($order->status === 'pending' ? 'bg-yellow-50 text-yellow-700 dark:bg-yellow-500/10 dark:text-yellow-400' : 'bg-red-50 text-red-700 dark:bg-red-500/10 dark:text-red-400') }}">
                                    {{ ucfirst($order->status) }}
                                </span>
                            </td>
                            <td class="px-5 py-4">
                                <span class="inline-flex rounded-full px-2.5 py-0.5 text-xs font-medium
                                    {{ $order->payment_status === 'paid' ? 'bg-green-50 text-green-700 dark:bg-green-500/10 dark:text-green-400' : 'bg-yellow-50 text-yellow-700 dark:bg-yellow-500/10 dark:text-yellow-400' }}">
                                    {{ ucfirst($order->payment_status) }}
                                </span>
                            </td>
                            <td class="px-5 py-4 text-sm text-gray-600 dark:text-gray-400">{{ $order->created_at->format('M d, Y') }}</td>
                            <td class="px-5 py-4">
                                <a href="{{ route('admin.orders.show', $order) }}" class="text-brand-500 hover:text-brand-600">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M1 12S5 4 12 4s11 8 11 8-4 8-11 8S1 12 1 12z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5"/></svg>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-5 py-8 text-center text-sm text-gray-500 dark:text-gray-400">No orders found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-5 py-3 border-t border-gray-200 dark:border-gray-800">
            {{ $orders->links() }}
        </div>
    </div>
@endsection
