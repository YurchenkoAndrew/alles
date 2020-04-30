<div class="form-group row">
    <label for="inputSort" class="col-sm-2 col-form-label">Сортировка</label>
    <div class="col-sm-10">
        <input type="number" name="sort" class="form-control" id="inputSort" value="{{$commentItem->sort ?? ""}}" required>
    </div>
</div>
<div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Заголовок</label>
    <div class="col-sm-10">
        <input type="text" name="name" class="form-control" id="inputName" value="{{$commentItem->name ?? ""}}" required>
    </div>
</div>
<div class="form-group row">
    <label for="inputCustomer" class="col-sm-2 col-form-label">Отношения</label>
    <div class="col-sm-10">
        <input type="text" name="customer" class="form-control" id="inputCustomer" value="{{$commentItem->customer ?? ""}}"
               required>
    </div>
</div>

@if (isset($commentItem->image))
    <div class="form-group row">
        <label for="image" class="col-sm-2 col-form-label">Текущее изображение</label>
        <div class="col-sm-10"><img style="width: 100%; max-width: 200px; max-height: 200px" src="{{asset($commentItem->image)}}" alt="{{$commentItem->name}}"></div>
    </div>
@endif
<div class="form-group row">
    <label for="image" class="col-sm-2 col-form-label">Новое изображение</label>
    <input type="file" class="form-control-file col-sm-10" id="image" name="image" @if (!isset($commentItem->image))
    required
        @endif>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
</div>

<div class="form-group row">
    <label for="inputDescription" class="col-sm-2 col-form-label">Описание</label>
    <div class="col-sm-10">
        <textarea type="text" name="description" class="form-control" id="inputDescription" rows="5" required>{{$commentItem->description ?? ""}}</textarea>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-success">Сохранить</button>
    </div>
</div>
