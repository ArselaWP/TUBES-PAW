    @extends('layouts.app')

@section('content')
<div class="grid gap-6 lg:grid-cols-2">
    <div class="rounded-3xl border border-zinc-200 bg-white p-5">
        <div class="aspect-square overflow-hidden rounded-2xl bg-zinc-100">
            <div class="h-full w-full bg-gradient-to-br from-zinc-200 to-zinc-100"></div>
        </div>
        <div class="mt-4 grid grid-cols-4 gap-3">
            @for($i=1;$i<=4;$i++)
            <div class="aspect-square rounded-2xl bg-zinc-100"></div>
            @endfor
        </div>
    </div>

    <div class="space-y-6">
        <div class="rounded-3xl border border-zinc-200 bg-white p-6">
            <h1 class="text-2xl font-semibold">Hoodie Vintage</h1>
            <p class="mt-1 text-sm text-zinc-500">Like New • Size M • Unisex</p>

            <div class="mt-5 flex items-center justify-between">
                <p class="text-2xl font-semibold">Rp 120.000</p>
                <p class="text-sm text-zinc-500">⭐ 4.7 (120)</p>
            </div>

            <p class="mt-5 text-sm text-zinc-600 leading-relaxed">
                Hoodie vintage bahan tebal, nyaman dipakai, warna masih bagus. Cocok untuk streetwear.
            </p>

            <div class="mt-6 flex gap-2">
                <button class="flex-1 rounded-2xl bg-zinc-900 px-4 py-3 text-sm font-semibold text-white hover:bg-zinc-800">
                    + Add to Cart
                </button>
                <button class="rounded-2xl border border-zinc-200 bg-white px-4 py-3 text-sm font-semibold hover:bg-zinc-50">
                    💬 Chat Seller
                </button>
            </div>

            <div class="mt-6 grid grid-cols-3 gap-3 text-sm">
                <div class="rounded-2xl border border-zinc-200 p-3">
                    <p class="text-xs text-zinc-500">Stock</p>
                    <p class="font-semibold">3</p>
                </div>
                <div class="rounded-2xl border border-zinc-200 p-3">
                    <p class="text-xs text-zinc-500">Kondisi</p>
                    <p class="font-semibold">Like New</p>
                </div>
                <div class="rounded-2xl border border-zinc-200 p-3">
                    <p class="text-xs text-zinc-500">Kategori</p>
                    <p class="font-semibold">Hoodie</p>
                </div>
            </div>
        </div>

        <div class="rounded-3xl border border-zinc-200 bg-white p-6">
            <div class="flex items-center justify-between">
                <h2 class="text-sm font-semibold">Reviews</h2>
                <button class="rounded-2xl border border-zinc-200 bg-white px-3 py-2 text-sm hover:bg-zinc-50">
                    + Tulis Review
                </button>
            </div>

            <div class="mt-4 space-y-4">
                @for($i=1;$i<=3;$i++)
                <div class="rounded-2xl border border-zinc-200 p-4">
                    <div class="flex items-center justify-between">
                        <p class="text-sm font-semibold">Buyer {{ $i }}</p>
                        <p class="text-xs text-zinc-500">⭐ 5</p>
                    </div>
                    <p class="mt-2 text-sm text-zinc-600">Barang sesuai, pengiriman cepat. Recommended!</p>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>
@endsection
