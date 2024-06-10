@foreach ($barang as $item)
    <!--Default size Modal -->
    <div class="modal fade text-left" id="defaultSize-edit-{{ $item->id }}" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel18" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel18">Edit Barang</h4>
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
                                            <form action="{{ url('/barang/' . $item->id) }}" method="POST"
                                                class="form" data-parsley-validate>
                                                @csrf
                                                @method('put')
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="kode_barang" class="form-label">
                                                                Kode Barang</label>
                                                            <div class="form-group ">
                                                                <input readonly type="text" name="kode_barang"
                                                                    class="form-control"
                                                                    value="{{ $item->kode_barang }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="nama_barang" class="form-label">
                                                                Nama Barang</label>
                                                            <input type="text" id="nama_barang" class="form-control"
                                                                placeholder="" name="nama_barang"
                                                                value="{{ $item->nama_barang }}"
                                                                data-parsley-required="true" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="jenis_barang" class="form-label ">
                                                                Jenis Barang</label>
                                                            <div class="form-group">
                                                                <select class="choices form-select" name="jenis_barang"
                                                                    data-parsley-required="true">
                                                                    <option hidden value="">
                                                                        {{ $item->jenis_barang }}
                                                                    </option>
                                                                    @foreach ($jenis_brg as $item)
                                                                        <option value="{{ $item->jenis_barang }}">
                                                                            {{ $item->jenis_barang }}</option>
                                                                    @endforeach
                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="satuan" class="form-label ">
                                                                Satuan</label>

                                                            <div class="form-group">
                                                                <select class="choices form-select" name="satuan"
                                                                    data-parsley-required="true">
                                                                    <option hidden value="">
                                                                        Pilih Satuan{{ $item->satuan }}
                                                                    </option>
                                                                    @foreach ($satuan_brg as $item)
                                                                        <option value="{{ $item->satuan_barang }}">
                                                                            {{ $item->satuan_barang }}</option>
                                                                    @endforeach
                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="harga" class="form-label">
                                                                Harga</label>
                                                            <input type="number" id="harga" class="form-control"
                                                                placeholder="{{ $item->harga }}" name="harga"
                                                                value="{{ $item->harga }}"
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
@endforeach
