<x-app>

<div class="mx-auto w-full">
    <div class="text-indigo-500 font-medium py-1 mb-4 border-b">
        <i>Edit sifat surat</i>
    </div>

    <form method="POST" action="{{ route('sifatsurat.update', $sifat_surat->id) }}" class="bg-gray-100 rounded px-8 pt-6 pb-6 mb-4">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                Sifat Surat
            </label>

            <input 
                id="name" 
                type="text" 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') is-invalid @enderror" 
                name="name" 
                value="{{ old('name') ? old('name') : $sifat_surat->name }}" 
                required 
                autocomplete="name"
                placeholder="Sifat surat" 
            >

            @error('name')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-12">
            <label for="keterangan" class="block text-gray-700 text-sm font-bold mb-2">
                Keterangan <small class="text-gray-600 font-normal"><i>(Optional)</i></small>
            </label>

            <textarea 
                name="keterangan" 
                id="keterangan" 
                class="w-full shadow appearance-none py-2 px-3 rounded border leading-tight text-gray-700 focus:outline-none focus:shadow-outline @error('keterangan') is-invalid @enderror"
                placeholder="Keterangan"
            >{{old('keterangan') ? old('keterangan') : $sifat_surat->keterangan }}</textarea>

            @error('keterangan')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>


        <div class="mb-1">
            <button 
                type="submit" 
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            >
                Simpan
            </button>
        </div>
        
    </form>
</div>
</x-app>