<tr class="border-b">
    <td class="px-4 py-2">
        {{ $surat->asal_surat }}
    </td>
    <td class="px-4 py-2">
        {{ $surat->no_surat }}
    </td>
    <td class="px-4 py-2">
        {{ $surat->tanggal_surat }}
    </td>
    <td class="px-4 py-2">
        {{ $surat->tanggal_masuk }}
    </td>
    {{-- <td class="px-4 py-2">
        <small class="rounded-md text-white px-1 {{ $surat->verifikasi == 0 ? 'bg-red-400' : 'bg-green-400' }}">
            <i>{{ $surat->getVerifikasi() }}</i>
        </small>
    </td> --}}

    <td class="px-4 py-2 text-white text-sm">
        <div class="flex w-auto items-center">
            <a href="{{ route('surat_masuk.show', $surat->id) }}" class="text-sm bg-teal-500 rounded px-2 mr-2">
                <i class="w-4" data-feather="eye"></i>
            </a>
            
            <a href="{{ route('surat_masuk.edit', $surat->id) }}" class="text-sm bg-blue-500 rounded px-2 mr-2">
                <i class="w-4" data-feather="edit"></i>
            </a>

            <form action="{{ route('surat_masuk.destroy', $surat->id) }}" method="POST" class="flex">
                @csrf
                @method('DELETE')

                <button type="submit" name="submit" class="bg-red-600 rounded px-2">
                    <i class="w-4" data-feather="trash-2"></i>
                </button>
            </form>
        </div>
    </td>

</tr>