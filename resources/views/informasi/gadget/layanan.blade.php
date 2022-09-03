<x-frest-layout>

{{-- layanan --}}
<form action="" method="get">
    <div class="row text-center">

        {{-- content 1 --}}
        <div class="col-6 me-0">

            {{-- select 1 --}}
            <div class="form-group mb-4">
                <label for="">Smartphone 1 {!! ui_req() !!}</label>
                <select name="gadget1" id="" class="form-control" onchange="this.form.submit()">

                @forelse ($layanan as $item)

                    <option value={{ $item->id }} 
                            @if (!is_null($gadget1) AND $gadget1->id == $item->id)
                                selected
                            @endif
                            >
                        {{ ucwords($item->nama) }}
                    </option>
                    
                @empty
                    <option value="">
                        belum ada data 
                    </option>
                            
                @endforelse

                </select>
            </div>
            {{-- select 1 END --}}
            {{-- gadget 1 --}}
            <div class="col">
                @if (is_null($gadget1))
                    Belum ada hp
                @else
                    <div class="card h-100">
                        <div class="row mt-3">
                            <div class="col-4"></div>
                            <div class="col-4">
                                <img src="{{ asset('/img/informasi/gadget/'.$gadget1->gambar) }}" class="card-img-top img-fluid" alt="meizu-18s-pro">
                            </div>
                            <div class="col-4"></div>
                        </div>
            
                        <div class="card-body ">
                            <h5 class="card-title">{{ $gadget1->nama }}</h5>
                            <p>Brand: {{ $gadget1->kategori }}</p>
                            {{-- <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> --}}
                            {{-- <p class="card-text">{{ ucwords($item->nama) }}</p> --}}
                        </div>
            
                        <ul class="list-group list-group-flush mx-2 mb-2">
                            <li class="list-group-item border-top">Layar</li>``
                            <li class="list-group-item list-group-item-secondary">{{ $gadget1->layar }}</li>
                            <li class="list-group-item">Chipset</li>
                            <li class="list-group-item list-group-item-secondary">{{ $gadget1->chipset }}</li>
                            <li class="list-group-item">OS</li>
                            <li class="list-group-item list-group-item-secondary">{{ $gadget1->os }}</li>
                            <li class="list-group-item">GPU</li>
                            <li class="list-group-item list-group-item-secondary">{{ $gadget1->gpu }}</li>
                            <li class="list-group-item">CPU</li>
                            <li class="list-group-item list-group-item-secondary">{{ $gadget1->cpu }}</li>
                            <li class="list-group-item">RAM</li>
                            <li class="list-group-item list-group-item-secondary">{{ $gadget1->ram }}</li>
                            <li class="list-group-item">Memori Internal</li>
                            <li class="list-group-item list-group-item-secondary">{{ $gadget1->memori_internal }}</li>
                            <li class="list-group-item">Memori Eksternal</li>
                            <li class="list-group-item list-group-item-secondary">{{ $gadget1->memori_eksternal }}</li>
                            <li class="list-group-item">Kamera Belakang</li>
                            <li class="list-group-item list-group-item-secondary">{{ $gadget1->kamera_belakang }}</li>
                            <li class="list-group-item">Kamera Depan</li>
                            <li class="list-group-item list-group-item-secondary">{{ $gadget1->kamera_depan }}</li>
                            <li class="list-group-item">Baterai</li>
                            <li class="list-group-item list-group-item-secondary">{{ $gadget1->baterai }}</li>
                        </ul>
            
                        {{-- <div class="card-body">
                            <a href="/posts/{{ $post->slug }}" class="card-link btn btn-primary">Read more..</a>
                            <small>
                                <p class="card-text text-end"><small class="text-muted">Terakhir di update {{ $post->created_at->diffForHumans() }}</small></p>
                            </small>
                        </div> --}}
                    </div>
                @endif
            </div>
            {{-- gadget 1 END --}}

        </div>
        {{-- content 1 END --}}

        {{-- content 2 --}}
        <div class="col-6">

            {{-- select 2 --}}
            <div class="form-group mb-4">
                <label for="">Smartphone 2 {!! ui_req() !!}</label>
                <select name="gadget2" id="" class="form-control" onchange="this.form.submit()">

                @forelse ($layanan as $item)

                    <option value={{ $item->id }} 
                            @if (!is_null($gadget2) AND $gadget2->id == $item->id)
                                selected
                            @endif
                            >
                        {{ ucwords($item->nama) }}
                    </option>
                    
                @empty
                    <option value="">
                        belum ada data 
                    </option>
                            
                @endforelse

                </select>
            </div>
            {{-- select 2 END --}}
            {{-- gadget 2 --}}
            <div class="col">
                @if (is_null($gadget2))
                    Belum ada hp
                @else
                
                    <div class="card h-100">
            
                        <div class="row mt-3">
                            <div class="col-4"></div>
                            <div class="col-4">
                                <img src="{{ asset('/img/informasi/gadget/'.$gadget2->gambar) }}" class="card-img-top img-fluid" alt="meizu-18s-pro">
                            </div>
                            <div class="col-4"></div>
                        </div>
            
                        <div class="card-body ">
                                <h5 class="card-title">{{ $gadget2->nama }}</h5>
                                <p>Brand: {{ $gadget2->kategori }}</p>
                                {{-- <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> --}}
                            {{-- <p class="card-text">{{ ucwords($item->nama) }}</p> --}}
                        </div>
            
                        <ul class="list-group list-group-flush mx-2 mb-2">
                            <li class="list-group-item border-top">Layar</li>
                            <li class="list-group-item list-group-item-secondary">{{ $gadget2->layar }}</li>
                            <li class="list-group-item">Chipset</li>
                            <li class="list-group-item list-group-item-secondary">{{ $gadget2->chipset }}</li>
                            <li class="list-group-item">OS</li>
                            <li class="list-group-item list-group-item-secondary">{{ $gadget2->os }}</li>
                            <li class="list-group-item">GPU</li>
                            <li class="list-group-item list-group-item-secondary">{{ $gadget2->gpu }}</li>
                            <li class="list-group-item">CPU</li>
                            <li class="list-group-item list-group-item-secondary">{{ $gadget2->cpu }}</li>
                            <li class="list-group-item">RAM</li>
                            <li class="list-group-item list-group-item-secondary">{{ $gadget2->ram }}</li>
                            <li class="list-group-item">Memori Internal</li>
                            <li class="list-group-item list-group-item-secondary">{{ $gadget2->memori_internal }}</li>
                            <li class="list-group-item">Memori Eksternal</li>
                            <li class="list-group-item list-group-item-secondary">{{ $gadget2->memori_eksternal }}</li>
                            <li class="list-group-item">Kamera Belakang</li>
                            <li class="list-group-item list-group-item-secondary">{{ $gadget2->kamera_belakang }}</li>
                            <li class="list-group-item">Kamera Depan</li>
                            <li class="list-group-item list-group-item-secondary">{{ $gadget2->kamera_depan }}</li>
                            <li class="list-group-item">Baterai</li>
                            <li class="list-group-item list-group-item-secondary">{{ $gadget2->baterai }}</li>
                        </ul>
            
                        {{-- <div class="card-body">
                            <a href="/posts/{{ $post->slug }}" class="card-link btn btn-primary">Read more..</a>
                            <small>
                                <p class="card-text text-end"><small class="text-muted">Terakhir di update {{ $post->created_at->diffForHumans() }}</small></p>
                            </small>
                        </div> --}}
                    </div>
                @endif
            </div>
            {{-- gadget 2 END --}}

        </div>
        {{-- content 2 --}}

    </div>
</form>
{{-- layanan END --}}

</x-frest-layout>