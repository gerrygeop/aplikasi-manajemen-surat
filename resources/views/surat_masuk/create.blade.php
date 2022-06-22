<x-app>

<div class="w-full">

    <div class="text-indigo-500 font-medium py-1 mb-4 border-b">
        <i>Tambah Surat Masuk</i>
    </div>    

    <form method="POST" action="{{ route('surat_masuk.store') }}" class="bg-gray-100 rounded px-4 lg:px-8 pt-6 pb-8" enctype="multipart/form-data">
        @csrf

        <div class="mb-2 pb-2 border-b">  
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">

                <div class="px-4 py-2">
                    <label for="asal_surat" class="block text-gray-600 text-sm font-bold mb-2">
                        Asal Surat
                    </label>
                    <input 
                        id="asal_surat" 
                        type="text" 
                        class="border border-gray-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('asal_surat') is-invalid @enderror" 
                        name="asal_surat" 
                        value="{{ old('asal_surat') }}" 
                        required 
                        autocomplete="asal_surat" 
                        autofocus
                        placeholder="Asal Surat">
                    @error('asal_surat')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="px-4 py-2">
                    <label for="no_surat" class="block text-gray-600 text-sm font-bold mb-2">
                        No Surat
                    </label>
                    <input 
                        id="no_surat" 
                        type="text" 
                        class="border border-gray-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('no_surat') is-invalid @enderror" 
                        name="no_surat" 
                        value="{{ old('no_surat') }}" 
                        required
                        placeholder="No Surat">
                    @error('no_surat')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="px-4 py-2">
                    <label for="indeks" class="block text-gray-600 text-sm font-bold mb-2">
                        Indeks
                    </label>
                    <input 
                        id="indeks" 
                        type="text" 
                        class="border border-gray-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('indeks') is-invalid @enderror" 
                        name="indeks" 
                        value="{{ old('indeks') }}" 
                        required 
                        placeholder="Indeks">
                    @error('indeks')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="px-4 py-2">
                    <label for="sifat_surat" class="block text-gray-600 text-sm font-bold mb-3">
                        Sifat Surat
                    </label>
                    
                    <div class="relative">
                        <select 
                            class="js-example-basic-single @error('sifat_surat') is-invalid @enderror" 
                            id="sifat_surat" 
                            name="sifat_surat"
                            data-placeholder="Sifat Surat"
                            style="width: 100%;" 
                        >
                            @foreach ($sifat_surat as $surat)
                                <option value="{{ $surat->id }}">
                                    {{ $surat->name }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                    @error('sifat_surat')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="px-4 py-2">
                    <label for="tanggal_surat" class="block text-gray-600 text-sm font-bold mb-2">
                        Tanggal Surat
                    </label>
                    <input 
                        id="tanggal_surat" 
                        type="date" 
                        class="border border-gray-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('tanggal_surat') is-invalid @enderror" 
                        name="tanggal_surat"
                        value="{{ old('tanggal_surat') }}" 
                        required>
                    @error('tanggal_surat')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="px-4 py-2">
                    <label for="tanggal_masuk" class="block text-gray-600 text-sm font-bold mb-2">
                        Tanggal Masuk
                    </label>
                    <input 
                        id="tanggal_masuk" 
                        type="date" 
                        class="border border-gray-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('tanggal_masuk') is-invalid @enderror"
                        name="tanggal_masuk"
                        value="{{ old('tanggal_masuk') }}" 
                        required>
                    @error('tanggal_masuk')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

            </div>
        </div>
        
        <div class="mb-4 pb-2 border-b">  
            <div class="grid grid-cols-1 mb-4">

                <div class="px-4 py-2">
                    <label for="perihal" class="block text-gray-600 text-sm font-bold mb-2">
                        Perihal
                    </label>
                    <textarea
                        id="perihal" 
                        class="border border-gray-500 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:shadow-outline @error('perihal') is-invalid @enderror" 
                        name="perihal" 
                        placeholder="Perihal">{{ old('perihal') }}</textarea>

                    @error('perihal')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
        
                <div class="px-4 py-2">
                    <label for="file" class="block text-gray-600 text-sm font-bold mb-2">
                        Lampiran
                    </label>
                    <input 
                        id="file" 
                        type="file" 
                        class="shadow rounded w-full md:w-1/2 lg:w-1/2 py-2 px-3 text-gray-700 focus:shadow-outline @error('file') is-invalid @enderror" 
                        name="file"
                        alt="Lampiran">
                    @error('file')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

            </div>
        </div>

        <div class="px-4 py-2">
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