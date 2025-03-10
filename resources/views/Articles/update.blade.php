<div>
<form action="route('article.update')">

@csrf
@method('POST')

<div>
    <label for="name">name</label>
    <input type="text" name="name" value="{{$article->name}}">
</div>

<div>
    <label for="description">description</label>
    <input type="text" name="description" value="{{$article->description}}">
</div>

<div>
    <label for="category_id">category</label>
    <select name="category_id" id="category_id">
    <option value="{{$article->category_id}}">{{$article->category->name}}</option>

        @foreach($categories as category)
        <option value="{{$category->category_id}}">{{$category->name}}</option>
        @endforeach
    </select>
</div>


</form>
</div>