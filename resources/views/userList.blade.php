@extends('template')

@section('content')

<div class="container-fluid">

    @if($penggunas->isEmpty())
        <h1>Harap Maaf, tiada pengguna berdaftar</h1>
    @else
        <table class="table table-striped table-light table-hover text-center table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th class="align-top">Gambar</th>
                    <th class="align-top">IC</th>
                    <th class="align-top">Nama</th>
                    <th class="align-top">Umur</th>
                    <th class="align-top">Jantina</th>
                    <th class="align-top">Tindakan</th>
                
                </tr>
            </thead>
            <tbody>
                @foreach ($penggunas as $key=>$pengguna)
                <tr>
                    <td class="text-center">
                        @if(isset($pengguna->gambar))                      
                            <img class="img-responsive rounded-circle" src="{{asset('storage/img/'.$pengguna->gambar)}}" alt="contact_pic" width="50vw" height="auto">                     
                        @else
                            <img class="img-responsive rounded-circle" src="{{asset('/img/default.png')}}" alt="User" width="50vw" height="auto">
                        @endif
                    </td>
                    <td>{{$pengguna->ic}}</td>
                    <td>{{$pengguna->nama}}</td>
                    <td>{{$pengguna->umur}}</td>
                    <td>{{$pengguna->jantina}}</td>
                    <td>
                        <a href="{{route('userUbah',$pengguna)}}" class="btn btn-primary">Kemaskini</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <a href="{{route('userAdd')}}" class="btn btn-primary">Daftar Pengguna</a>
    <a href="{{route('userStat')}}" class="btn btn-success">Statistik Jantina</a>

</div>
    
@endsection