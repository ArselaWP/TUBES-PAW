@extends('layouts.app')

@section('content')
<div class="grid gap-6 md:grid-cols-[280px_1fr]">
    {{-- Sidebar filter --}}
    <aside class="rounded-3xl border border-zinc-200 bg-white p-5">
        <h2 class="text-sm font-semibold">Filter</h2>

        <div class="mt-4">
            <p class="text-xs font-medium text-zinc-600">Harga</p>
            <div class="mt-2 grid grid-cols-2 gap-2">
                <input class="rounded-2xl border border-zinc-200 px-3 py-2 text-sm" placeholder="Min" />
                <input class="rounded-2xl border border-zinc-200 px-3 py-2 text-sm" placeholder="Max" />
            </div>
        </div>

        <div class="mt-4">
            <p class="text-xs font-medium text-zinc-600">Kondisi</p>
            <div class="mt-2 space-y-2 text-sm">
                @foreach(['Like New','Good','Fair'] as $c)
                <label class="flex items-center gap-2">
                    <input type="checkbox" class="rounded border-zinc-300" />
                    <span>{{ $c }}</span>
                </label>
                @endforeach
            </div>
        </div>

        <button class="mt-6 w-full rounded-2xl bg-zinc-900 px-4 py-2.5 text-sm font-medium text-white hover:bg-zinc-800">
            Terapkan
        </button>
    </aside>

    {{-- Produk grid --}}
    <section class="space-y-4">
        <div class="flex items-end justify-between">
            <div>
                <h1 class="text-2xl font-semibold">Discover Thrift Items</h1>
                <p class="text-sm text-zinc-500">Temukan barang thrift favoritmu hari ini.</p>
            </div>
            <div class="flex items-center gap-2">
                <select class="rounded-2xl border border-zinc-200 bg-white px-3 py-2 text-sm">
                    <option>Terbaru</option>
                    <option>Termurah</option>
                    <option>Termahal</option>
                </select>
            </div>
        </div>

        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @for($i=1;$i<=9;$i++)
            <a href="/products/{{ $i }}" class="group rounded-3xl border border-zinc-200 bg-white p-4 hover:shadow-sm">
                <div class="aspect-[4/3] w-full overflow-hidden rounded-2xl bg-zinc-100">
                    <div class="h-full w-full bg-gradient-to-br from-zinc-200 to-zinc-100"></div>
                </div>
                <div class="mt-4 flex items-start justify-between gap-3">
                    <div>
                        <p class="text-sm font-semibold group-hover:underline">Hoodie Vintage {{ $i }}</p>
                        <p class="mt-1 text-xs text-zinc-500">Like New • Size M</p>
                    </div>
                    <span class="rounded-full bg-zinc-900 px-3 py-1.5 text-xs font-semibold text-white">
                        Rp 120k
                    </span>
                </div>
                <div class="mt-3 flex items-center justify-between text-xs text-zinc-500">
                    <span>⭐ 4.7</span>
                    <span>Seller: @thriftstore</span>
                </div>
            </a>
            @endfor
        </div>
    </section>
</div>
@endsection
