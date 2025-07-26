<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Stock</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-800 min-h-screen flex items-center justify-center">

  <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
    <h1 class="text-2xl font-bold mb-6 text-center">Edit Stock</h1>

    @if (session('success'))
      <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
        {{ session('success') }}
      </div>
    @endif

    <form action={{ route('edit.stock', $stock->id) }} method="POST" class="space-y-8">
      @csrf
      @method('PUT')
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Stock Name</label>
        <input type="text" id="name" name="name" value="{{ $stock->name }}" required
               class="mt-1 p-3 text-xl block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
      </div>

      <div>
        <label for="price" class="block text-sm font-medium text-gray-700">Stock Price</label>
        <input type="number" id="price" name="price" value="{{ $stock->price }}" required
               class="mt-1 p-3 text-xl block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
      </div>

      <div>
        <label for="mkt_cap" class="block text-sm font-medium text-gray-700">Market Cap</label>
        <input type="number" id="mkt_cap" name="mkt_cap" value="{{ $stock->mkt_cap }}" step="0.01" required
               class="mt-1 p-3 text-xl block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
      </div>

      <div>
        <label for="dividend" class="block text-sm font-medium text-gray-700">Dividend</label>
        <input type="number" id="dividend" name="dividend" value="{{ $stock->dividend }}" step="0.01" required
               class="mt-1 p-3 text-xl block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
      </div>

      <button type="submit"
              class="w-full bg-indigo-600 text-white py-2 px-4 rounded-full hover:bg-indigo-700 transition">
        Edit Stock
      </button>
    </form>
  </div>

</body>
</html>
