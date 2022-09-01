<x-frest-layout>
    {{-- <x-slot name="header">
    
    </x-slot> --}}
    <h2>dashboard</h2>
    <div class="row">
        @forelse ($wisata as $item)
            <div class="col-md-3">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('img/informasi/wisata/'.$item->gambar) }}" alt="Card image cap" />
                    <div class="card-body">
                    <h5 class="card-title">{{ ucwords($item->nama) }}</h5>
                    <p class="card-text">
                        {{ $item->keterangan }}
                    </p>
                    <a href="{{ url('wisata/'.$item->id) }}" class="btn btn-outline-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col">
                belum ada data
            </div>            
        @endforelse
    </div>
</x-frest-layout>
