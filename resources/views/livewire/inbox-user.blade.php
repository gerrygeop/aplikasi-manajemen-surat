<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

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
	                    <th class="w-1/4 p-2">Asal Surat</th>
	                    <th class="w-1/4 p-2">Tanggal Surat</th>
	                    <th class="w-1/4 p-2">Tanggal Masuk</th>
	                    <th class="w-1/4 p-2">Sifat Surat</th>
	                    <th class="w-1/4 px-24"></th>
	                </tr>
	            </thead>
	            <tbody>
	                @forelse ($surat_masuk as $surat)
	                    <tr class="border-b">
	                        <td class="px-4 py-2">
	                            {{ $surat->asal_surat }}
	                        </td>
	                        <td class="px-4 py-2">
	                            {{ $surat->tanggal_surat }}
	                        </td>
	                        <td class="px-4 py-2">
	                            {{ $surat->tanggal_masuk }}
	                        </td>
	                        <td class="px-4 py-2">
	                            {{ $surat->sifat_surat->name }}
	                        </td>
	                        <td class="px-4 py-2 text-center">
	                            <a href="#" class="bg-blue-500 text-white px-2 py-1 rounded">
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

</div>
