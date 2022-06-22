<x-app>

<div class="w-full px-1 sm:px-2 lg:px-4">

    <div class="text-gray-500 text-sm mb-2 pb-2 border-b">  
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
            <div class="px-4 py-2 border-b border-gray-300">
                <p>Asal Surat</p>
                <p class="text-gray-600 text-base">{{ $surat->asal_surat }}</p>
            </div>
            <div class="px-4 py-2 border-b border-gray-300">
                <p>No Surat</p>
                <p class="text-gray-600 text-base">{{ $surat->no_surat }}</p>
            </div>
            <div class="px-4 py-2 border-b border-gray-300">
                <p>Indeks</p>
                <p class="text-gray-600 text-base">{{ $surat->indeks }}</p>
            </div>
            <div class="px-4 py-2 border-b border-gray-300">
                <p>Perihal</p>
                <p class="text-gray-600 text-base">{{ $surat->perihal }}</p>
            </div>
            <div class="px-4 py-2 border-b border-gray-300">
                <p>Sifat Surat</p>
                <p class="text-gray-600 text-base">{{ $surat->sifat_surat }}</p>
            </div>
            <div class="px-4 py-2 border-b border-gray-300">
                <p>Klasifikasi</p>
                <p class="text-gray-600 text-base">{{ $surat->classification->name }}</p>
            </div>
            <div class="px-4 py-2 border-b border-gray-300">
                <p>Tanggal Masuk</p>
                <p class="text-gray-600 text-base">{{ $surat->tanggal_masuk }}</p>
            </div>
            <div class="px-4 py-2 border-b border-gray-300">
                <p>Tanggal Diteruskan</p>
                <p class="text-gray-600 text-base">{{ $surat->tanggal_diteruskan }}</p>
            </div>
            <div class="px-4 py-2 border-b border-gray-300">
                <p>Tujuan</p>
                <p class="text-gray-600 text-base">{{ $surat->recipient->jabatan }} - <i>{{ $surat->recipient->bidang }}</i></p>
            </div>  
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 gap-4 mb-4">
            <div class="px-4 py-2 border-b border-gray-300">
                <p>Isi Ringkas</p>
                <p class="text-gray-600 text-base">{{ $surat->isi_ringkas }}</p>
            </div>
            <div class="px-4 py-2 border-b border-gray-300">
                <p>Catatan</p>
                <p class="text-gray-600 text-base">{{ $surat->catatan }}</p>
            </div>
        </div>

        <div class="flex items-end">
            <div class="px-4 mr-4">
                <p>File</p>
                <p class="text-gray-800">{{ $surat->file }}</p>
            </div>

            <a href="{{ route('download', $surat->id) }}" class="text-white bg-blue-400 hover:bg-blue-500 px-2 py-1 rounded">Download</a>
        </div>
    </div>

    <form method="POST" action="{{ route('surat_masuk.updateVerification', $surat->id) }}" class="rounded pt-6 pb-8 mb-4">
        @csrf
        @method('PATCH')

        <!-- tambahan -->
        <div class="mb-6">
            <label for="catatan_tambahan" class="block text-gray-900 text-sm font-bold mb-2">
                Tambahkan Catatan <small class="text-gray-600 font-normal"><i>(Optional)</i></small>
            </label>

            <textarea 
                name="catatan_tambahan" 
                id="catatan_tambahan" 
                class="w-full shadow appearance-none py-2 px-3 rounded border text-gray-900 focus:outline-none focus:shadow-outline"
                placeholder="Catatan"
            >{{ $surat->catatan_tambahan ? $surat->catatan_tambahan : old('catatan_tambahan') }}</textarea>
        </div>

        
        <div class="mb-10 lg:w-1/2">
            <input 
                type="checkbox" 
                class="mr-2" 
                name="verifikasi" 
                id="verifikasi" 
                value="0"
                @if ($surat->verifikasi == 1)
                    checked="" 
                @endif
            >
                Verifikasi
        </div>


        <div class="my-2 flex items-center">
            <button 
                type="submit" 
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2"
            >
                Simpan
            </button>
        </div>
        
    </form>

</div>

</x-app>