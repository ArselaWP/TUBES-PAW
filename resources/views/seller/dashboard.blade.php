@extends('layouts.app')

@section('content')
<div class="grid gap-6 lg:grid-cols-3">
    <div class="rounded-3xl border border-zinc-200 bg-white p-6">
        <p class="text-xs text-zinc-500">Total Produk</p>
        <p class="mt-2 text-2xl font-semibold">24</p>
    </div>
    <div class="rounded-3xl border border-zinc-200 bg-white p-6">
        <p class="text-xs text-zinc-500">Pesanan Masuk</p>
        <p class="mt-2 text-2xl font-semibold">8</p>
    </div>
    <div class="rounded-3xl border border-zinc-200 bg-white p-6">
        <p class="text-xs text-zinc-500">Rating Toko</p>
        <p class="mt-2 text-2xl font-semibold">4.8</p>
    </div>

    <div class="lg:col-span-2 rounded-3xl border border-zinc-200 bg-white p-6">
        <div class="flex items-center justify-between">
            <h2 class="text-sm font-semibold">Produk Terbaru</h2>
            <a href="/seller/products/create" class="rounded-2xl bg-zinc-900 px-3 py-2 text-sm font-semibold text-white hover:bg-zinc-800">
                + Tambah Produk
            </a>
        </div>

        <div class="mt-4 overflow-hidden rounded-2xl border border-zinc-200">
            <table class="w-full text-left text-sm">
                <thead class="bg-zinc-50 text-xs text-zinc-500">
                    <tr>
                        <th class="px-4 py-3">Produk</th>
                        <th class="px-4 py-3">Harga</th>
                        <th class="px-4 py-3">Stock</th>
                        <th class="px-4 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    @for($i=1;$i<=5;$i++)
                    <tr class="bg-white">
                        <td class="px-4 py-3 font-medium">Jacket Vintage {{ $i }}</td>
                        <td class="px-4 py-3">Rp 150k</td>
                        <td class="px-4 py-3">5</td>
                        <td class="px-4 py-3">
                            <div class="flex gap-2">
                                <a href="#" class="rounded-xl border px-3 py-1.5 text-xs hover:bg-zinc-50">Edit</a>
                                <button class="rounded-xl border px-3 py-1.5 text-xs hover:bg-zinc-50">Hapus</button>
                            </div>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>

    <div class="rounded-3xl border border-zinc-200 bg-white p-6">
        <h2 class="text-sm font-semibold">Pesanan Terbaru</h2>
        <div class="mt-4 space-y-3">
            @for($i=1;$i<=4;$i++)
            <div class="rounded-2xl border border-zinc-200 p-4">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-semibold">#ORD00{{ $i }}</p>
                    <span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-semibold text-yellow-800">Pending</span>
                </div>
                <p class="mt-2 text-xs text-zinc-500">Buyer: user{{ $i }} • Total: Rp 240k</p>
                <button class="mt-3 w-full rounded-2xl bg-zinc-900 px-3 py-2 text-xs font-semibold text-white hover:bg-zinc-800">
                    Update Status
                </button>
            </div>
            @endfor
        </div>
    </div>
</div>
@endsection
