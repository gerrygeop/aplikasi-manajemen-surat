<div class="contianer text-white">
	<div class="text-xl text-indigo-600 font-semibold py-4 mb-6 border-b">
        Super Admin
    </div>

	<div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-4 items-center">

	 	<div class="shadow p-2 bg-teal-400 rounded">
	 		<div class="flex items-center bg-teal-500 rounded px-6 p-3">
		 		<i class="w-8 mr-2" data-feather="users"></i>
	 			<h1 class="mr-2 text-xl font-bold">{{ $users->count() }}</h1>
	 			<p class="text-base"><i>Pengguna</i></p>
	 		</div>
	 		
	 	</div>
	 	<div class="shadow p-2 bg-orange-400 rounded">
	 		<div class="flex items-center bg-orange-500 rounded px-6 py-3">
	 			<i class="w-8 mr-2" data-feather="mail"></i>
		 		<h1 class="mr-2 text-xl font-bold">{{ $surat->count() }}</h1>
		 		<p class="text-base"><i>Surat Masuk</i></p>
	 		</div>
	 	</div>
	 	<div class="shadow p-2 bg-purple-400 rounded">
	 		<div class="flex items-center bg-purple-500 rounded px-6 p-3">
	 			<i class="w-8 mr-2" data-feather="bookmark"></i>
		 		<h1 class="mr-2 text-xl font-bold">{{ $class->count() }}</h1>
		 		<p class="text-base"><i>Klasifikasi</i></p>
	 		</div>
	 	</div>
	 	
	</div>

</div>
