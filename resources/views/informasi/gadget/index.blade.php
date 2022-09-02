<x-frest-layout menu="Data List">
    <x-slot name="header">
        <x-header judul="Data Gadget" icon="car" active="Daftar Gadget">
        </x-header>
    </x-slot>
    {{-- content --}}
    <div class="card">
        <div class="card-header">
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambah"><i class="fas fa-plus"></i> Tambah Data</button>
        </div>
        <div class="table-responsive">
            <table id="example" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="10%">Aksi</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Kategori</th>
                        <th>Layar</th>
                        <th>Chipset</th>
                        <th>OS</th>
                        <th>GPU</th>
                        <th>CPU</th>
                        <th>RAM</th>
                        <th>Memori Internal</th>
                        <th>Memori Eksternal</th>
                        <th>Kamera Belakang</th>
                        <th>Kamera Depan</th>
                        <th>Baterai</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($gadget as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <x-aksi :id="$item->id" link="gadget" detail="gadget/{{ $item->id }}">

                                    <button type="button" data-bs-toggle="modal"  
                                    data-nama="{{ $item->nama }}"  
                                    data-kategori="{{ $item->kategori }}"  
                                    data-layar="{{ $item->layar }}" 
                                    data-chipset="{{ $item->chipset }}"  
                                    data-os="{{ $item->os }}"  
                                    data-gpu="{{ $item->gpu }}" 
                                    data-cpu="{{ $item->cpu }}" 
                                    data-ram="{{ $item->ram }}" 
                                    data-memori_internal="{{ $item->memori_internal }}" 
                                    data-memori_eksternal="{{ $item->memori_eksternal }}" 
                                    data-kamera_belakang="{{ $item->kamera_belakang }}" 
                                    data-kamera_depan="{{ $item->kamera_depan }}" 
                                    data-baterai="{{ $item->baterai }}" 
                                    data-id="{{ $item->id }}" 
                                    data-bs-target="#ubah" title="" class="dropdown-item text-success" data-original-title="Edit Task">
                                        <i class="fa fa-edit" style="width: 20px;"></i> EDIT
                                    </button>

                                </x-aksi>
                            </td>
                            <td>{{ $item->nama }}</td>
                            <td><img src="{{ asset('img/informasi/gadget/'.$item->gambar) }}" width="100px" alt=""></td>
                            <td>{{ $item->kategori }}</td>
                            <td>{{ $item->layar }}</td>
                            <td>{{ $item->chipset }}</td>
                            <td>{{ $item->os }}</td>
                            <td>{{ $item->gpu }}</td>
                            <td>{{ $item->cpu }}</td>
                            <td>{{ $item->ram }}</td>
                            <td>{{ $item->memori_internal }}</td>
                            <td>{{ $item->memori_eksternal }}</td>
                            <td>{{ $item->kamera_belakang }}</td>
                            <td>{{ $item->kamera_depan }}</td>
                            <td>{{ $item->baterai }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="14" class="text-center">belum ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
     {{-- modal --}}
        <x-modalsimpan id="tambah" link="gadget" judul="tambah gadget">
            <section>
                <div class="form-group">
                    <label for="">Nama {!! ui_req() !!}</label>
                    <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
                </div>
                <div class="form-group">
                    <label for="">Kategori {!! ui_req() !!}</label>
                    <select name="kategori" id="" class="form-control">
                        <option value="vivo">vivo</option>
                        <option value="realme">realme</option>
                        <option value="samsung">samsung</option>
                        <option value="iphone">iphone</option>
                        <option value="oppo">oppo</option>
                        <option value="xiaomi">xiaomi</option>
                        <option value="sony">sony</option>
                        <option value="lenovo">lenovo</option>
                        <option value="lg">lg</option>
                        <option value="evercoss">evercoss</option>
                        <option value="huawei">huawei</option>
                        <option value="polytron">polytron</option>
                        <option value="ZTE">ZTE</option>
                        <option value="oneplus">oneplus</option>
                        <option value="meizu">meizu</option>
                        <option value="luna">luna</option>
                        <option value="Advan">Advan</option>
                        <option value="Asus">Asus</option>
                        <option value="HTC">HTC</option>
                        <option value="Lava">Lava</option>
                        <option value="Mito">Mito</option>
                        <option value="Nokia">Nokia</option>
                    </select>
                </div>
                {{-- <div class="form-group">
                    <label for="">Alamat {!! ui_req() !!}</label>
                    <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}" required>
                </div> --}}
                <div class="form-group">
                    <label for="">Layar {!! ui_req() !!}</label>
                    <textarea name="layar" id="" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Chipset {!! ui_req() !!}</label>
                    <textarea name="chipset" id="" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">OS {!! ui_req() !!}</label>
                    <textarea name="os" id="" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">GPU {!! ui_req() !!}</label>
                    <textarea name="gpu" id="" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">CPU {!! ui_req() !!}</label>
                    <textarea name="cpu" id="" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">RAM {!! ui_req() !!}</label>
                    <textarea name="ram" id="" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Memori Internal {!! ui_req() !!}</label>
                    <textarea name="memori_internal" id="" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Memori Eksternal {!! ui_req() !!}</label>
                    <textarea name="memori_eksternal" id="" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Kamera Belakang {!! ui_req() !!}</label>
                    <textarea name="kamera_belakang" id="" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Kamera Depan {!! ui_req() !!}</label>
                    <textarea name="kamera_depan" id="" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Baterai {!! ui_req() !!}</label>
                    <textarea name="baterai" id="" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Gambar {!! ui_req() !!}</label>
                    <input type="file" name="gambar" class="form-control" required>
                </div>
            </section>
        </x-modalsimpan>

        {{-- modal ubah --}}
        <x-modalubah link="gadget" judul="edit gadget">
            <section>
                <div class="form-group">
                    <label for="">Nama {!! ui_req() !!}</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" required>
                </div>
                <div class="form-group">
                    <label for="">Kategori {!! ui_req() !!}</label>
                    <select name="kategori" id="kategori" class="form-control">
                        <option value="vivo">vivo</option>
                        <option value="realme">realme</option>
                        <option value="samsung">samsung</option>
                        <option value="iphone">iphone</option>
                        <option value="oppo">oppo</option>
                        <option value="xiaomi">xiaomi</option>
                        <option value="sony">sony</option>
                        <option value="lenovo">lenovo</option>
                        <option value="lg">lg</option>
                        <option value="evercoss">evercoss</option>
                        <option value="huawei">huawei</option>
                        <option value="polytron">polytron</option>
                        <option value="ZTE">ZTE</option>
                        <option value="oneplus">oneplus</option>
                        <option value="meizu">meizu</option>
                        <option value="luna">luna</option>
                        <option value="Advan">Advan</option>
                        <option value="Asus">Asus</option>
                        <option value="HTC">HTC</option>
                        <option value="Lava">Lava</option>
                        <option value="Mito">Mito</option>
                        <option value="Nokia">Nokia</option>
                    </select>
                </div>
                {{-- <div class="form-group">
                    <label for="">Alamat {!! ui_req() !!}</label>
                    <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}" required>
                </div> --}}
                <div class="form-group">
                    <label for="">Layar {!! ui_req() !!}</label>
                    <textarea name="layar" id="layar" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Chipset {!! ui_req() !!}</label>
                    <textarea name="chipset" id="chipset" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">OS {!! ui_req() !!}</label>
                    <textarea name="os" id="os" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">GPU {!! ui_req() !!}</label>
                    <textarea name="gpu" id="gpu" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">CPU {!! ui_req() !!}</label>
                    <textarea name="cpu" id="cpu" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">RAM {!! ui_req() !!}</label>
                    <textarea name="ram" id="ram" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Memori Internal {!! ui_req() !!}</label>
                    <textarea name="memori_internal" id="memori_internal" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Memori Eksternal {!! ui_req() !!}</label>
                    <textarea name="memori_eksternal" id="memori_eksternal" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Kamera Belakang {!! ui_req() !!}</label>
                    <textarea name="kamera_belakang" id="kamera_belakang" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Kamera Depan {!! ui_req() !!}</label>
                    <textarea name="kamera_depan" id="kamera_depan" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Baterai {!! ui_req() !!}</label>
                    <textarea name="baterai" id="baterai" cols="30" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Gambar {!! ui_req() !!}</label>
                    <input type="file" name="gambar" class="form-control" required>
                </div>
            </section>
        </x-modalubah>

        <x-slot name="kodejs">
            <script>
                $('#ubah').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget)

                    var nama = button.data('nama')
                    var kategori = button.data('kategori')
                    var layar = button.data('layar')
                    var chipset = button.data('chipset')
                    var os = button.data('os')
                    var gpu = button.data('gpu')
                    var cpu = button.data('cpu')
                    var ram = button.data('ram')
                    var memori_internal = button.data('memori_internal')
                    var memori_eksternal = button.data('memori_eksternal')
                    var kamera_belakang = button.data('kamera_belakang')
                    var kamera_depan = button.data('kamera_depan')
                    var baterai = button.data('baterai')
                    
                    var id = button.data('id')

                    var modal = $(this)

                    modal.find('.modal-body #nama').val(nama);
                    modal.find('.modal-body #kategori').val(label);
                    modal.find('.modal-body #layar').val(layar);
                    modal.find('.modal-body #chipset').val(chipset);
                    modal.find('.modal-body #os').val(os);
                    modal.find('.modal-body #gpu').val(gpu);
                    modal.find('.modal-body #cpu').val(cpu);
                    modal.find('.modal-body #ram').val(ram);
                    modal.find('.modal-body #memori_internal').val(memori_internal);
                    modal.find('.modal-body #memori_eksternal').val(memori_eksternal);
                    modal.find('.modal-body #kamera_belakang').val(kamera_belakang);
                    modal.find('.modal-body #kamera_depan').val(kamera_depan);
                    modal.find('.modal-body #baterai').val(baterai);

                    modal.find('.modal-body #id').val(id);
                })
            </script>
        </x-slot>

</x-frest-layout>