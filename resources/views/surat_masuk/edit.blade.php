<x-app>

<div class="w-full">

    <div class="text-indigo-500 font-medium py-1 mb-4 border-b">
        <i>Edit Surat</i>
    </div>

    <form method="POST" action="{{ route('surat_masuk.update', $surat->id) }}" class="bg-gray-100 rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="w-full flex mb-2">
            <div class="mb-4 md:w-1/3 pr-3">
                <label for="asal_surat" class="block text-gray-700 text-sm font-bold mb-2">
                    Asal Surat
                </label>

                <input 
                    id="asal_surat" 
                    type="text" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('asal_surat') is-invalid @enderror" 
                    name="asal_surat" 
                    value="{{ $surat->asal_surat }}" 
                    required 
                    autocomplete="asal_surat" 
                    placeholder="Asal Surat" 
                >

                @error('asal_surat')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 md:w-1/3 pr-3">
                <label for="no_surat" class="block text-gray-700 text-sm font-bold mb-2">
                    No Surat
                </label>

                <input 
                    id="no_surat" 
                    type="text" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('no_surat') is-invalid @enderror" 
                    name="no_surat" 
                    value="{{ $surat->no_surat }}" 
                    required
                    placeholder="No Surat" 
                >

                @error('no_surat')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 md:w-1/3">
                <label for="indeks" class="block text-gray-700 text-sm font-bold mb-2">
                    Indeks
                </label>

                <input 
                    id="indeks" 
                    type="text" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('indeks') is-invalid @enderror" 
                    name="indeks" 
                    value="{{ $surat->indeks }}" 
                    required 
                    placeholder="Indeks" 
                >

                @error('indeks')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>
        
        <div class="w-full flex mb-2">
            <div class="mb-4 md:w-1/2 pr-3">
                <label for="tanggal_surat" class="block text-gray-700 text-sm font-bold mb-2">
                    Tanggal Surat
                </label>

                <input 
                    id="tanggal_surat" 
                    type="date" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('tanggal_surat') is-invalid @enderror" 
                    name="tanggal_surat"
                    value="{{ $surat->tanggal_surat }}" 
                    required 
                >

                @error('tanggal_surat')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 md:w-1/2">
                <label for="tanggal_masuk" class="block text-gray-700 text-sm font-bold mb-2">
                    Tanggal Masuk
                </label>

                <input 
                    id="tanggal_masuk" 
                    type="date" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('tanggal_masuk') is-invalid @enderror" 
                    name="tanggal_masuk"
                    value="{{ $surat->tanggal_masuk }}" 
                    required
                >

                @error('tanggal_masuk')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="w-full flex items-center mb-2">
            <div class="mb-4 md:w-1/3 pr-3">

                <label for="perihal" class="block text-gray-700 text-sm font-bold mb-2">
                    Perihal
                </label>

                <input 
                    id="perihal" 
                    type="text" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('perihal') is-invalid @enderror" 
                    name="perihal" 
                    value="{{ $surat->perihal }}" 
                    required 
                    autocomplete="perihal"
                    placeholder="Perihal" 
                >

                @error('perihal')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                
            </div>

            <div class="mb-4 md:w-1/3 pr-3">

                <label for="sifat_surat" class="block text-gray-700 text-sm font-bold mb-2">
                    Sifat Surat
                </label>
                
                <div class="relative">
                    <select 
                        class="js-example-basic-single w-full @error('sifat_surat') is-invalid @enderror" 
                        id="sifat_surat" 
                        name="sifat_surat"
                        data-placeholder="Sifat Surat"
                    >
                        @foreach ($sifat_surat as $sifat)
                            <option value="{{ $sifat->id }}" {{ $surat->sifat_surat_id == $sifat->id ? "selected":'' }}>
                                {{ $sifat->name }}
                            </option>
                        @endforeach

                    </select>
                </div>

                @error('sifat_surat')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                
            </div>

        </div>

        <div class="flex">
            <div class="mb-10 lg:w-1/2">

                <label for="file" class="block text-gray-700 text-sm font-bold mb-2">
                    Lampiran
                </label>

                <input 
                    id="file" 
                    type="file" 
                    class="bg-white shadow rounded py-2 px-3 text-gray-700 focus:shadow-outline @error('file') is-invalid @enderror" 
                    name="file"
                    value="{{ $surat->file }}" 
                    alt="Lampiran" 
                >

                @error('file')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                
            </div>

        </div>

        <div class="my-2">
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