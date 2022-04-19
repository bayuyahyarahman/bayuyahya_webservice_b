@extends('tema.master')

@section('judul', 'Tugas')
@section('isi')
         
        <div class="row mt-5">
            <div class="col-10" style="margin-left:auto;margin-right:auto" border="1">
                <div class="card">
                    <div class="card-header bg-success d-flex justify-content-between">
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
                               <th> Aksi </th>
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
               <td>
                  <a  class="btn btn-warning" href="{{ route('bayu.edit')}}"> edit</a>
               <form action="{{ route('bayu.destroy', $bayu->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                       
                        <button type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Anda Yakin ?')"
                        >Hapus</button>
                    </form>
        
        
               </td>
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