@extends('template')

@section('content')

  {{-- ******************* Default laravel ************************************ --}}
    {{-- <div class="content">
        <div class="title m-b-md">
            Welcome to EduCare! <br> Your 1st choice apps
        </div>
    </div> --}}


    {{-- *********************************** DW 1************************************ --}}
    {{-- <table width="100%" border="0">
        <tr>
          <td style="height:80vh"><div align="center" class="homeStyle"><span class="homeStyle">Selamat Datang ke Laman Kami</span></div></td>
        </tr>
      </table> --}}


      {{-- ***************************************** DW 2 ********************************* --}}
      {{-- <table width="100%" border="1">
        <tr>
          <td width="50%" height="579">&nbsp;</td>
          <td width="50%">
            <div>
                <img src="{{asset('img/FAMILY_TREE_DRAF1.png')}}" width="50%" height="200%" style=""/>
            </div>
        </td>
        </tr>
      </table> --}}



      {{-- **************************** DIV STYLE ************************************* --}}

    <div style="width:100%; height:400px">
        <div style="justify-content:center; align-items:center; width:50%; height:400px;display:flex; ">
            <h1>Hello</h1>
        </div>
        <div class="center">
          <h1>TEST</h1>
        </div>

        {{-- <img src="{{asset('img/FAMILY_TREE_DRAF1.png')}}" style="float:left; width:50%; height:100%; object-fit:cover"/>
        <img src="{{asset('img/FAMILY_TREE_DRAF1.png')}}" style="float:left; width:50%; height:100%; object-fit:cover"/> --}}
    </div>
    
    
@endsection
