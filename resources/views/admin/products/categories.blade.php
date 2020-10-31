@extends('admin.layout.base')

@section('title', 'Product Category')

@section('content')

    <div class="category">
        <div class="row expanded">
            <h1>Product Category</h1>
        </div>

        <div class="row expanded">
            <div class="small-12 medium-6 column">
                <form action="" method="POST">
                    <div class="input-group">
                        <input type="text" class="input-group-field" placeholder="Search by name">
                        <div class="input-group-button">
                            <input type="submit" value="Search" class="button">
                        </div>
                    </div>
                </form>
            </div>

            <div class="small-12 medium-5 end column">
                <form action="/admin/product/categories" method="POST">
                    <div class="input-group">
                        <input type="text" name="name" class="input-group-field" placeholder="Category Name">
                        <input type="hidden" name="token" value="{{ \App\Classes\CSRFToken::_token() }}">
                        <div class="input-group-button">
                            <input type="submit" value="Create" class="button">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row expanded">
            <div class="small-12 medium-11 column">
                @if (count($categories))
                <table class="hover">
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>{{ $category->created_at->toFormattedDateString() }}</td>
                            <td width="100" class="text-right">
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <h3>You have not created any category</h3>
                @endif
            </div>
        </div>
    </div>

@endsection