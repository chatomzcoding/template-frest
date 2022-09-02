<x-frest-layout>
    {{-- <x-slot name="header">
    
    </x-slot> --}}
    <h2>dashboard</h2>
    <div class="row">

        {{-- @foreach ($gadget as $item)
            <div class="col-md-3 col-6 mb-4">

                <div class="card">
                    <div class="position-absolute px-2 py-1 text-white" style="background-color: rgba(0, 0, 0, 0.6)">
                        <a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">
                            {{ $post->category->name }}
                        </a>
                    </div>
                    <img src="/img/{{ $post->slug }}.jpg" class="card-img-top img-fluid" alt="{{ $post->category->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p>Brand: <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                        <p class="card-text">{{ $post->excerpt }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Prosesor: {{ $post->body }}</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="/posts/{{ $post->slug }}" class="card-link btn btn-primary">Read more..</a>
                        <small>
                            <p class="card-text text-end"><small class="text-muted">Terakhir di update {{ $post->created_at->diffForHumans() }}</small></p>
                        </small>
                    </div>
                </div>

            </div>
        @endforeach --}}

        @forelse ($gadget as $item)
            <div class="col-md-3">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('img/informasi/gadget/'.$item->gambar) }}" alt="Card image cap"/>
                    <div class="card-body">
                    <h5 class="card-title">{{ ucwords($item->nama) }}</h5>
                    <p class="card-text">
                        {{ $item->keterangan }}
                    </p>
                    <a href="{{ url('gadget/'.$item->id) }}" class="btn btn-outline-primary">Selengkapnya</a>
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
