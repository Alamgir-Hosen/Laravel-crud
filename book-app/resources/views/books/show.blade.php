@extends('layout')

@section('page-content')
<h1>Bookstore</h1>
<table class="table table-striped table-bordered">

        <tr>
            <th>ID</th>
            <td>{{$book->id}}</td>
         </tr>

         <tr>
            <th>Title</th>
            <td>{{$book->title}}</td>
         </tr>

         <tr>
            <th>Author</th>
            <td>{{$book->author}}</td>
         </tr>
         <tr>
            <th>Price</th>
            <td>{{$book->price}}</td>
         </tr>
         <tr>
            <th>Isbn</th>
            <td>{{$book->isbn}}</td>
         </tr>
         <tr>
            <th>Stock</th>
            <td>{{$book->stock}}</td>
         </tr>
         
    </table>
    <p>
     <a class="btn btn-primary" href="{{route ('books.index')}} " role="button"> <i class="bi bi-arrow-left-circle"></i>Go Back</a>
     <a class="btn btn-danger" href="{{route ('books.edit', $book->id)}} " role="button"> <i class="bi bi-pencil-square"></i>Edit</a>
    </p>
@endsection