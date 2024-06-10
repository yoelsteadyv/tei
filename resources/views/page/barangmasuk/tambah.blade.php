<x-layout title="Tambah Barang Masuk">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="page-heading">
        <h3>Tambah Barang Masuk</h3>
    </div>
    <div class="card">

        <div class="card-content">
            <div class="card-body">
                <form id="user-tambah" action="{{ url('/barangmasuk') }}" method="POST" class="form"
                    data-parsley-validate>
                    @csrf
                    @method('POST')
                    <div class="row">

                        <div class="col-12">
                            <div class="form-group">
                                <label for="kode_barang_masuk" class="form-label">
                                    Kode Barang Masuk</label>
                                <div class="form-group ">
                                    <input readonly type="text" name="kode_barang_masuk" class="form-control"
                                        value="KBM-{{ rand(1000000000, 9999999999) }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mandatory">
                                <label for="tgl_masuk class="form-label">
                                    Tanggal Barang Masuk</label>
                                <div class="form-group ">
                                    <input type="date" name="tgl_masuk" class="form-control flatpickr-no-config"
                                        placeholder="Select date.." data-parsley-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mandatory">
                                <label for="supplier" class="form-label">
                                    Supplier</label>
                                <div class="form-group">
                                    <select class="choices form-select" name="supplier" data-parsley-required="true">
                                        <option hidden value="">Pilih Supplier
                                        </option>
                                        @foreach ($supplier as $item)
                                            <option value="{{ $item->nama_supplier }}">
                                                {{ $item->nama_supplier }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mandatory">
                                <label for="kode_barang" class="form-label">
                                    Kode Barang</label>
                                <div class="form-group ">
                                    <select class="choices form-select" id="kode_barang" name="kode_barang"
                                        data-parsley-required="true">
                                        <option hidden value="">Pilih Kode
                                            Barang</option>
                                        @foreach ($barang as $item)
                                            <option value="{{ $item->kode_barang }}">
                                                {{ $item->kode_barang }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nama_barang" class="form-label">
                                    Nama Barang</label>
                                <input readonly class="form-control" name="barang" id="nama_barang" value="" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="jenis_barang" class="form-label">
                                    Jenis</label>
                                <input readonly class="form-control" id="jenis_barang" name="jenis_barang"
                                    placeholder="" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="satuan" class="form-label">
                                    Satuan</label>
                                <input readonly class="form-control" id="satuan" name="satuan" placeholder="" />
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group mandatory">
                                <label for="jumlah_masuk" class="form-label">
                                    Jumlah Masuk</label>
                                <input type="number" id="jumlah_masuk" class="form-control" placeholder=""
                                    name="jumlah_masuk" data-parsley-required="true" />
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        var kodeBarangElement = document.getElementById('kode_barang');

        kodeBarangElement.addEventListener('change', function() {
            var kodeBarang = kodeBarangElement.value;

            if (kodeBarang) {
                var xhr = new XMLHttpRequest();
                xhr.open("GET", '/barang/' + kodeBarang, true);
                xhr.responseType = 'json';

                xhr.onload = function() {
                    if (xhr.status === 200) {
                        var data = xhr.response;
                        if (data) {
                            document.getElementById('nama_barang').value = data.nama_barang;
                            document.getElementById('jenis_barang').value = data.jenis_barang;
                            document.getElementById('satuan').value = data.satuan;
                        } else {
                            document.getElementById('nama_barang').value = '';
                            document.getElementById('jenis_barang').value = '';
                            document.getElementById('satuan').value = '';
                        }
                    } else {
                        document.getElementById('nama_barang').value = '';
                        document.getElementById('jenis_barang').value = '';
                        document.getElementById('satuan').value = '';
                    }
                };

                xhr.onerror = function() {
                    document.getElementById('nama_barang').value = '';
                    document.getElementById('jenis_barang').value = '';
                    document.getElementById('satuan').value = '';
                };

                xhr.send();
            } else {
                document.getElementById('nama_barang').value = '';
                document.getElementById('jenis_barang').value = '';
                document.getElementById('satuan').value = '';
            }
        });
    });
</script>
