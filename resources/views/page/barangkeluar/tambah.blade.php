<!--Default size Modal -->



<x-layout title="Barang Keluar">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="page-heading">
        <h3>Barang Keluar</h3>
    </div>
    <section class="section">
        <div class="card">

            <div class="card-content">
                <div class="card-body">
                    <form id="user-tambah" action="{{ url('/barangkeluar') }}" method="POST" class="form"
                        data-parsley-validate>
                        @csrf
                        <div class="row">

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="kode_barang_keluar" class="form-label">
                                        Kode Barang Keluar</label>
                                    <div class="form-group ">
                                        <input readonly type="text" name="kode_barang_keluar" class="form-control"
                                            value="KBK-{{ rand(1000000000, 9999999999) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mandatory">
                                    <label for="tgl_keluar class="form-label">
                                        Tanggal Barang Keluar</label>
                                    <div class="form-group ">
                                        <input type="date" name="tgl_keluar" class="form-control flatpickr-no-config"
                                            placeholder="Select date.." data-parsley-required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mandatory">
                                    <label for="customer" class="form-label">
                                        Customer</label>
                                    <div class="form-group">
                                        <select class="choices form-select" id="customer" name="customer"
                                            data-parsley-required="true">
                                            <option hidden value="">Pilih Customer</option>
                                            @foreach ($customer as $item)
                                                <option value="{{ $item->nama_customer }}">
                                                    {{ $item->nama_customer }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mandatory">
                                    <label for="tujuan" class="form-label">Tujuan</label>
                                    <textarea readonly class="form-control" id="tujuan" name="tujuan" rows="3" data-parsley-required="true"></textarea>
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
                                    <input readonly class="form-control" name="barang" id="nama_barang"
                                        value="" />
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
                                    <label for="jumlah_keluar" class="form-label">
                                        Jumlah keluar</label>
                                    <input type="number" id="jumlah_keluar" class="form-control" placeholder=""
                                        name="jumlah_keluar" data-parsley-required="true" />
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

        @include('page.barangkeluar.tambah')
        @include('page.barangkeluar.edit')
    </section>
</x-layout>





{{-- <div class="modal fade text-left" id="defaultSize-tambah" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel18" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel18">Tambah Barang Keluar</h4>
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
                                        <form id="user-tambah" action="{{ url('/barangkeluar') }}" method="POST"
                                            class="form" data-parsley-validate>
                                            @csrf
                                            <div class="row">

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="kode_barang_keluar" class="form-label">
                                                            Kode Barang Keluar</label>
                                                        <div class="form-group ">
                                                            <input readonly type="text" name="kode_barang_keluar"
                                                                class="form-control"
                                                                value="KBK-{{ rand(1000000000, 9999999999) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="tgl_keluar class="form-label">
                                                            Tanggal Barang Keluar</label>
                                                        <div class="form-group ">
                                                            <input type="date" name="tgl_keluar"
                                                                class="form-control flatpickr-no-config"
                                                                placeholder="Select date.."
                                                                data-parsley-required="true">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="customer" class="form-label">
                                                            Customer</label>
                                                        <div class="form-group">
                                                            <select class="choices form-select" id="customer"
                                                                name="customer" data-parsley-required="true">
                                                                <option hidden value="">Pilih Customer</option>
                                                                @foreach ($customer as $item)
                                                                    <option value="{{ $item->nama_customer }}">
                                                                        {{ $item->nama_customer }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="tujuan" class="form-label">Tujuan</label>
                                                        <textarea readonly class="form-control" id="tujuan" name="tujuan" rows="3" data-parsley-required="true"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="kode_barang" class="form-label">
                                                            Kode Barang</label>
                                                        <div class="form-group ">
                                                            <select class="choices form-select" id="kode_barang"
                                                                name="kode_barang" data-parsley-required="true">
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
                                                        <input readonly class="form-control" name="barang"
                                                            id="nama_barang" value="" />
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
                                                        <label for="jumlah_keluar" class="form-label">
                                                            Jumlah keluar</label>
                                                        <input type="number" id="jumlah_keluar" class="form-control"
                                                            placeholder="" name="jumlah_keluar"
                                                            data-parsley-required="true" />
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
</div> --}}
<script type="text/javascript">
    $(document).ready(function() {
        // Handle customer change
        $('#customer').change(function() {
            var customer = $(this).val();

            if (customer) {
                $.ajax({
                    url: '/maincustomer/' + customer,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        console.log(data);
                        if (data) {
                            $('#tujuan').val(data.alamat);
                        } else {
                            $('#tujuan').val('');
                        }
                    },
                    error: function() {
                        $('#tujuan').val('');
                    }
                });
            } else {
                $('#tujuan').val('');
            }
        });

        // Handle kode_barang change
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
</script>
