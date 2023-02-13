@extends('template')

@section('content')

<div class="container-fluid">
    <div class="col-4 ml-auto mr-auto">
        <table class="table table-striped table-light table-hover text-center table-bordered">
            <thead class="thead-dark text-center">
                <tr>
                    <th class="align-top">Jantina</th>
                    <th class="align-top">Bilangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Lelaki</td>
                    <td>{{$lelaki}}</td>
                </tr>
                <tr>
                    <td>Perempuan</td>
                    <td>{{$perempuan}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
    
@endsection