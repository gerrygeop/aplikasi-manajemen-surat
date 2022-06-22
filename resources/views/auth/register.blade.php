<x-master>

<div class="w-full max-w-lg m-auto mt-8">
    
    <form method="POST" action="{{ route('register') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf

        <div class="mb-4">

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
                <p class="text-red-500 text-xs italic">
                    {{ $message }}
                </p>
            @enderror
            
        </div>

        <div class="mb-4">

            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                E-Mail
            </label>

            
            <input 
                id="email" 
                type="email" 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror" 
                name="email" 
                value="{{ old('email') }}" 
                required 
                autocomplete="email" 
                autofocus
                placeholder="E-Mail Address" 
            >

            @error('email')
                <p class="text-red-500 text-xs italic">
                    {{ $message }}
                </p>
            @enderror
            
        </div>
        
        <div class="w-full flex flex-wrap">
            
            <div class="mb-4 md:w-1/2 pr-3">

                <label for="jabatan" class="block text-gray-700 text-sm font-bold mb-2">
                    Jabatan
                </label>

                
                <input 
                    id="jabatan" 
                    type="text" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('jabatan') is-invalid @enderror" 
                    name="jabatan" 
                    value="{{ old('jabatan') }}" 
                    required 
                    autocomplete="jabatan" 
                    autofocus
                    placeholder="Jabatan" 
                >

                @error('jabatan')
                    <p class="text-red-500 text-xs italic">
                        {{ $message }}
                    </p>
                @enderror
                
            </div>

            <div class="mb-4 md:w-1/2">

                <label for="nip" class="block text-gray-700 text-sm font-bold mb-2">
                    NIP
                </label>

                
                <input 
                    id="nip" 
                    type="number" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('nip') is-invalid @enderror" 
                    name="nip" 
                    value="{{ old('nip') }}" 
                    required 
                    autocomplete="nip" 
                    autofocus
                    placeholder="NIP" 
                >

                @error('nip')
                    <p class="text-red-500 text-xs italic">
                        {{ $message }}
                    </p>
                @enderror
                
            </div>

        </div>

        <div class="mb-4">

            <label for="username" class="block text-gray-700 text-sm font-bold mb-2">
                {{ __('Username') }}
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
                <p class="text-red-500 text-xs italic">
                    {{ $message }}
                </p>
            @enderror
            
        </div>

        <div class="mb-4">

            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                {{ __('Password') }}
            </label>

        
            <input 
                id="password" 
                type="password" 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror" 
                name="password" 
                required 
                autocomplete="new-password"
                placeholder="Password" 
            >

            @error('password')
                <p class="text-red-500 text-xs italic">
                    {{ $message }}
                </p>
            @enderror
            
        </div>

        <div class="mb-8">

            <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">
                {{ __('Confirm Password') }}
            </label>

            <input 
                id="password-confirm" 
                type="password" 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                name="password_confirmation" 
                required 
                autocomplete="new-password"
                placeholder="Confirm Password" 
            >
            
        </div>

        
        <div class="mb-1">
            <button 
                type="submit" 
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            >
                {{ __('Register') }}
            </button>
        </div>
        
    </form>
                
</div>

</x-master>