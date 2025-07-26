<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kenil Bhandari</title>
  @vite('resources/css/app.css')
  @vite('resources/css/app.js')
</head>

<body>
  <div class="flex flex-col items-center space-y-8 justify-center min-h-screen bg-gray-800">

    <h1 class="text-2xl font-bold bg-blue-50 p-4 rounded-xl text-blue-500">Crud Ops Laravel</h1>
    <div class="bg-white p-6 w-[80dvw] h-[80dvh] rounded-2xl overflow-auto">
      <div class="rounded-lg bg-white text-white text-right mb-2 text-xl w-full">
        <a href="{{ route('add.stock') }}"
          class="inline-block p-3 px-8 rounded-lg bg-green-600 text-white mb-2 text-xl w-fit text-center hover:bg-green-700 transition">
          Add Stock
        </a>

      </div>
      <table class="border-2 w-full h-auto p-5 border-black">


        <tr class="border-2 bg-gray-200">
          <th class="border-2 h-12">
            Stock Name
          </th>
          <th class="border-2 ">
            Stock Price
          </th>
          <th class="border-2 ">
            Market Cap
          </th>
          <th class="border-2 ">
            Dividend Yield
          </th>
          <th class="border-2" colspan="2">
            Actions
          </th>
        </tr>
        @forelse ($stocks as $stock)

      <tr class="border-2 text-center m-48">
        <td class="border-2 py-4">{{ $stock->name }}</td>
        <td class="border-2">{{ $stock->price }}</td>
        <td class="border-2">{{ number_format($stock->mkt_cap) }}</td>
        <td class="border-2">{{ $stock->dividend }}</td>

        <td class=" border-2">
        <a href="{{ route('edit.stock', $stock->id) }}"
          class="inline-block cursor-pointer p-2 w-[70%] bg-blue-600 text-white rounded-lg">
          Edit
        </a>
        </td>
        <td class="border-2 ">
        <form action="{{ route('stock.destroy', $stock->id) }}" method="POST"
          onsubmit="return confirm('Are you sure ?');">
          @csrf
          @method('DELETE')
          <button type="submit"
          class="bg-red-600 inline-block cursor-pointer p-2 w-[70%] rounded-lg text-white px-4 py-2 hover:bg-red-700">
          Delete
          </button>
        </form>

        </td>
      </tr>
    @empty
      <tr>
        <td colspan="4" class="text-center text-gray-800 py-4">No stocks found.</td>
      </tr>
    @endforelse

      </table>

    </div>
  </div>
</body>

</html>