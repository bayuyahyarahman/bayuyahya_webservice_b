@extends('tema.master')
@section('judul', 'add Bayu')
@section('isi')
         
        <div class="row mt-4">
            <div class="col-7">
                <div class="card">
                    <div class="card-header  d-flex justify-content-between">
                        Data Blog
                    <a class="btn btn-sm btn-info float-right"
                     href="{{ url('bayu') }}">
                     <i class="fa-solid fa-hand-point-left"></i> Back</a>
                     </div>
                    <div class="card-body">
                        <form action="{{ route('bayu.store') }}" method="post">
                            @csrf
                        
                            <div class="form-group">
                                <label> author </label>
                                <input type="author" name="author" class="form-control">
                            </div>

                            <div class="form-group">
                                <label> Title </label>
                                <input type="text" name="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label> Body </label>
                                <textarea name="body" cols="40" rows="2" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label> Keyword </label>
                                <input type="keyword" name="keyword" class="form-control">
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