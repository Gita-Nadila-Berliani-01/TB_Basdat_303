@extends('layout.master')

@section('content')
    <div class="kiri-section-wrapper">
        <div class="artikel-title-section">
            @foreach ($obats as $obat)
                <a href="#" class="artikel-title">
                    <div class=artikel-content>
                        <div>
                            <img class="fit-img" src="{{ asset('img/batman.jpg') }}" alt="">
                        </div>
                        <div class="artikel-detail">
                            <span style="font-size: large; font-weight: bold">{{ $obat->title }}</span>
                            <div style="font-size: small; font-style: italic">{{ $obat->created_at }} oleh
                                {{ $obat->author }}</div>
                            <div style="font-size: small; font-style: italic">
                                @foreach ($obat->kategoris as $kategori)
                                    {{ $kategori->Kategori_name }},
                                @endforeach
                            </div>
                            <div>{{ $obat->deskripsi }}</div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
@stop
