<div class="form-group row">
    <label for="inputTitle" class="col-sm-2 col-form-label">Название</label>
    <div class="col-sm-10">
        <input type="text" name="title" class="form-control" id="inputTitle" value="{{$block->title}}" required>
    </div>
</div>
<fieldset class="form-group">
    <div class="row">
        <legend class="col-form-label col-sm-2 pt-0">Публикация</legend>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="published" id="published" value="1"
                       @if ($block->published == 1) checked @endif>
                <label class="form-check-label" for="published">
                    Опубликовано
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="published" id="unpublished" value="0"
                       @if ($block->published == 0) checked @endif>
                <label class="form-check-label" for="unpublished">
                    Не опубликовано
                </label>
            </div>
        </div>
    </div>
</fieldset><div class="form-group row">
    <label for="inputSlug" class="col-sm-2 col-form-label">Название</label>
    <div class="col-sm-10">
        <input type="text" name="slug" class="form-control" id="inputSlug" value="{{$block->slug}}" readonly>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-success">Сохранить</button>
    </div>
</div>
