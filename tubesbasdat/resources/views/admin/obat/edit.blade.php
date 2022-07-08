@extends('admin.layout.master')

@section('content')
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-12">
                <h4 class="page-title">Update Pemesanan Obat </h4>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <form class="form-horizontal form-material" method="POST" action="{{ route('obat_update', $id) }}">
                        {{ @csrf_field() }}
                        @method ('PUT')
                        <div class="form-group">
                            <label class="col-md-12">Tanggal</label>
                            {{$id}}
                            <div class="col-md-12">
                                <input name="tanggal" value = "{{$obat->tanggal}}" type="text" placeholder="Masukkan Tanggal"
                                    class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Nama</label>
                            <div class="col-md-12">
                                <input name="nama" value = "{{$obat->nama}}" type="text" placeholder="Masukkan Nama"
                                    class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Nama Obat</label>
                            <div class="col-md-12">
                                <input name="nama_obat" value = "{{$obat->nama_obat}}" type="text" placeholder="Masukkan Nama Obat"
                                    class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Jumlah</label>
                            <div class="col-md-12">
                                <input name="jumlah" value = "{{$obat->jumlah}}" type="text" placeholder="Masukkan Jumlah"
                                    class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Total Harga</label>
                            <div class="col-md-12">
                                <input name="total_harga" value = "{{$obat->total_harga}}" type="text" placeholder="Total Harga"
                                    class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Metode Pembayaran</label>
                            <div class="col-sm-12">
                                <select id='metode_pembayaran' class="form-control form-control-line" name="kategoris[]"
                                    multiple="multiple">
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}"@foreach($obat->kategoris as $obat_kategori){{$kategori-> id == $obat_kategori->id ? 'selected': ''}}   @endforeach>{{ $kategori->Kategori_name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="submit" class="btn btn-success" value="Update">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    @endsection
    @section('tambah-script')
        <script>
            $(document).ready(function() {
                $('#metode_pembayaran').select2();
            });
        </script>
    @endsection
