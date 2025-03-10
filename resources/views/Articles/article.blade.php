<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div>
<form action="route('article.stor')">

@csrf
@method('POST')

<div>
    <label for="name">name</label>
    <input type="text" name="name">
</div>

<div>
    <label for="description">description</label>
    <input type="text" name="description">
</div>

<div>
    <label for="category_id">category</label>
    <select name="category_id" id="category_id">
        @foreach($categories as category)
        <option value="{{$category->category_id}}">{{$category->name}}</option>
        @endforeach
    </select>
</div>


</form>
</div>


<div>
    <table>
        <thead>
            <tr>
            <th>name</th>
            <th>description</th>
            <th> Action </th>
            </tr>
        </thead>
        <tbody>

         @foreach($articles as article)

         <tr>
            <td>{{$article->name}}</td>
            <td>{{$article->description}}</td>
            <td>
                <a href="{{route('articles.edite',$article->id)}}">edit</a>
                <a href="{{route('article.destroy',$article->id)}}">delete</a>
            </td>
         </tr>

         @endforeach

        </tbody>
    </table>
</div>
    
</body>
</html>