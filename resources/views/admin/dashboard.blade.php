@extends('admin.layout.base')

@section('title', 'Dashboard')

@section('content')

    <div class="dashboard">
        <div class="row expanded">
            <h1>Dashboard</h1>
            <form action="/admin" method="post" enctype="multipart/form-data">
                <input type="text" name="product" value="testing">
                <input type="file" name="image">
                <input type="submit" value="Go" name="submit">
            </form>
        </div>
    </div>

@endsection