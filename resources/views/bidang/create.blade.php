<x-app>

<div class="w-full">
    <div class="text-indigo-500 font-medium py-1 mb-4 border-b">
        <i>Tambah Bidang</i>
    </div>

    <form method="POST" action="{{ route('bidang.store') }}" class="bg-gray-200 rounded px-8 pt-6 pb-6 mb-4">
        @csrf

        <div class="mb-6">
            <label for="nama_bidang" class="block text-gray-700 text-sm font-bold mb-2">
                Nama Bidang
            </label>

            <input 
                id="nama_bidang" 
                type="text" 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                name="nama_bidang" 
                value="{{ old('nama_bidang') }}" 
                required 
                autocomplete="nama_bidang"
                placeholder="Nama Bidang" 
            >

            @error('nama_bidang')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-12">
            <label for="label" class="block text-gray-700 text-sm font-bold mb-2">
                Keterangan <small class="text-gray-600 font-normal"><i>(Optional)</i></small>
            </label>

            <textarea 
                name="label" 
                id="label" 
                class="w-full shadow appearance-none py-2 px-3 rounded border leading-tight text-gray-700 focus:outline-none focus:shadow-outline"
                placeholder="Keterangan"
            >{{old('label')}}</textarea>

            @error('label')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>


        <div class="mb-1 w-full">
            <button 
                type="submit" 
                class="w-full md:w-40 lg:w-24 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            >
                Simpan
            </button>
        </div>
        
    </form>
</div>

</x-app>