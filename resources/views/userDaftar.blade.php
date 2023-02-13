@extends('template')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Daftar Pengguna</h1>
            <hr>
            <form action="{{route('userDaftar')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="ic">No. Kad Pengenalan</label>
                    <input type="text" name="ic" id="ic" class="form-control @error('ic') is-invalid @enderror" value="{{old('ic')}}">
                        {!!$errors->first('ic','<span class="invalid-feedback">:message</span>')!!}
                    <!-- <span class="invalid-feedback">Ruangan wajib di isi</span> -->
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama')}}">
                        {!!$errors->first('nama','<span class="invalid-feedback">:message</span>')!!}
                    <!-- <span class="invalid-feedback">Ruangan wajib di isi</span> -->
                </div>
                
                <div class="form-group">
                    <label for="gambar">Sila pilih gambar profil anda :</label>
                    <br>
                    <input type="file" name="gambar" id="gambar" class="@error('gambar') is-invalid @enderror">
                    {{-- <span class="invalid-feedback">Oops.. Fail gambar tidak boleh melebihi 100kb. Sila cuba semula</span> --}}
                    {!!$errors->first('gambar','<span class="invalid-feedback">:message</span>')!!}
                    
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection