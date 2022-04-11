@extends('template.master')

@section('isi')
     <h1> Data Mahasiswa</h1>

     <table class="table table-hover table bordered">
         <thead>
         <tr>
             <th> No </th>
             <th> NIK </th>
             <th> Nama </th>
             <th> Umur </th>
             <th> Aksi </th>
         </tr>
         </thead>
         <tbody>
             @foreach ($data_mahasiswa as $row)
             <tr>
               <td> {{$loop->iteration}} </td>
               <td> {{$row->nik}} </td>
               <td></td>
               <td></td>
             </tr>
             @endforeach

         </tbody>
     </table>