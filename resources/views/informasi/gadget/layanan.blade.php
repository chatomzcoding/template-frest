<x-frest-layout>
    {{-- <x-slot name="header">
    
    </x-slot> --}}

    {{-- @foreach ($gadget as $item)
    @endforeach --}}

    <div class="col-md-3 col-6 mb-4">

        <div class="card h-100">

            <div class="position-absolute px-2 py-1 text-white" style="background-color: rgba(0, 0, 0, 0.6)">
                {{-- <a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">
                </a> --}}
                Smartphone
            </div>

            <img src="/img/informasi/gadget/1662046756_meizu-18s-pro.jpg" class="card-img-top img-fluid" alt="meizu-18s-pro">

            <div class="card-body">
                <h5 class="card-title">Meizu 18s Pro</h5>
                <p>Brand: Meizu
                    {{-- <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> --}}
                </p>
                {{-- <p class="card-text">{{ ucwords($item->nama) }}</p> --}}
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">Prosesor: </li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
            </ul>

            {{-- <div class="card-body">
                <a href="/posts/{{ $post->slug }}" class="card-link btn btn-primary">Read more..</a>
                <small>
                    <p class="card-text text-end"><small class="text-muted">Terakhir di update {{ $post->created_at->diffForHumans() }}</small></p>
                </small>
            </div> --}}

        </div>

    </div>

</x-frest-layout>