@if (isset($setting->logo))
    <div class="form-group row">
        <label for="logo" class="col-sm-2 col-form-label">Логотип <br> <span class="badge badge-danger">240x80</span></label>
        <div style="background: rgba(14,14,14,0.50)" class="col-sm-10"><img style="width: 100%; max-width: 240px; max-height: 80px"
                                    src="{{asset($setting->logo)}}" alt="{{$setting->title}}"></div>
    </div>
@endif
<div class="form-group row">
    <label for="logo" class="col-sm-2 col-form-label">Новое изображение <br> <span class="badge badge-danger">240x80</span></label>
    <input type="file" class="form-control-file col-sm-10" name="logo" @if (!isset($setting->logo))
    required
        @endif>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
</div>
<hr>
<div class="form-group row">
    <label for="inputTitle" class="col-sm-2 col-form-label">Заголовок</label>
    <div class="col-sm-10">
        <input type="text" name="title" class="form-control" id="inputTitle" value="{{$setting->title ?? ""}}" required>
    </div>
</div>
<div class="form-group row">
    <label for="inputDescription" class="col-sm-2 col-form-label">Описание</label>
    <div class="col-sm-10">
        <input type="text" name="description" class="form-control" id="inputDescription"
               value="{{$setting->description ?? ""}}" required>
    </div>
</div>
<hr>
@if (isset($setting->og_image))
    <div class="form-group row">
        <label for="og_image" class="col-sm-2 col-form-label">OG изображение</label>
        <div style="background: rgba(14,14,14,0.50)" class="col-sm-10"><img style="width: 100%; max-width: 600px; max-height: 600px"
                                    src="{{asset($setting->og_image)}}" alt="{{$setting->title}}"></div>
    </div>
@endif
<div class="form-group row">
    <label for="image" class="col-sm-2 col-form-label">Новое изображение <br> <span class="badge badge-danger">600x600</span></label>
    <input type="file" class="form-control-file col-sm-10" name="og_image" @if (!isset($setting->og_image))
    required
        @endif>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
</div>
<hr>
<div class="form-group row">
    <label for="inputKeywords" class="col-sm-2 col-form-label">Ключевые слова<br><span class="badge badge-danger">(через запятую)</span></label>
    <div class="col-sm-10">
        <input type="text" name="keywords" class="form-control" id="inputKeywords" value="{{$setting->keywords ?? ""}}" required>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-success">Сохранить</button>
    </div>
</div>
