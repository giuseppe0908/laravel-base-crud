<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="{{route('comic.update',['comic'=>$comic->id])}}" method="post">
      @csrf
      @method('PATCH')
      <input type="text" name="title" value="{{$comic->title}}">
      <input type="text" name="description" value="{{$comic->description}}">
      <input type="text" name="thumb" value="{{$comic->thumb}}">
      <input type="text" name="price" value="{{$comic->price}}" >
      <input type="text" name="series" value="{{$comic->series}}" >
      <input type="text" name="sale_date" value="{{$comic->sale_date}}" >
      <input type="text" name="type" value="{{$comic->type}}" >

      <input type="submit" name="" value="invia">
    </form>
  </body>
</html>
