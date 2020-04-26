<div class="form-group row">
    <label for="inputSort" class="col-sm-2 col-form-label">Сортировка</label>
    <div class="col-sm-10">
        <input type="number" name="sort" class="form-control" id="inputSort" value="{{$portfolio->sort ?? $items}}" required>
    </div>
</div>
<div class="form-group row">
    <label for="inputTitle" class="col-sm-2 col-form-label">Заголовок</label>
    <div class="col-sm-10">
        <input type="text" name="filter_name" class="form-control" id="inputTitle" value="{{$portfolio->filter_name ?? ""}}" required>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-success">Сохранить</button>
    </div>
</div>
