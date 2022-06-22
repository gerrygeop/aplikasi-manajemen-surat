<x-app>

<div class="container">

    @if(session('success_message'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="mb-4 font-bold w-auto">
        <div class="flex justify-between items-center mb-2">
            <h1 class="text-lg text-indigo-600 flex">
                <i class="w-6 mr-2" data-feather="bookmark"></i>
                Bidang
            </h1>
            <a 
                href="{{ route('bidang.create') }}" 
                class="bg-indigo-400 text-white rounded-lg px-4 py-2 text-sm hover:bg-indigo-600 flex items-center"
            >
                <i class="w-4 mr-1" data-feather="plus-circle"></i>
                Tambah Bidang
            </a>
        </div>
        <hr>
    </div>

    <table class="table-auto bg-white w-full mx-auto">
        <thead>
            <tr class="text-left text-sm border-b border-indigo-500">
                <th class="px-4 py-2">Nama Bidang</th>
                <th class="px-4 py-2">Keterangan</th>
                <th class="px-4 py-2"></th>
            </tr>
        </thead>
        <tbody>

            @forelse($bidang as $bid)
                <tr>
                    <td class="border-b px-4 py-2">
                        {{ $bid->nama_bidang }}
                    </td>
                    <td class="border-b px-4 py-2">
                        @if($bid->label != null)
                            {{ $bid->label }}
                        @else
                            <small class="text-gray-500"><i>Tanpa keterangan</i></small>
                        @endif
                    </td>

                    <td class="border-b px-4 py-2 text-white text-sm align-center">
                        <div class="flex items-center justify-center">
                            <a href="#" class="bg-blue-500 rounded px-1 mr-1 flex items-center">
                                <i class="w-4 mr-1" data-feather="edit"></i>Edit
                            </a>

                            <form action="#" method="POST" class="flex">
                                @csrf
                                @method('DELETE')

                                <button type="submit" name="submit" class="bg-red-500 rounded px-1 flex items-center">
                                    <i class="w-4 mr-1" data-feather="trash-2"></i>Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>

            @empty
                <tr class="border-b">
                    <td class="px-4 py-2 text-center" colspan="3">
                        <small><i>Tidak Ada</i></small>
                    </td>
                </tr>
            @endforelse

        </tbody>
    </table>

</div>

</x-app>