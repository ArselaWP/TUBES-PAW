@extends('layouts.app')

@section('content')
<div class="flex flex-col gap-6">
    <div class="flex flex-col gap-2 md:flex-row md:items-end md:justify-between">
        <div>
            <h1 class="text-2xl font-semibold">Produk Saya</h1>
            <p class="text-sm text-zinc-500">Kelola barang thrift yang kamu jual.</p>
        </div>

        <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
            <div class="relative">
                <input
                    type="text"
                    placeholder="Cari produk..."
                    class="w-full rounded-2xl border border-zinc-200 bg-white px-4 py-2.5 pr-10 text-sm outline-none focus:border-zinc-300 focus:ring-4 focus:ring-zinc-100"
                />
                <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 text-zinc-400">⌕</span>
            </div>
            <a href="/seller/products/create"
               class="rounded-2xl bg-zinc-900 px-4 py-2.5 text-sm font-semibold text-white hover:bg-zinc-800">
                + Tambah Produk
            </a>
        </div>
    </div>

    {{-- Cards summary --}}
    <div class="grid gap-4 md:grid-cols-3">
        <div class="rounded-3xl border border-zinc-200 bg-white p-5">
            <p class="text-xs text-zinc-500">Total Produk</p>
            <p class="mt-2 text-2xl font-semibold">12</p>
        </div>
        <div class="rounded-3xl border border-zinc-200 bg-white p-5">
            <p class="text-xs text-zinc-500">Stok Menipis</p>
            <p class="mt-2 text-2xl font-semibold">3</p>
        </div>
        <div class="rounded-3xl border border-zinc-200 bg-white p-5">
            <p class="text-xs text-zinc-500">Terjual (bulan ini)</p>
            <p class="mt-2 text-2xl font-semibold">8</p>
        </div>
    </div>

    {{-- Table --}}
    <div class="overflow-hidden rounded-3xl border border-zinc-200 bg-white">
        <div class="flex items-center justify-between border-b px-5 py-4">
            <p class="text-sm font-semibold">Daftar Produk</p>
            <div class="flex items-center gap-2">
                <select class="rounded-2xl border border-zinc-200 bg-white px-3 py-2 text-sm">
                    <option>Terbaru</option>
                    <option>Termurah</option>
                    <option>Termahal</option>
                </select>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-zinc-50 text-xs text-zinc-500">
                    <tr>
                        <th class="px-5 py-3">Produk</th>
                        <th class="px-5 py-3">Harga</th>
                        <th class="px-5 py-3">Kondisi</th>
                        <th class="px-5 py-3">Stok</th>
                        <th class="px-5 py-3">Status</th>
                        <th class="px-5 py-3 text-right">Aksi</th>
                    </tr>
                </thead>

                <tbody class="divide-y">
                    {{-- Dummy rows (tampilan saja). Nanti ganti jadi foreach($products as $p) --}}
                    @for($i=1;$i<=7;$i++)
                    <tr class="bg-white">
                        <td class="px-5 py-4">
                            <div class="flex items-center gap-3">
                                <div class="h-12 w-12 overflow-hidden rounded-2xl bg-zinc-100">
                                    <div class="h-full w-full bg-gradient-to-br from-zinc-200 to-zinc-100"></div>
                                </div>
                                <div>
                                    <p class="font-semibold">Jacket Vintage {{ $i }}</p>
                                    <p class="mt-0.5 text-xs text-zinc-500">SKU: THR-00{{ $i }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-4 font-medium">Rp 150.000</td>
                        <td class="px-5 py-4">
                            <span class="rounded-full bg-zinc-100 px-3 py-1 text-xs font-semibold text-zinc-700">
                                Like New
                            </span>
                        </td>
                        <td class="px-5 py-4">5</td>
                        <td class="px-5 py-4">
                            @if($i % 3 == 0)
                                <span class="rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-700">Stok Menipis</span>
                            @else
                                <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">Aktif</span>
                            @endif
                        </td>
                        <td class="px-5 py-4">
                            <div class="flex justify-end gap-2">
                                <a href="/seller/products/{{ $i }}/edit"
                                   class="rounded-xl border border-zinc-200 bg-white px-3 py-2 text-xs font-semibold hover:bg-zinc-50">
                                    Edit
                                </a>
                                <button
                                    class="rounded-xl border border-zinc-200 bg-white px-3 py-2 text-xs font-semibold hover:bg-zinc-50">
                                    Hapus
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>

        {{-- Footer pagination dummy --}}
        <div class="flex items-center justify-between border-t px-5 py-4 text-sm">
            <p class="text-zinc-500">Menampilkan 1–7 dari 12</p>
            <div class="flex gap-2">
                <button class="rounded-2xl border border-zinc-200 bg-white px-3 py-2 hover:bg-zinc-50">Prev</button>
                <button class="rounded-2xl bg-zinc-900 px-3 py-2 text-white hover:bg-zinc-800">Next</button>
            </div>
        </div>
    </div>
</div>
@endsection
