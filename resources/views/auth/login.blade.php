<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Login SIM-Surat</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="relative flex min-h-screen flex-col items-center justify-center overflow-hidden bg-gradient-to-br from-indigo-700 via-indigo-600 to-sky-500 px-4 before:absolute before:-left-24 before:-top-24 before:h-80 before:w-80 before:rounded-full before:bg-white/10 before:content-[''] after:absolute after:-bottom-28 after:-right-20 after:h-96 after:w-96 after:rounded-full after:bg-white/10 after:content-['']">
    <h1 class="relative z-10 mb-6 text-3xl font-extrabold tracking-tight text-white drop-shadow">Login SIM-Surat</h1>
    <form method="POST" action="{{ route('login.submit') }}"
          class="relative z-10 w-full max-w-sm rounded-2xl border-t-4 border-t-sky-400 bg-white p-8 shadow-2xl">
        @csrf
        <p class="mb-4"><label class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-slate-500">Email</label>
        <input type="email" name="email" value="{{ old('email') }}" placeholder="nama@example.test"
               class="w-full rounded-lg border border-slate-300 bg-slate-50 px-4 py-2.5 text-sm text-slate-800 transition placeholder:text-slate-400 focus:border-indigo-500 focus:bg-white focus:outline-none focus:ring-4 focus:ring-indigo-100"></p>
        @error('email') <p class="-mt-2 mb-4 rounded-lg bg-red-50 px-3 py-2 text-sm text-red-600">{{ $message }}</p> @enderror
        <p class="mb-5"><label class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-slate-500">Password</label>
        <input type="password" name="password" placeholder="••••••••"
               class="w-full rounded-lg border border-slate-300 bg-slate-50 px-4 py-2.5 text-sm text-slate-800 transition placeholder:text-slate-400 focus:border-indigo-500 focus:bg-white focus:outline-none focus:ring-4 focus:ring-indigo-100"></p>
        @error('password') <p class="-mt-3 mb-4 rounded-lg bg-red-50 px-3 py-2 text-sm text-red-600">{{ $message }}</p> @enderror
        <button type="submit"
                class="w-full rounded-lg bg-gradient-to-r from-indigo-600 to-sky-500 py-2.5 font-semibold text-white shadow-md transition hover:-translate-y-0.5 hover:shadow-lg">Masuk</button>
    </form>
</body>
</html>
