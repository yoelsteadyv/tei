<x-layout title="Stok">
    <div class="page-heading">
        <h3>Stok</h3>
    </div>
    <section class="section">
        <div class="card">

            <div class="card-body">

                <table class="table table-striped" id="table1">
                    <div class="d-lg-flex gap-1">
                        <div class="col-12 pb-2 col-lg-4 ">
                            <div class="input-group mandatory">
                                {{-- <label for="harga-barang" class="form-label">
                                    Filter</label> --}}
                                <input type="date" class="form-control flatpickr-range" placeholder="Select date..">
                                <button class="btn btn-outline-warning" type="button" id="button-addon2"><i
                                        class="bi bi-funnel"></i>
                                    Filter</button>
                            </div>
                        </div>
                        <div class="">
                            {{-- <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                                data-bs-target="#defaultSize-tambah"><i class="bi bi-funnel"></i>
                                Filter
                            </button> --}}
                            <button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
                                data-bs-target="#defaultSize-tambah"><i class="bi bi-printer"></i>
                                Print
                            </button>
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                data-bs-target="#defaultSize-tambah"><i class="bi bi-filetype-pdf"></i>
                                PDF
                            </button>
                        </div>
                    </div>

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Barang</th>
                            <th>Jumlah Masuk</th>
                            <th>Jumlah Keluar</th>
                            <th>Total Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>BRG-{{ rand(1000000000, 9999999999) }}</td>
                            <td>RM 04 J A 33 OHM</td>
                            <td>200</td>
                            <td>150</td>
                            <td>{{ 200 - 150 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>BRG-{{ rand(1000000000, 9999999999) }}</td>
                            <td>RM 87 L K 20 OHM</td>
                            <td>350</td>
                            <td>150</td>
                            <td>{{ 350 - 150 }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </section>
</x-layout>
