<x-app>

<div class="container">
    
    <div class="mb-6 p-2 rounded w-auto border-b">
        <p class="text-gray-500 italic">
            <small>Created at {{ $surat->created_at->diffForHumans() }}</small>
        </p>
    </div>
    
    <div class="w-full text-gray-600 text-sm">
        
        <iframe src="{{ url('files/' . $surat->file) }}" width="600" height="500"></iframe>
        {{-- <object data="{{ 'https://drive.google.com/file/d/1srdOPxHPBillBHvWwe4rS-AC0lBqMqf3/preview' }}" type=""></object> --}}

    </div>

</div>

</x-app>