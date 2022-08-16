<div class="modal fade" id="{{ $id }}" tabindex="{{ $index }}" aria-hidden="true">
    <div class="modal-dialog {{ $size }}" role="document">
      <div class="modal-content">
        <form action="{{ route($link.'.update','id') }}" method="post" enctype="multipart/form-data">
        
            @csrf
            @method('patch')
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">{{ $judul }}</h5>
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
            ></button>
            </div>
            <div class="modal-body">
                @if (is_null($nilaiid))
                    <input type="hidden" name="id" id="id">
                @endif
                {{ $slot ?? '' }}
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                TUTUP
            </button>
            <button type="submit" class="btn btn-primary">SIMPAN PERUBAHAN</button>
            </div>
        </form>
      </div>
    </div>
  </div>