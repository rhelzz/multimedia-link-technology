<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tambah Layanan</title>
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-6">Tambah Layanan</h1>
        <form action="{{ route('admin.services.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block font-bold">Nama Layanan</label>
                <input type="text" id="name" name="name" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="label" class="block font-bold">Label</label>
                <input type="text" id="label" name="label" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="price" class="block font-bold">Harga</label>
                <input type="text" id="price" name="price" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="features" class="block font-bold">Fitur</label>
                <textarea id="features" name="features" class="w-full p-2 border rounded" required></textarea>
                <small class="text-gray-500">Pisahkan fitur dengan koma (,).</small>
            </div>
            <div class="mb-4">
                <label class="block font-bold">Tandai Favorit</label>
                <input type="checkbox" id="is_favorite" name="is_favorite" value="1">
                <label for="is_favorite" class="text-gray-700">Favorit?</label>
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Simpan</button>
        </form>
    </div>
</body>
</html>