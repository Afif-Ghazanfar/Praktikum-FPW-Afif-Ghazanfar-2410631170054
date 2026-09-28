<!DOCTYPE html>
<html lang="id">
<head>
    
    <meta charset="utf-8">
    <title>Login - POS Barokah Mart</title>
    @vite('resources/css/app.css')

</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-6 rounded-xl shadow-lg w-half max-w-xs border-gray-400 rounded shadow">
        <h1 class="text-xl font-semibold mb-6 text-center">POS Barokah Mart</h1>
 
        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-md text-sm">
                {{ $errors->first() }}
            </div>
        @endif
 
        <form action="{{ route('login.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required autofocus>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
            </div>
            <div class="flex justify-center mt-4">
            <button type="submit"
                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                Masuk
            </button>
            </div>
        </form>
    </div>
</body>
</html>