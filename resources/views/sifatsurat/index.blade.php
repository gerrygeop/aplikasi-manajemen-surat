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
                Sifat Surat
            </h1>
            <a 
                href="{{ route('sifatsurat.create') }}" 
                class="bg-indigo-400 text-white rounded-lg px-4 py-2 text-sm hover:bg-indigo-600 flex items-center"
            >
                <i class="w-4 mr-1" data-feather="plus-circle"></i>
                Tambah sifat surat
            </a>
        </div>
        <hr>
    </div>

    <table class="table-auto bg-white w-full mx-auto">
        <thead>
            <tr class="text-left text-sm border-b border-indigo-500">
                <th class="px-4 py-2">Nama</th>
                <th class="px-4 py-2">Keterangan</th>
                <th class="px-4 py-2"></th>
            </tr>
        </thead>
        <tbody>

            @forelse($sifat_surat as $sifat)
                <tr>
                    <td class="border-b px-4 py-2">
                        {{ $sifat->name }}
                    </td>
                    <td class="border-b px-4 py-2">
                        @if($sifat->keterangan != null)
                            {{ $sifat->keterangan }}
                        @else
                            <small class="text-gray-500"><i>Tanpa keterangan</i></small>
                        @endif
                    </td>

                    <td class="border-b px-4 py-2 text-white text-sm align-center">
                        <div class="flex items-center justify-center">
                            <a href="{{ route('sifatsurat.edit', $sifat->id) }}" class="bg-blue-500 rounded px-1 mr-1 flex items-center">
                                <i class="w-4 mr-1" data-feather="edit"></i>Edit
                            </a>

                            <form action="{{ route('sifatsurat.destroy', $sifat->id) }}" method="POST" class="flex">
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