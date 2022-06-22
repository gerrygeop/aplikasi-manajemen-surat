<div class="container">
    <div class="flex items-center text-indigo-600">
        <i class="w-6 mr-2" data-feather="inbox"></i>
        <b class="text-xl">Inbox</b>
    </div>

    <hr>
    
    <div class="px-4">
        <table class="table-auto w-full mx-auto mt-4">
            <thead>
                <tr class="text-sm text-left border-b border-indigo-600">
                    <th class="w-1/2 p-2">Pengirim</th>
                    <th class="w-1/4 p-2">Asal Surat</th>
                    <th class="w-1/4 p-2">Sifat Surat</th>
                    <th class="w-1/4 p-2">Verifikasi</th>
                    <th class="w-1/4 px-24"></th>
                </tr>
            </thead>
            <tbody>
                @forelse (auth()->user()->surat_masuk() as $surat)
                    <tr class="border-b">
                        <td class="px-4 py-2">
                            {{ $surat->name }}
                            <small class="block text-gray-500"><i>{{ $surat->jabatan }} - {{ $surat->bidang }}</i></small>
                        </td>
                        <td class="px-4 py-2">
                            {{ $surat->asal_surat }}
                        </td>
                        <td class="px-4 py-2">
                            {{ $surat->sifat_surat }}
                        </td>
                        <td class="px-4 py-2 text-center">
                            <small class="rounded text-white px-1 {{ $surat->verifikasi == 0 ? 'bg-red-400' : 'bg-green-400' }}">
                                <i>{{ $surat->getVerifikasi() }}</i>
                            </small>
                        </td>
                        <td class="px-4 py-2 text-center">
                            <a href="{{ route('surat_masuk.verification', $surat->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded">
                                Lihat
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="border-b px-4 py-2 text-center" colspan="4">
                            <small><i>Tidak Ada</i></small>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>