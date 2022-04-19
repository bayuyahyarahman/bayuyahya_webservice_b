@extends('tema.master')
@section('judul', 'add Bayu')
@section('isi')
         
        <div class="row mt-4">
            <div class="col-7" style="margin-left:auto;margin-right:auto" border="1">
                <div class="card">
                    <div class="card-header  d-flex justify-content-between" >
                        Tambah Data
                    <a class="btn btn-sm btn-info float-right"
                     href="{{ url('bayu') }}">
                     <i class="fa-solid fa-hand-point-left"></i> Back</a>
                     </div>
                    <div class="card-body">
                        <form action="{{ route('bayu.store') }}" method="post">
                            @csrf
                        
                            <div class="form-group">
                                <label for="">Author</label>
                                <input type="text" class="form-control @error('author') is-invalid @enderror" id="input" placeholder="please enter author" name="author"
                                value="{{ old('author') }}">
                                @error('author')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label> Title </label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="input" placeholder="please enter title"
                                value="{{ old('title') }}">
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label> Body </label>
                                <textarea name="body" cols="40" rows="2" class="form-control" id="input" placeholder="please enter body"></textarea >
                            </div>

                            <div class="form-group">
                                <label> Keyword </label>
                                <input type="keyword" name="keyword" class="form-control @error('keyword') is-invalid @enderror" id="input" placeholder="please enter keyword"
                                value="{{ old('keyword') }}">
                                @error('keyowrd')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <input type="Submit" class="btn btn-primary" name="submit" value="Save Data">
                            <a class ="btn btn-warning float-right " href="{{ url('bayu') }}">
                                 <i class="fas fa-backfoward"></i> Cancel
                             </a>
                         </form>
                    </div>
                </div>
            </div>
        </div>
@endsection