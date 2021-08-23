@extends('layouts.index')

@include("partials.flash")

@section('content')
<div class="container">
    <form action="membres" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Image:</label>
        <input type="file" name="src">
        <label for="">Nom:</label>
        <input type="text" name="nom">
        <label for="">Age:</label>
        <input type="text" name="age">
        <label for="">Genre:</label>
        <select id="" name="genre">
            @foreach ($Genre as $item)
            <option value="{{$item->genre}}" >{{$item->genre}}</option>
            @endforeach
        </select>
        <button class='btn btn-success'>Validate</button>
    </form>
</div>

@endsection
