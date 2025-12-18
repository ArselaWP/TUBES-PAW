<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title ?? 'Thrift Shop' }}</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-zinc-50 text-zinc-900">
    {{-- Topbar --}}
    <header class="sticky top-0 z-40 border-b bg-white/80 backdrop-blur">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3">
            <a href="/" class="flex items-center gap-2">
                <div class="h-9 w-9 rounded-2xl bg-zinc-900"></div>
                <div>
                    <p class="text-sm font-semibold leading-none">ThriftShop</p>
                    <p class="text-xs text-zinc-500">Jual beli baju bekas</p>
                </div>
            </a>

            {{-- Search --}}
            <form action="#" class="hidden w-[38rem] max-w-xl items-center gap-2 md:flex">
                <div class="relative w-full">
                    <input
                        type="text"
                        placeholder="Cari hoodie, jaket, celana..."
                        class="w-full rounded-2xl border border-zinc-200 bg-white px-4 py-2.5 pr-10 text-sm outline-none focus:border-zinc-300 focus:ring-4 focus:ring-zinc-100"
                    />
                    <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 text-zinc-400">⌕</span>
                </div>
                <button class="rounded-2xl bg-zinc-900 px-4 py-2.5 text-sm font-medium text-white hover:bg-zinc-800">
                    Search
                </button>
            </form>

            {{-- Actions --}}
            <nav class="flex items-center gap-2">
                <a href="/cart" class="rounded-2xl border border-zinc-200 bg-white px-3 py-2 text-sm hover:bg-zinc-50">
                    🛒 Cart
                </a>
                <a href="/orders" class="rounded-2xl border border-zinc-200 bg-white px-3 py-2 text-sm hover:bg-zinc-50">
                    📦 Orders
                </a>
                <a href="/seller/dashboard" class="hidden rounded-2xl bg-zinc-900 px-3 py-2 text-sm font-medium text-white hover:bg-zinc-800 md:inline">
                    Seller Dashboard
                </a>
                <a href="/login" class="rounded-2xl border border-zinc-200 bg-white px-3 py-2 text-sm hover:bg-zinc-50">
                    Login
                </a>
            </nav>
        </div>

        {{-- Subnav --}}
        <div class="border-t bg-white">
            <div class="mx-auto flex max-w-7xl flex-wrap items-center gap-2 px-4 py-2">
                @foreach (['All','Hoodie','Jacket','T-shirt','Pants','Shoes','Accessories'] as $cat)
                    <a href="#"
                       class="rounded-full border border-zinc-200 bg-white px-3 py-1.5 text-xs font-medium text-zinc-700 hover:bg-zinc-50">
                        {{ $cat }}
                    </a>
                @endforeach
                <span class="ml-auto hidden text-xs text-zinc-500 md:block">Free ongkir untuk area tertentu • COD tersedia</span>
            </div>
        </div>
    </header>

    <main class="mx-auto max-w-7xl px-4 py-8">
        {{-- Flash --}}
        @if(session('success'))
            <div class="mb-6 rounded-2xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800">
                {{ session('success') }}
            </div>
        @endif

        {{ $slot ?? '' }}
        @yield('content')
    </main>

    <footer class="border-t bg-white">
        <div class="mx-auto grid max-w-7xl gap-6 px-4 py-10 md:grid-cols-3">
            <div>
                <p class="text-sm font-semibold">ThriftShop</p>
                <p class="mt-2 text-sm text-zinc-500">
                    Platform thrift shop untuk jual-beli baju bekas berkualitas.
                </p>
            </div>
            <div class="text-sm text-zinc-500">
                <p class="font-medium text-zinc-800">Menu</p>
                <ul class="mt-2 space-y-1">
                    <li><a class="hover:text-zinc-800" href="/">Home</a></li>
                    <li><a class="hover:text-zinc-800" href="/cart">Cart</a></li>
                    <li><a class="hover:text-zinc-800" href="/orders">Orders</a></li>
                </ul>
            </div>
            <div class="text-sm text-zinc-500">
                <p class="font-medium text-zinc-800">Support</p>
                <p class="mt-2">Email: support@thriftshop.test</p>
                <p>© {{ date('Y') }} ThriftShop</p>
            </div>
        </div>
    </footer>
</body>
</html>
