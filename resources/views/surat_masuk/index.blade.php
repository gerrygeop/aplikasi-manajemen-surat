<x-app>

<div class="container">

    @if(session('success_message'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="mb-4 font-bold w-auto">
        <div class="flex justify-between items-center mb-2">
            <h1 class="flex text-lg text-indigo-600">
                <i class="w-6 mr-2" data-feather="mail"></i>
                Surat Masuk
            </h1>
            <a 
                href="{{ route('surat_masuk.create') }}" 
                class="bg-indigo-400 text-white rounded-lg px-4 py-2 text-sm hover:bg-indigo-600 flex items-center"
            >
                <i class="w-4 mr-1" data-feather="plus-circle"></i>
                Tambah Surat Masuk
            </a>
        </div>
        <hr>
    </div>
    
    <table class="table-auto w-full mx-auto">
        <thead>
            <tr class="text-sm text-left border-b border-indigo-500">
                <th class="p-2">Asal Surat</th>
                <th class="p-2">No Surat</th>
                <th class="p-2">Tanggal Surat</th>
                <th class="p-2">Tanggal Masuk</th>
                {{-- <th class="p-2">Verifikasi</th> --}}
                <th class="p-2"></th>
            </tr>
        </thead>
        <tbody>
        
            @if(!auth()->user()->isAdmin())
                @forelse($surat_masuk as $surat)
                    @include('_surat-user')
                @empty
                    <tr class="border-b">
                        <td class="px-4 py-2 text-center" colspan="8">
                            <small><i>Tidak Ada</i></small>
                        </td>
                    </tr>
                @endforelse

            @else
                @forelse($surat_masuk as $surat)
                    @include('_surat-user')
                @empty
                    <tr class="border-b">
                        <td class="px-4 py-2 text-center" colspan="8">
                            <small><i>Tidak Ada</i></small>
                        </td>
                    </tr>
                @endforelse
            @endif

        </tbody>
    </table>

</div>

</x-app>