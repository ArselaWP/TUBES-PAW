@extends('layouts.app')

@section('content')
<div class="mx-auto max-w-4xl space-y-6">
    <div class="flex items-end justify-between">
        <div>
            <h1 class="text-2xl font-semibold">Edit Produk</h1>
            <p class="text-sm text-zinc-500">Perbarui informasi barang thrift.</p>
        </div>
        <a href="/seller/products"
           class="rounded-2xl border border-zinc-200 bg-white px-4 py-2.5 text-sm font-semibold hover:bg-zinc-50">
            ← Kembali
        </a>
    </div>

    <form action="#" method="POST" enctype="multipart/form-data" class="grid gap-6 lg:grid-cols-3">
        @csrf
        @method('PUT')

        {{-- Left: Image --}}
        <div class="lg:col-span-1 space-y-4">
            <div class="rounded-3xl border border-zinc-200 bg-white p-5">
                <p class="text-sm font-semibold">Foto Produk</p>
                <p class="mt-1 text-xs text-zinc-500">Ganti jika perlu.</p>

                <div class="mt-4">
                    <div class="aspect-square overflow-hidden rounded-2xl bg-zinc-100">
                        <div class="h-full w-full bg-gradient-to-br from-zinc-200 to-zinc-100"></div>
                    </div>

                    <label class="mt-4 block">
                        <input type="file" class="block w-full text-sm
                            file:mr-4 file:rounded-2xl file:border-0
                            file:bg-zinc-900 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white
                            hover:file:bg-zinc-800" />
                    </label>

                    <button type="button"
                        class="mt-3 w-full rounded-2xl border border-zinc-200 bg-white px-4 py-2.5 text-sm font-semibold hover:bg-zinc-50">
                        Hapus Foto
                    </button>
                </div>
            </div>

            <div class="rounded-3xl border border-red-200 bg-red-50 p-5">
                <p class="text-sm font-semibold text-red-800">Zona Bahaya</p>
                <p class="mt-1 text-xs text-red-700">Hapus produk akan menghilangkan data dari daftar.</p>
                <button type="button"
                    class="mt-4 w-full rounded-2xl bg-red-600 px-4 py-2.5 text-sm font-semibold text-white hover:bg-red-700">
                    Hapus Produk
                </button>
            </div>
        </div>

        {{-- Right: Form --}}
        <div class="lg:col-span-2 space-y-6">
            <div class="rounded-3xl border border-zinc-200 bg-white p-6">
                <h2 class="text-sm font-semibold">Informasi Produk</h2>

                <div class="mt-5 grid gap-4">
                    <div>
                        <label class="text-xs font-medium text-zinc-600">Nama Produk</label>
                        <input type="text" value="Hoodie Vintage Nike"
                               class="mt-2 w-full rounded-2xl border border-zinc-200 bg-white px-4 py-3 text-sm outline-none focus:ring-4 focus:ring-zinc-100" />
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label class="text-xs font-medium text-zinc-600">Kategori</label>
                            <select class="mt-2 w-full rounded-2xl border border-zinc-200 bg-white px-4 py-3 text-sm outline-none focus:ring-4 focus:ring-zinc-100">
                                <option selected>Hoodie</option>
                                <option>Jacket</option>
                                <option>T-shirt</option>
                                <option>Pants</option>
                                <option>Shoes</option>
                                <option>Accessories</option>
                            </select>
                        </div>

                        <div>
                            <label class="text-xs font-medium text-zinc-600">Kondisi</label>
                            <select class="mt-2 w-full rounded-2xl border border-zinc-200 bg-white px-4 py-3 text-sm outline-none focus:ring-4 focus:ring-zinc-100">
                                <option selected>Like New</option>
                                <option>Good</option>
                                <option>Fair</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label class="text-xs font-medium text-zinc-600">Harga (Rp)</label>
                            <input type="number" value="120000"
                                   class="mt-2 w-full rounded-2xl border border-zinc-200 bg-white px-4 py-3 text-sm outline-none focus:ring-4 focus:ring-zinc-100" />
                        </div>
                        <div>
                            <label class="text-xs font-medium text-zinc-600">Stok</label>
                            <input type="number" value="3"
                                   class="mt-2 w-full rounded-2xl border border-zinc-200 bg-white px-4 py-3 text-sm outline-none focus:ring-4 focus:ring-zinc-100" />
                        </div>
                    </div>

                    <div>
                        <label class="text-xs font-medium text-zinc-600">Deskripsi</label>
                        <textarea rows="5"
                                  class="mt-2 w-full rounded-2xl border border-zinc-200 bg-white px-4 py-3 text-sm outline-none focus:ring-4 focus:ring-zinc-100">Hoodie vintage bahan tebal, nyaman dipakai...</textarea>
                    </div>
                </div>
            </div>

            <div class="rounded-3xl border border-zinc-200 bg-white p-6">
                <h2 class="text-sm font-semibold">Status Produk</h2>
                <div class="mt-5 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-2xl border border-zinc-200 p-4">
                        <p class="text-sm font-semibold">Aktif</p>
                        <p class="mt-1 text-xs text-zinc-500">Produk terlihat oleh pembeli.</p>
                        <label class="mt-3 flex items-center gap-2 text-sm">
                            <input type="checkbox" class="rounded border-zinc-300" checked />
                            <span>Aktifkan</span>
                        </label>
                    </div>
                    <div class="rounded-2xl border border-zinc-200 p-4">
                        <p class="text-sm font-semibold">Stok Habis</p>
                        <p class="mt-1 text-xs text-zinc-500">Sembunyikan jika stok 0.</p>
                        <label class="mt-3 flex items-center gap-2 text-sm">
                            <input type="checkbox" class="rounded border-zinc-300" />
                            <span>Tandai habis</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-2 sm:flex-row sm:justify-end">
                <a href="/seller/products"
                   class="rounded-2xl border border-zinc-200 bg-white px-5 py-3 text-sm font-semibold hover:bg-zinc-50">
                    Batal
                </a>
                <button type="submit"
                        class="rounded-2xl bg-zinc-900 px-5 py-3 text-sm font-semibold text-white hover:bg-zinc-800">
                    Update Produk
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
