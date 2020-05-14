<div class="form-group row">
    <label for="inputSort" class="col-sm-2 col-form-label">Сортировка</label>
    <div class="col-sm-10">
        <input type="number" name="sort" class="form-control" id="inputSort" value="{{$slide->sort ?? $items}}" required>
        @error('sort')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>
<div class="form-group row">
    <label for="inputTitle" class="col-sm-2 col-form-label">Заголовок</label>
    <div class="col-sm-10">
        <input type="text" name="title" class="form-control" id="inputTitle" value="{{$slide->title ?? ""}}" required>
        @error('title')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>
<div class="form-group row">
    <label for="inputSlogan" class="col-sm-2 col-form-label">Подзаголовок</label>
    <div class="col-sm-10">
        <input type="text" name="slogan" class="form-control" id="inputSlogan" value="{{$slide->slogan ?? ""}}"
               required>
        @error('slogan')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>
<div class="form-group row">
    <label for="inputDescription" class="col-sm-2 col-form-label">Описание</label>
    <div class="col-sm-10">
        <input type="text" name="description" class="form-control" id="inputDescription"
               value="{{$slide->description ?? ""}}" required>
        @error('description')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>

@if (isset($slide->image))
    <div class="form-group row">
        <label for="image" class="col-sm-2 col-form-label">Текущее изображение</label>
        <div class="col-sm-10"><img style="width: 100%; max-width: 740px; max-height: 660px" src="{{asset($slide->image)}}" alt="{{$slide->title}}"></div>
    </div>
@endif
<div class="form-group row">
    <label for="image" class="col-sm-2 col-form-label">Новое изображение <br> <span class="badge badge-danger">min = 460x360<br></br>max = 920x720</span></label>
    <input type="file" class="form-control-file col-sm-10" id="image" name="image" @if (!isset($slide->image))
    required
        @endif>
    @error('image')<div class="alert alert-danger">{{$message}}</div>@enderror
</div>

@if (isset($slide->id))
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Публикация</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="published" id="published" value="1"
                           @if ($slide->published == 1) checked @endif>
                    <label class="form-check-label" for="published">
                        Опубликовано
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="published" id="unpublished" value="0"
                           @if ($slide->published == 0) checked @endif>
                    <label class="form-check-label" for="unpublished">
                        Не опубликовано
                    </label>
                </div>
            </div>
        </div>
    </fieldset>
@else
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Публикация</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="published" id="published" value=1 checked>
                    <label class="form-check-label" for="published">
                        Опубликовано
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="published" id="unpublished" value=0>
                    <label class="form-check-label" for="unpublished">
                        Не опубликовано
                    </label>
                </div>
            </div>
        </div>
    </fieldset>
@endif

<div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-success">Сохранить</button>
    </div>
</div>
