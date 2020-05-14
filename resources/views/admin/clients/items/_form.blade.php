<div class="form-group row">
    <label for="inputSort" class="col-sm-2 col-form-label">Сортировка</label>
    <div class="col-sm-10">
        <input type="number" name="sort" class="form-control" id="inputSort" value="{{$clientItem->sort ?? $clientItemCount}}" required>
        @error('sort')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>
<div class="form-group row">
    <label for="inputTitle" class="col-sm-2 col-form-label">Заголовок</label>
    <div class="col-sm-10">
        <input type="text" name="title" class="form-control" id="inputTitle" value="{{$clientItem->title ?? ""}}" required>
        @error('title')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>
@if (isset($clientItem->image))
    <div class="form-group row">
        <label for="image" class="col-sm-2 col-form-label">Текущее изображение</label>
        <div class="col-sm-10"><img style="width: 100%; max-width: 400px; max-height: 200px" src="{{asset($clientItem->image)}}" alt="{{$clientItem->title}}"></div>
    </div>
@endif
<div class="form-group row">
    <label for="image" class="col-sm-2 col-form-label">Новое изображение <br> <span class="badge badge-danger">400x200</span></label>
    <input type="file" class="form-control-file col-sm-10" id="image" name="image" @if (!isset($clientItem->image))
    required
        @endif>
    @error('image')<div class="alert alert-danger">{{$message}}</div>@enderror
</div>

<div class="form-group row">
    <label for="inputLink" class="col-sm-2 col-form-label">Ссылка</label>
    <div class="col-sm-10">
        <input type="text" name="link" class="form-control" id="inputLink" value="{{$clientItem->link ?? ""}}">
        @error('link')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-success">Сохранить</button>
    </div>
</div>
