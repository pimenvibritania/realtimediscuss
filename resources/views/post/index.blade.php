@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                <form action="{{route('posts.store')}}" method="post">
                  {{csrf_field()}}
                  <div class="input-group">
                     <input type="text" name="body" class="form-control" placeholder="Whats On Your Mind...?">
                     <span class="input-group-btn">
                        <button type="submit" class="btn btn-outline-danger"> Send</button>
                     </span>
                  </div>
               </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
