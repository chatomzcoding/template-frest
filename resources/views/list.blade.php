<x-frest-layout menu="Data List">
    <x-slot name="header">
        <x-header judul="Data Inventaris" icon="car" active="Daftar Inventaris">
        </x-header>
    </x-slot>
    {{-- content --}}
    <div class="card">
        <div class="card-header">
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambah"><i class="fas fa-plus"></i> Tambah Data</button>
        </div>
            <table id="example" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="10%">Aksi</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <x-aksi :id="1" link="inventaris"></x-aksi>
                        </td>
                        <td>Alex Sandreas</td>
                        <td>nama dari amerika</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <x-aksi :id="1" link="inventaris"></x-aksi>
                        </td>
                        <td>Vivi Kamelia</td>
                        <td>nama dari indonesia</td>
                    </tr>
                </tbody>
            </table>
    </div>
     {{-- modal --}}
        <x-modalsimpan id="tambah" link="inventaris" judul="tambah inventaris">
            <section>
                <div class="form-group">
                    <label for="">Nama Inventaris {!! ui_req() !!}</label>
                    <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
                </div>
                <div class="form-group">
                    <label for="">Jumlah {!! ui_req() !!}</label>
                    <input type="number" name="jumlah" class="form-control" value="{{ old('jumlah') }}" required>
                </div>
                <div class="form-group">
                    <label for="">Kondisi {!! ui_req() !!}</label>
                    <select name="kondisi" id="" class="form-control">
                        <option value="baik">BAIK</option>
                        <option value="rusak">RUSAK</option>
                        <option value="perbaikan">PERBAIKAN</option>
                    </select>
                </div>
                {{-- <div class="form-group">
                    <label for="">Thumbnail Galeri {!! ui_req() !!}</label>
                    <input type="file" name="thumbnail" class="form-control" required>
                </div> --}}
                <div class="form-group">
                    <label for="">Keterangan</label>
                    <textarea name="keterangan" id="" cols="30" rows="4" class="form-control"></textarea>
                </div>
            </section>
        </x-modalsimpan>
</x-frest-layout>