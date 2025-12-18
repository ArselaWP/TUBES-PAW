@extends('layouts.app')

@section('content')
<div class="mx-auto max-w-4xl space-y-6">
    <div class="flex items-end justify-between">
        <div>
            <h1 class="text-2xl font-semibold">Tambah Produk</h1>
            <p class="text-sm text-zinc-500">Upload barang thrift baru untuk dijual.</p>
        </div>
        <a href="/seller/products"
           class="rounded-2xl border border-zinc-200 bg-white px-4 py-2.5 text-sm font-semibold hover:bg-zinc-50">
            ← Kembali
        </a>
    </div>

    <form action="#" method="POST" enctype="multipart/form-data" class="grid gap-6 lg:grid-cols-3">
        @csrf

        {{-- Left: Image --}}
        <div class="lg:col-span-1 space-y-4">
            <div class="rounded-3xl border border-zinc-200 bg-white p-5">
                <p class="text-sm font-semibold">Foto Produk</p>
                <p class="mt-1 text-xs text-zinc-500">JPG/PNG, maksimal 2MB.</p>

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
                </div>
            </div>

            <div class="rounded-3xl border border-zinc-200 bg-white p-5">
                <p class="text-sm font-semibold">Tips Foto</p>
                <ul class="mt-3 list-disc space-y-1 pl-4 text-sm text-zinc-600">
                    <li>Gunakan pencahayaan terang</li>
                    <li>Foto dari depan & belakang</li>
                    <li>Tampilkan detail cacat jika ada</li>
                </ul>
            </div>
        </div>

        {{-- Right: Form --}}
        <div class="lg:col-span-2 space-y-6">
            <div class="rounded-3xl border border-zinc-200 bg-white p-6">
                <h2 class="text-sm font-semibold">Informasi Produk</h2>

                <div class="mt-5 grid gap-4">
                    <div>
                        <label class="text-xs font-medium text-zinc-600">Nama Produk</label>
                        <input type="text" placeholder="Contoh: Hoodie Vintage Nike"
                               class="mt-2 w-full rounded-2xl border border-zinc-200 bg-white px-4 py-3 text-sm outline-none focus:ring-4 focus:ring-zinc-100" />
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label class="text-xs font-medium text-zinc-600">Kategori</label>
                            <select class="mt-2 w-full rounded-2xl border border-zinc-200 bg-white px-4 py-3 text-sm outline-none focus:ring-4 focus:ring-zinc-100">
                                <option>Hoodie</option>
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
                                <option>Like New</option>
                                <option>Good</option>
                                <option>Fair</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <label class="text-xs font-medium text-zinc-600">Harga (Rp)</label>
                            <input type="number" placeholder="120000"
                                   class="mt-2 w-full rounded-2xl border border-zinc-200 bg-white px-4 py-3 text-sm outline-none focus:ring-4 focus:ring-zinc-100" />
                        </div>
                        <div>
                            <label class="text-xs font-medium text-zinc-600">Stok</label>
                            <input type="number" placeholder="3"
                                   class="mt-2 w-full rounded-2xl border border-zinc-200 bg-white px-4 py-3 text-sm outline-none focus:ring-4 focus:ring-zinc-100" />
                        </div>
                    </div>

                    <div>
                        <label class="text-xs font-medium text-zinc-600">Deskripsi</label>
                        <textarea rows="5" placeholder="Jelaskan detail: bahan, ukuran, minus (jika ada)..."
                                  class="mt-2 w-full rounded-2xl border border-zinc-200 bg-white px-4 py-3 text-sm outline-none focus:ring-4 focus:ring-zinc-100"></textarea>
                    </div>
                </div>
            </div>

            <div class="rounded-3xl border border-zinc-200 bg-white p-6">
                <h2 class="text-sm font-semibold">Pengaturan Penjualan</h2>
                <div class="mt-5 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-2xl border border-zinc-200 p-4">
                        <p class="text-sm font-semibold">Tampilkan Produk</p>
                        <p class="mt-1 text-xs text-zinc-500">Produk akan muncul di halaman utama.</p>
                        <label class="mt-3 flex items-center gap-2 text-sm">
                            <input type="checkbox" class="rounded border-zinc-300" checked />
                            <span>Aktifkan</span>
                        </label>
                    </div>
                    <div class="rounded-2xl border border-zinc-200 p-4">
                        <p class="text-sm font-semibold">Bisa COD</p>
                        <p class="mt-1 text-xs text-zinc-500">Opsi pembayaran di tempat.</p>
                        <label class="mt-3 flex items-center gap-2 text-sm">
                            <input type="checkbox" class="rounded border-zinc-300" />
                            <span>Aktifkan COD</span>
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
                    Simpan Produk
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
