<x-frest-layout menu="Data List">
    <x-slot name="header">
        <x-header judul="Data Wisata" icon="car" active="{{ $wisata->nama }}">
        </x-header>
    </x-slot>
    {{-- content --}}
    <div class="card">
        <div class="card-header">
                <a href="{{ url('wisata') }}" class="btn btn-secondary btn-sm"><i class="fas fa-angle-left"></i> Kembali</a>
        </div>
    </div>

</x-frest-layout>