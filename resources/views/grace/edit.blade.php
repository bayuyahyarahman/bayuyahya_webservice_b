@extends('tema.master')

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
                        <form action="{{ url('edit-data')}}/{{( $data->id) }}" method="post">
                            @method('put')
                            @csrf
                        
                            <div class="form-group">
                                <label for="author"> author </label>
                                <input type="author" id="author" name="author" class="form-control" value="{{old('author', $data->author}}">
                            </div>

                            <div class="form-group">
                                <label for="title"> Title </label>
                                <input type="text" id="title" name="title" class="form-control" value="{{old('title', $data->title}} ">
                            </div>

                            <div class="form-group">
                                <label for="body"> Body </label>
                                <textarea name="body" id="boy" cols="40" rows="2" class="form-control"  value="{{old('body', $data->body}} "></textarea>
                            </div>

                            <div class="form-group">
                                <label for="keyword"> Keyword </label>
                                <input type="keyword" id="keyword" name="keyword" class="form-control" value="{{old('keyword', $data->keyword}} ">
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