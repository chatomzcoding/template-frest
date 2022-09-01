<x-frest-layout menu="Data List">
    <x-slot name="header">
        <x-header judul="Data Wisata" icon="car" active="Daftar Wisata">
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
                        <th>Nama Wisata</th>
                        <th>Alamat</th>
                        <th>Kategori</th>
                        <th>Fasilitas</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($wisata as $item)
                        <tr>
                            <td>1</td>
                            <td>
                                <x-aksi :id="1" link="inventaris"></x-aksi>
                            </td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->kategori }}</td>
                            <td>{{ $item->fasilitas }}</td>
                            <td>{{ $item->keterangan }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">belum ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
    </div>
     {{-- modal --}}
        <x-modalsimpan id="tambah" link="wisata" judul="tambah Wisata">
            <section>
                <div class="form-group">
                    <label for="">Nama Wisata {!! ui_req() !!}</label>
                    <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
                </div>
                <div class="form-group">
                    <label for="">Alamat {!! ui_req() !!}</label>
                    <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}" required>
                </div>
                <div class="form-group">
                    <label for="">Kategori {!! ui_req() !!}</label>
                    <select name="kategori" id="" class="form-control">
                        <option value="alam">ALAM</option>
                        <option value="laut">LAUT</option>
                        <option value="gunung">GUNUNG</option>
                        <option value="buatan">BUATAN</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Fasilitas {!! ui_req() !!}</label>
                    <textarea name="fasilitas" id="" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Keterangan {!! ui_req() !!}</label>
                    <textarea name="keterangan" id="" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Gambar {!! ui_req() !!}</label>
                    <input type="file" name="gambar" class="form-control" required>
                </div>
            </section>
        </x-modalsimpan>
</x-frest-layout>