<x-app>

<div class="w-full">
    
    <div class="text-indigo-500 font-medium py-1 mb-4 border-b">
        <i>Tambah User</i>
    </div>

    <form method="POST" action="{{ route('users.store') }}" class="bg-gray-200 rounded px-8 pt-6 pb-8 mb-4">
        @csrf

        <div class="w-full flex flex-wrap">
            <div class="mb-4 md:w-1/2 pr-3">

                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                    Nama
                </label>

                <input 
                    id="name" 
                    type="text" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') is-invalid @enderror" 
                    name="name" 
                    value="{{ old('name') }}" 
                    required 
                    autocomplete="name" 
                    autofocus
                    placeholder="Nama" 
                >

                @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                
            </div>
            
            <div class="mb-4 md:w-1/2">
                <label for="nip" class="block text-gray-700 text-sm font-bold mb-2">
                    NIP
                </label>

                <input 
                    id="nip" 
                    type="number" 
                    class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    name="nip"
                    value="{{ old('nip') }}" 
                    required 
                    autocomplete="nip" 
                    placeholder="NIP" 
                >

                @error('nip')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                
            </div>
        </div>
        
        <div class="w-full flex flex-wrap">
            <div class="mb-4 md:w-1/2 pr-3">
                <label for="bidang" class="block text-gray-700 text-sm font-bold mb-2">
                    Bidang
                </label>

                <select 
                    class="shadow rounded lg:w-full p-2 rounded focus:outline-none focus:shadow-outline" 
                    id="bidang" 
                    name="bidang"
                >
                    <option>-Pilih Bidang-</option>
                    @foreach($bidang as $bid)
                        <option value="{{$bid->id}}">
                            {{ $bid->nama_bidang }}
                        </option>
                    @endforeach
                </select>

                @error('bidang')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 md:w-1/2">
                <label for="roles" class="block text-gray-700 text-sm font-bold mb-2">
                    Jabatan
                </label>
                
                <select 
                    class="shadow rounded lg:w-full p-2 rounded focus:outline-none focus:shadow-outline" 
                    id="roles" 
                    name="roles"
                >
                    @foreach($roles as $role)
                        <option value="{{$role->id}}">
                            {{ $role->role_name }}
                        </option>
                    @endforeach

                </select>

                @error('roles')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="w-full flex flex-wrap">
            <div class="mb-4 md:w-1/2 pr-3">

                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">
                    Username
                </label>

                <input 
                    id="username" 
                    type="text" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('username') is-invalid @enderror" 
                    name="username" 
                    value="{{ old('username') }}" 
                    required 
                    autocomplete="username"
                    placeholder="Username" 
                >

                @error('username')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                
            </div>
        </div>

        <div class="mb-4">

            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                Password
            </label>

            <input 
                id="password" 
                type="password" 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror" 
                name="password" 
                required 
                placeholder="Password" 
            >

            @error('password')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
            
        </div>

        <div class="mb-8">

            <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">
                Confirm Password
            </label>

            <input 
                id="password-confirm" 
                type="password" 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                name="password_confirmation" 
                required 
                placeholder="Confirm Password" 
            >
            
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