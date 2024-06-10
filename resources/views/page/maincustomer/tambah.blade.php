<!--Default size Modal -->
<div class="modal fade text-left" id="defaultSize-tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel18"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel18">Tambah Customer</h4>
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
                                        <form id="user-tambah" action="{{ url('/maincustomer') }}" method="POST"
                                            class="form" data-parsley-validate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="kode_customer" class="form-label">
                                                            Kode Customer</label>
                                                        <div class="form-group ">
                                                            <input readonly type="text" name="kode_customer"
                                                                class="form-control"
                                                                value="KP-{{ rand(1000000000, 9999999999) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="nama-customer" class="form-label">
                                                            Nama Customer</label>
                                                        <input type="text" id="nama-customer" class="form-control"
                                                            placeholder="" name="nama_customer"
                                                            data-parsley-required="true" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="telepon" class="form-label">
                                                            Telepon</label>
                                                        <input type="text" id="telepon" class="form-control"
                                                            placeholder="" name="telepon"
                                                            data-parsley-required="true" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="alamat" class="form-label">Alamat</label>
                                                        <textarea class="form-control" id="alamat-customer" name="alamat" rows="3" data-parsley-required="true"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="email" class="form-label">
                                                            Email</label>
                                                        <input type="email" id="email" class="form-control"
                                                            placeholder="" name="email"
                                                            data-parsley-required="true" />
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="person" class="form-label">
                                                            Person</label>
                                                        <input type="text" id="person" class="form-control"
                                                            placeholder="" name="person"
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
</div>
