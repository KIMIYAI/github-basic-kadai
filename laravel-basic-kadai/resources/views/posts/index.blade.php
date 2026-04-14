<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <h1>投稿一覧</h1>

        <table>
       <tr>
           <th>商品名</th>
           <th>価格</th>
       </tr>
       @foreach($posts as $post)
           <tr>
               <td>{{ $post->title }}</td>
               <td>{{ $post->content }}</td>
           </tr>            
       @endforeach       
   </table>
      
    </body>
</html>
