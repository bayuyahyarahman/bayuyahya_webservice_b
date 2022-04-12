@extends('tema.master')

@section('judul', 'Tugas')
@section('isi')
         
        <div class="row mt-5">
            <div class="col-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        Data Blog
                    <a class="btn btn-sm btn-primary float-right"
                     href="{{ route('bayu.create')}}">
                     <i class="fa-solid fa-user-plus"></i> Tambah Data</a>
                     </div>
                    <div class="card-body">
                    <table class="table table-hover table bordered">
                         <thead>
                             <tr>
                               <th> ID </th>
                               <th> author </th>
                               <th> title </th>
                               <th> body </th>
                               <th> keyword </th>
                               </thead>
                            </tr>
                            <tbody>
             @foreach ($bayus as $bayu)
             <tr>
               <td> {{$loop->iteration}} </td>
               <td> {{$bayu->author}} </td>
               <td> {{$bayu->title}}</td>
               <td> {{$bayu->body}} </td>
               <td> {{$bayu->keyword}} </td>
             </tr>
             @endforeach
             @include('sweetalert::alert')
         </tbody>
     </table>
                    </div>
                </div>
            </div>
        </div>
        

@endsection