@foreach ($satuan_brg as $item)
    <!--Default size Modal -->
    <div class="modal fade text-left" id="defaultSize-edit-{{ $item->id }}" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel18" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel18">Edit Satuan</h4>
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
                                            <form action="{{ url('/satuanbarang/' . $item->id) }}" method="POST"
                                                class="form" data-parsley-validate>
                                                @csrf
                                                @method('put')
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="satuan_barang" class="form-label">Satuan
                                                                Barang</label>
                                                            <input type="text" id="satuan_barang"
                                                                class="form-control"
                                                                placeholder="{{ $item->satuan_barang }}"
                                                                name="satuan_barang" data-parsley-required="true" />
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="keterangan"
                                                                class="form-label">Keterangan</label>
                                                            <textarea class="form-control" placeholder="{{ $item->keterangan }}" name="keterangan" id="keterangan" rows="3"></textarea>
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
