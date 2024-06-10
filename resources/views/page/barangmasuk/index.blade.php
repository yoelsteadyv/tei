<x-layout title="Barang Masuk">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="page-heading">
        <h3>Barang Masuk</h3>
    </div>
    <section class="section">
        <div class="card">

            <div class="card-body">
                <div class="d-flex justify-content-end mb-3 me-2">
                    <a href="/barangmasuk/tambah" type="button" id="btn-tambah-data" class="btn btn-outline-success"><i
                            class="bi bi-plus"></i>
                        Tambah Data
                    </a>
                    {{-- <a href="/" type="button" id="btn-tambah-data" class="btn btn-outline-success"
                        data-bs-toggle="modal" data-bs-target="#defaultSize-tambahd"><i class="bi bi-plus"></i>
                        Tambah Data
                    </a> --}}
                </div>
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Masuk</th>
                            <th>Kode Barang Masuk</th>
                            <th>Kode Barang</th>
                            <th>Supplier</th>
                            <th>Barang</th>
                            <th>Jumlah Masuk</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang_masuk as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->tgl_masuk }}</td>
                                <td>{{ $item->kode_barang_masuk }}</td>
                                <td>{{ $item->kode_barang }}</td>
                                <td>{{ $item->supplier }}</td>
                                <td>{{ $item->barang }}</td>
                                <td>{{ $item->jumlah_masuk }}</td>
                                <td>
                                    <div class="d-flex gap-2 ">
                                        <button data-bs-toggle="modal" id="btn-edit-data"
                                            data-bs-target="#defaultSize-edit-{{ $item->id }}"
                                            class="btn icon btn-sm btn-warning btn-edit"><i
                                                class="bi bi-pencil-square"></i></button>

                                        <form action="{{ url('/barangmasuk/' . $item->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn icon btn-sm btn-danger"><i
                                                    class="bi bi-trash"></i></button>
                                            {{-- <button><i class="btn bi bi-trash text-danger fs-5"></i></button> --}}
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>



        @include('page.barangmasuk.edit')


    </section>


</x-layout>
