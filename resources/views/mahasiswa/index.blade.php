@extends('template.master')

@section('isi')
         <h1>Data Mahasiswa</h1>
         <table class="table table-hover table bordered">
         <thead>
         <tr>
             <th> No </th>
             <th> NIK </th>
             <th> Nama dosen </th>
             <th> Umur </th>
             <th> Aksi </th>
         </thead>
         <tbody>
             @foreach ($data_mahasiswa as $row)
             <tr>
               <td> {{$loop->iteration}} </td>
               <td> {{$row->nik}} </td>
               <td> {{$row->nama_dosen}}</td>
               <td> {{$row->umur}} </td>
               
             </tr>
             @endforeach

         </tbody>
     </table>
@endsection