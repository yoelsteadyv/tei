<x-layout title="Barang">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="page-heading">
        <h3>Barang</h3>
    </div>
    <section class="section">
        <div class="card">

            <div class="card-body">
                <div class="d-flex justify-content-end mb-3 me-2">
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                        data-bs-target="#defaultSize-tambah"><i class="bi bi-plus"></i>
                        Tambah Data
                    </button>
                </div>
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jenis</th>
                            <th>Satuan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $item)
                            <tr>
                                <td>{{ $item->kode_barang }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->jenis_barang }}</td>
                                <td>{{ $item->satuan }}</td>
                                <td>
                                    <div class="d-flex gap-2 ">
                                        <button data-bs-toggle="modal"
                                            data-bs-target="#defaultSize-edit-{{ $item->id }}"
                                            class="btn icon btn-sm btn-warning"><i
                                                class="bi bi-pencil-square"></i></button>

                                        <form action="{{ url('/barang/' . $item->id) }}" method="POST">
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

        @include('page.masterbarang.barang.tambah')
        @include('page.masterbarang.barang.edit')
    </section>
</x-layout>
