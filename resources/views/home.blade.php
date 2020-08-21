@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
               
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                    <h2>Home Page</h2>
                    @if(session("message"))
                    <!-- <p>{{ session("message") }}</p> -->
                    <div class="alert alert-success" role="alert">
                    {{ session("message") }}
                    </div>
                    @endif
                    <div>
                        <a href="/receipe/create"><button class="btn btn-success">Create</button></a>
                    </div>
                    <br>
                    @foreach($receipes as $value)
                    <a href="/receipe/{{ $value->id }}"><li>{{ $value->name }}</li></a>
                        <hr>

                    @endforeach
                    </div>
         {{ $receipes->links() }}
        </div>
    </div>
</div>
@endsection


