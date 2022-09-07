<x-frest-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Gadget</title>
</head>
<body>
    {{-- navbar --}}
    {{-- <div class="nav-align-top mb-2">
        <ul class="nav nav-pills mb-1 nav-fill" role="tablist">
            <li class="nav-item">
            <button
                type="button"
                class="nav-link active"
                role="tab"
                data-bs-toggle="tab"
                data-bs-target="#navs-pills-justified-home"
                aria-controls="navs-pills-justified-home"
                aria-selected="true"
            >
                <i class="tf-icons bx bx-home"></i> Home
                                     <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-danger ms-1">3</span>
            </button>
            </li>
            <li class="nav-item">
            <button
                type="button"
                class="nav-link"
                role="tab"
                data-bs-toggle="tab"
                data-bs-target="#navs-pills-justified-profile"
                aria-controls="navs-pills-justified-profile"
                aria-selected="false"
            >
                <i class="tf-icons bx bx-user"></i> Profile
            </button>
            </li>
            <li class="nav-item">
            <button
                type="button"
                class="nav-link"
                role="tab"
                data-bs-toggle="tab"
                data-bs-target="#navs-pills-justified-messages"
                aria-controls="navs-pills-justified-messages"
                aria-selected="false"
            >
                <i class="tf-icons bx bx-message-square"></i> Messages
            </button>
            </li>
        </ul>
    </div> --}}
    {{-- navbar END --}}

    {{-- main konten --}}
    <div>
        {{-- <div class="swiper-container" id="swiper-multiple-slides">
            <div class="swiper-wrapper">

                @forelse ($dashgadget as $item)
                    <div class="swiper-slide" style="">
                        <div class="row">
                            <div class="col">
                                background-image: url('{{ asset("img/informasi/gadget/".$item->gambar) }}')
                                <img src="{{ asset('img/informasi/gadget/'.$item->gambar) }}" alt="" class="img-fluid">
                            </div>
                            <div class="col">
                                <section class="text-dark small">
                                    {{ $item->nama }}
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, nobis. Libero eos unde fugit, sequi maiores ducimus neque ut voluptatibus delectus nihil quis id veritatis, aliquam, dicta eveniet tempore hic?
                                </section>
                            </div>
                        </div>
                    </div>
                @empty
                    
                @endforelse
            </div>
            <div class="swiper-pagination"></div>
        </div> --}}
        <div class="row">
            @forelse ($dashgadget as $item)
            <div class="col-6 col-md-3 mb-3">
                <div class="card h-100">
                    <div class="row mt-3">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <img src="{{ asset('/img/informasi/gadget/'.$item->gambar) }}" class="card-img-top img-fluid" alt="meizu-18s-pro">
                        </div>
                        <div class="col-4"></div>
                    </div>
        
                    <div class="card-body ">
                        <h5 class="card-title">{{ $item->nama }}</h5>
                        <p>Brand: {{ $item->kategori }}</p>
                    </div>
                </div>
            </div>
            @empty
                
            @endforelse
        </div>
    </div>
    {{-- main konten END --}}
</body>
</html>

</x-frest-layout>