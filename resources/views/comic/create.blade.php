<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="{{route('comic.store')}}" method="post">
      @csrf
      @method('POST')
      <input type="text" name="title" value="" placeholder="title">
      <input type="text" name="description" value="" placeholder="description">
      <input type="text" name="thumb" value="" placeholder="thumb">
      <input type="text" name="price" value="" placeholder="price">
      <input type="text" name="series" value="" placeholder="series">
      <input type="text" name="sale_date" value="" placeholder="sale_date">
      <input type="text" name="type" value="" placeholder="type">

      <input type="submit" name="" value="invia">
    </form>
  </body>
</html>
