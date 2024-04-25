<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="urf-8">
    <meta name="viweport" content="width=devide-width,initial-scale=1.0">
    <title>Laravel基礎</title>
  </head>

  <body>
    <h1>ショッピングカート</h1>

    @if(isset($product))
    <table>
      <tr>
        <th>商品名</th>
        <td>{{$product->product_name}}</td>
      </tr>
      <tr>
        <th>価格</th>
        <td>{{$product->price}}円</td>
      </tr>
    </table>

    <form action="{{route('cookies.destroy')}}" method="POST">
      @csrf
      @method('DELETE')
      <input type="submit" value="カートを空にする">
    </form>
    @else
    <p>カードの中身は空です。</p>
    @endif

    <a href="{{route('cookies.create')}}">商品選択ページ</a>
  </body>


</html>
