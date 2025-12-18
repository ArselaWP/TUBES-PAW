@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-5xl space-y-6">

        {{-- Header / Breadcrumb --}}
        <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <nav class="text-xs text-zinc-500">
                    <a href="/seller/dashboard" class="hover:text-zinc-800">Seller</a>
                    <span class="mx-2">/</span>
                    <a href="/seller/products" class="hover:text-zinc-800">Produk</a>
                    <span class="mx-2">/</span>
                    <span class="text-zinc-800 font-medium">Edit</span>
                </nav>

                <div class="mt-2 flex items-center gap-3">
                    <h1 class="text-2xl font-semibold">Edit Produk</h1>
                    <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">
                        Aktif
                    </span>
                </div>
                <p class="mt-1 text-sm text-zinc-500">Perbarui detail produk thrift agar tampil lebih menarik.</p>
            </div>

            <div class="flex gap-2">
                <a href="/seller/products"
                    class="rounded-2xl border border-zinc-200 bg-white px-4 py-2.5 text-sm font-semibold hover:bg-zinc
