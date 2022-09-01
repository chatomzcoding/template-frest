<x-frest-layout menu="Data List">
    <x-slot name="header">
        <x-header judul="Data Gadget" icon="car" active="{{ $gadget->nama }}">
        </x-header>
    </x-slot>
    {{-- content --}}
    <div class="card">
        <div class="card-header">
                <a href="{{ url('gadget') }}" class="btn btn-secondary btn-sm"><i class="fas fa-angle-left"></i> Kembali</a>
        </div>
    </div>

</x-frest-layout>