<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-slate-100 text-slate-800">
    <header class="sticky top-0 z-10 border-b border-slate-200 bg-white/90 px-6 py-3 shadow-sm backdrop-blur">
        <h2 class="text-xl font-extrabold tracking-tight text-indigo-600">Sistem Surat</h2>

        <hr class="my-2 border-slate-100">

        <nav class="flex flex-wrap items-center justify-between gap-3">
            <ul class="flex items-center gap-1 text-sm font-medium">
                <li><a href="{{ route('dashboard') }}" class="block rounded-lg px-4 py-2 transition {{ request()->routeIs('dashboard') ? 'bg-indigo-600 text-white shadow-sm' : 'text-slate-600 hover:bg-indigo-50 hover:text-indigo-600' }}">Dashboard</a></li>
                <li><a href="{{ route('surat-masuk.index') }}" class="block rounded-lg px-4 py-2 transition {{ request()->routeIs('surat-masuk.*') ? 'bg-indigo-600 text-white shadow-sm' : 'text-slate-600 hover:bg-indigo-50 hover:text-indigo-600' }}">Surat Masuk</a></li>
                <li><a href="{{ route('surat-keluar.index') }}" class="block rounded-lg px-4 py-2 transition {{ request()->routeIs('surat-keluar.*') ? 'bg-indigo-600 text-white shadow-sm' : 'text-slate-600 hover:bg-indigo-50 hover:text-indigo-600' }}">Surat Keluar</a></li>
            </ul>

            @auth
                <div class="flex items-center gap-3 text-sm">
                    <span class="rounded-full bg-slate-100 px-3 py-1.5 text-slate-600">Masuk sebagai: <strong class="text-slate-800">{{ auth()->user()->name }}</strong></span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="rounded-lg bg-red-500 px-4 py-2 font-semibold text-white shadow-sm transition hover:bg-red-600">Keluar</button>
                    </form>
                </div>
            @endauth
        </nav>
    </header>

    <main class="flex-1 w-full max-w-6xl mx-auto px-6 py-8">
        @yield('content')
    </main>

    <hr class="border-slate-200">

    <footer class="bg-white px-6 py-4">
        <p class="text-sm text-slate-500">Sistem Informasi Surat</p>
    </footer>

</body>
</html>
