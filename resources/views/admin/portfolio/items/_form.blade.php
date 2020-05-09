{{--input portfolio_id--}}
<div class="form-group row">
    <label for="filter" class="col-sm-2 col-form-label">Категория</label>
    <div class="col-sm-10">
        <select class="form-control" id="portfolio_id" name="portfolio_id">
            @foreach ($filters as $filter)
                <option value="{{$filter->id ?? ""}}"
                        @isset($portfolioItem->portfolio_id)
                        @if ($portfolioItem->portfolio_id == $filter->id)
                        selected
                    @endif
                    @endisset
                >{{$filter->filter_name}}</option>
            @endforeach
        </select>
    </div>
</div>
{{--input sort--}}
<div class="form-group row">
    <label for="inputSort" class="col-sm-2 col-form-label">Сортировка</label>
    <div class="col-sm-10">
        <input type="number" name="sort" class="form-control" id="inputSort" value="{{$portfolioItem->sort ?? $count}}"
               required>
    </div>
</div>
{{--isset image--}}
@if (isset($portfolioItem->image))
    <div class="form-group row">
        <label for="image" class="col-sm-2 col-form-label">Текущее изображение</label>
        <div><img style="width: 100%; max-width: 640px; max-height: 400px" src="{{asset($portfolioItem->image)}}"
                  alt="{{$portfolioItem->title}}"></div>
    </div>
@endif
{{--input image--}}
<div class="form-group row">
    <label for="image" class="col-sm-2 col-form-label">Новое изображение</label>
    <input type="file" class="form-control-file col-sm-10" id="image" name="image" @if (!isset($portfolioItem->image))
    required
        @endif>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
</div>
{{--inout title--}}
<div class="form-group row">
    <label for="inputTitle" class="col-sm-2 col-form-label">Заголовок</label>
    <div class="col-sm-10">
        <input type="text" name="title" class="form-control" id="inputTitle"
               value="{{$portfolioItem->title ?? ""}}" required>
    </div>
</div>
{{--input description--}}
<div class="form-group row">
    <label for="inputDescription" class="col-sm-2 col-form-label">Описание</label>
    <div class="col-sm-10">
        <textarea type="text" name="description" class="form-control" id="inputDescription" rows="3"
                  required>{{$portfolioItem->description ?? ""}}</textarea>
    </div>
</div>
{{--input published--}}
@if (isset($portfolioItem->id))
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Публикация</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="published" id="published" value="1"
                           @if ($portfolioItem->published == 1) checked @endif>
                    <label class="form-check-label" for="published">
                        Опубликовано
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="published" id="unpublished" value="0"
                           @if ($portfolioItem->published == 0) checked @endif>
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
{{--input submit--}}
<div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-success">Сохранить</button>
    </div>
</div>
