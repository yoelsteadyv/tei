@foreach ($barang_masuk as $item)
    <!--Default size Modal -->
    <div id="edit-section">


        <div class="modal fade text-left" id="defaultSize-edit-{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel18" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel18">Edit Barang masuk</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <section id="multiple-column-form">
                            <div class="row match-height">
                                <div class="col-12">
                                    <div class="card">

                                        <div class="card-content">
                                            <div class="card-body">
                                                <form action="{{ url('/barangmasuk/' . $item->id) }}" method="POST"
                                                    class="form" data-parsley-validate>
                                                    @csrf
                                                    @method('put')
                                                    <div class="row">

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="kode_barang_masuk" class="form-label">
                                                                    Kode Barang Masuk</label>
                                                                <div class="form-group ">
                                                                    <input readonly type="text"
                                                                        name="kode_barang_masuk" class="form-control"
                                                                        value="{{ $item->kode_barang_masuk }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group mandatory">
                                                                <label for="tgl_masuk class="form-label">
                                                                    Tanggal Barang Masuk</label>
                                                                <div class="form-group ">
                                                                    <input type="date" name="tgl_masuk"
                                                                        class="form-control flatpickr-no-config"
                                                                        placeholder="{{ $item->tgl_masuk }}"
                                                                        data-parsley-required="true"
                                                                        value="{{ $item->tgl_masuk }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group mandatory">
                                                                <label for="supplier" class="form-label">
                                                                    Supplier</label>
                                                                <div class="form-group">
                                                                    <select class="choices form-select" name="supplier"
                                                                        data-parsley-required="true">
                                                                        <option hidden value="{{ $item->supplier }}">
                                                                            {{ $item->supplier }}</option>
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
                                                                    <select class="choices form-select" id="kode_barang"
                                                                        name="kode_barang" data-parsley-required="true">
                                                                        <option hidden value="{{ $item->kode_barang }}">
                                                                            {{ $item->kode_barang }}</option>
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
                                                                <input readonly class="form-control" name="barang"
                                                                    id="nama_barang" value="{{ $item->barang }}" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="jenis_barang" class="form-label">
                                                                    Jenis</label>
                                                                <input readonly class="form-control" id="jenis_barang"
                                                                    name="jenis_barang" placeholder="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="satuan" class="form-label">
                                                                    Satuan</label>
                                                                <input readonly class="form-control" id="satuan"
                                                                    name="satuan" placeholder="" />
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group mandatory">
                                                                <label for="jumlah_masuk" class="form-label">
                                                                    Jumlah Masuk</label>
                                                                <input type="number" id="jumlah_masuk"
                                                                    class="form-control"
                                                                    value="{{ $item->jumlah_masuk }}"
                                                                    name="jumlah_masuk"
                                                                    data-parsley-required="true" />
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                                                Submit
                                                            </button>
                                                            <button type="reset"
                                                                class="btn btn-light-secondary me-1 mb-1">
                                                                Reset
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Accept</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $('#kode_barang').change(function() {
                var kodeBarang = $(this).val();

                if (kodeBarang) {
                    $.ajax({
                        url: '/barang/' + kodeBarang,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            if (data) {
                                $('#nama_barang').val(data.nama_barang);
                                $('#jenis_barang').val(data.jenis_barang);
                                $('#satuan').val(data.satuan);
                            } else {
                                $('#nama_barang').val('');
                                $('#jenis_barang').val('');
                                $('#satuan').val('');
                            }
                        },
                        error: function() {
                            $('#nama_barang').val('');
                            $('#jenis_barang').val('');
                            $('#satuan').val('');
                        }
                    });
                } else {
                    $('#nama_barang').val('');
                    $('#jenis_barang').val('');
                    $('#satuan').val('');
                }
            });
        });
    </script> --}}
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
@endforeach
