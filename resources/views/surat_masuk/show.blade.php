<x-app>

<div class="container">
    
    <div class="mb-6 p-2 rounded w-auto border-b">
        {{-- <div class="flex items-center text-sm">
            <h3 class="font-semibold mr-1">Pengirim : </h3>
            <p class="mr-2">{{ $surat->users->name }} </p>
            <p>({{ $surat->users->jabatan }} - {{ $surat->users->bidang }})</p>
        </div> --}}
        <p class="text-gray-500 italic">
            <small>Created at {{ $surat->created_at->diffForHumans() }}</small>
        </p>
    </div>
    
    <div class="w-full text-gray-600 text-sm">
        
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
            <div class="px-4 py-2 border-b border-gray-300">
                <p>Asal Surat</p>
                <p class="text-gray-800">{{ $surat->asal_surat }}</p>
            </div>
            <div class="px-4 py-2 border-b border-gray-300">
                <p>No Surat</p>
                <p class="text-gray-800">{{ $surat->no_surat }}</p>
            </div>
            <div class="px-4 py-2 border-b border-gray-300">
                <p>Indeks</p>
                <p class="text-gray-800">{{ $surat->indeks }}</p>
            </div>
            <div class="px-4 py-2 border-b border-gray-300">
                <p>Sifat Surat</p>
                <p class="text-gray-800">{{ $surat->sifat_surat->name }}</p>
            </div>
            <div class="px-4 py-2 border-b border-gray-300">
                <p>Tanggal Surat</p>
                <p class="text-gray-800">{{ $surat->tanggal_surat }}</p>
            </div>
            <div class="px-4 py-2 border-b border-gray-300">
                <p>Tanggal Masuk</p>
                <p class="text-gray-800">{{ $surat->tanggal_masuk }}</p>
            </div>
            
        </div>

        <div class="grid grid-cols-1 mb-4">
            <div class="px-4 py-2 border-b border-gray-300">
                <p>Perihal</p>
                <p class="text-gray-800">{{ $surat->perihal }}</p>
            </div>
        </div>

        <div class="flex items-end">
            <div class="px-4 border-b border-gray-300 mr-6">
                <p>File</p>
                <p class="text-gray-800">{{ $surat->file }}</p>
            </div>

            <a href="{{ route('download', $surat->id) }}" class="text-white bg-blue-400 hover:bg-blue-500 px-2 py-1 rounded mr-2">Download</a>
            <a href="{{ route('preview', $surat->id) }}" class="text-white bg-blue-400 hover:bg-blue-500 px-2 py-1 rounded">Preview</a>
        </div>

    </div>

</div>

</x-app>