@extends ('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3>Data Pemesanan Obat</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>tanggal</title>
                                <th>nama</th>
                                <th>nama obat</th>
                                <th>jumlah</th>
                                <th>total harga</th>
                                <th>metode pembayaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($obats as $obat)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $obat->tanggal }}</td>
                                    <td>{{ $obat->nama }}</td>
                                    <td>{{ $obat->nama_obat }}</td>
                                    <td>{{ $obat->jumlah }}</td>
                                    <td>{{ $obat->total_harga }}</td>
                                    <td>
                                        @foreach ($obat->kategoris as $kategori)
                                            {{ $kategori->Kategori_name }}
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ route('obat_edit', $obat->id) }}"><button>Edit</button></a>
                                        <form action="{{ route('obat_delete', $obat->id) }}" method="POST">
                                            {{ @csrf_field() }}
                                            @method ('DELETE')
                                            {{-- <a type="submit" href="#">Delete</a> --}}
                                            <input type="submit" value="delete">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
