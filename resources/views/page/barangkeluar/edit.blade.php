@foreach ($barang_keluar as $item)
    <!--Default size Modal -->
    <div class="modal fade text-left" id="defaultSize-edit-{{ $item->id }}" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel18" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel18">Edit Barang Keluar</h4>
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
                                            <form action="{{ url('/barangkeluar/' . $item->id) }}" method="POST"
                                                class="form" data-parsley-validate>
                                                @csrf
                                                @method('put')
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column" class="form-label">
                                                                Kode Barang Keluar</label>
                                                            <div class="form-group ">
                                                                <input disabled type="text" class="form-control"
                                                                    value="{{ $item->kode_barang_keluar }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="tanggal-barang-keluar" class="form-label">
                                                                Tanggal Barang Keluar</label>
                                                            <div class="form-group ">
                                                                <input type="date"
                                                                    class="form-control flatpickr-no-config"
                                                                    placeholder="{{ $item->tgl_keluar }}"
                                                                    data-parsley-required="true"
                                                                    value="{{ $item->tgl_keluar }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="customer" class="form-label">
                                                                Customer</label>
                                                            <div class="form-group">
                                                                <select class="choices form-select" name="customer"
                                                                    data-parsley-required="true">
                                                                    <option hidden value="{{ $item->customer }}">
                                                                        {{ $item->customer }}</option>
                                                                    @foreach ($customer as $item)
                                                                        <option value="{{ $item->nama_customer }}">
                                                                            {{ $item->nama_customer }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="tujuan" class="form-label">Alamat
                                                                Tujuan</label>
                                                            <textarea readonly class="form-control" id="tujuan" rows="3">{{ $item->tujuan }}</textarea>
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
                                                            <label for="jumlah_keluar" class="form-label">
                                                                Jumlah Keluar</label>
                                                            <input type="number" id="jumlah_keluar"
                                                                class="form-control"
                                                                value="{{ $item->jumlah_keluar }}"
                                                                name="jumlah_keluar" data-parsley-required="true" />
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
@endforeach
