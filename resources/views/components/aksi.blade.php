<form id="data-{{ $nilaiid }}" action="{{url($link,$id)}}" method="post">
    @csrf
    @method('delete')
</form>

@if ($type == "dropdown")
    <div class="dropdown d-inline-block">
        <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary btn-sm">Aksi</button>
        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
            <ul class="nav flex-column">
                <li class="nav-item-header nav-item">Pilih Aksi</li>
                @if (!is_null($detail))
                    <li class="nav-item"><a href="{{ url($detail) }}" class="nav-link">Detail</a></li>
                @endif
                {{ $slot }}
                {{-- <li class="nav-item-header nav-item">My Account</li>
                <div class="ml-auto badge badge-pill badge-iznfo">8</div>
                <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Messages
                    <div class="ml-auto badge badge-warning">512</div>
                </a></li>
                <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Logs</a></li>
                <li class="nav-item-divider nav-item"></li> --}}
                <li class="nav-item-divider nav-item"></li>
                <li class="nav-item-btn nav-item">
                    <button class="btn-wide btn-shadow btn btn-danger btn-sm" onclick="deleteRow( {{ $nilaiid }} )">Hapus</button>
                </li>
                
            </ul>
        </div>
    </div>
@else
    <section>
        @if (!is_null($detail))
            <a href="{{ url($detail) }}" class="btn-shadow btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
        @endif
        {{ $slot ?? '' }}
        <button class="btn-shadow btn btn-danger btn-sm" onclick="deleteRow( {{ $nilaiid }} )"><i class="bi bi-trash"></i></button>
    </section>    
@endif