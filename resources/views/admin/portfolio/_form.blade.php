<div class="form-group row">
    <label class="col-sm-2 col-form-label">Сортировка</label>
    <div class="col-sm-10">
        <input type="number" name="sort" class="form-control" value="{{$portfolio->sort ?? $items}}" required>
        @error('sort')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>
<div class="form-group row">
    <label for="inputTitle" class="col-sm-2 col-form-label">Заголовок</label>
    <div class="col-sm-10">
        <input type="text" name="filter_name" class="form-control" id="inputTitle" value="{{$portfolio->filter_name ?? ""}}" required>
        @error('filter_name')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>
<div class="form-group row">
    <label for="inputSlug" class="col-sm-2 col-form-label">Алиас</label>
    <div class="col-sm-10">
        <input type="text" name="slug" class="form-control" id="inputSlug" value="{{$portfolio->slug ?? ""}}" readonly>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-success">Сохранить</button>
    </div>
</div>
