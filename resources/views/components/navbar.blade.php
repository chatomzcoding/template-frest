<div class="card mb-2">
    <div class="card-header p-2">
        @if (!is_null($kembali))
            <a href="{{ url($kembali) }}" class="btn btn-outline-secondary btn-sm"><i class="bi bi-arrow-left"></i></a>
        @endif
        @if (!is_null($tambah))
            @if (isset($tambah['link']))
                <a href="{{ url($tambah['link']) }}" class="btn btn-outline-primary btn-sm"><i class="bi bi-plus-circle"></i></a>
            @else
                <a href="javascript:void(0)" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambah"><i class="bi bi-plus-circle"></i></a>
            @endif
        @endif
    {{ $slot ?? '' }}
    </div>
</div>