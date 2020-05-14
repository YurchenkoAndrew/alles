
<div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Имя Фамилия</label>
    <div class="col-sm-10">
        <input type="text" name="name" class="form-control" id="inputName" value="{{$whoWeAreItem->name ?? ""}}" required>
        @error('name')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>

@if (isset($whoWeAreItem->image))
    <div class="form-group row">
        <label for="image" class="col-sm-2 col-form-label">Текущее изображение</label>
        <div><img style="width: 100%; max-width: 400px; max-height: 400px" src="{{asset($whoWeAreItem->image)}}" alt="{{$whoWeAreItem->name}}"></div>
    </div>
@endif
<div class="form-group row">
    <label for="image" class="col-sm-2 col-form-label">Новое изображение <br> <span class="badge badge-danger">400x400</span></label>
    <input type="file" class="form-control-file col-sm-10" id="image" name="image" @if (!isset($whoWeAreItem->image))
    required
        @endif>
    @error('image')<div class="alert alert-danger">{{$message}}</div>@enderror
</div>


<div class="form-group row">
    <label for="inputProfession" class="col-sm-2 col-form-label">Специальность</label>
    <div class="col-sm-10">
        <input type="text" name="profession" class="form-control" id="inputProfession"
               value="{{$whoWeAreItem->profession ?? ""}}" required>
        @error('profession')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>


<div class="form-group row">
    <label for="inputDescription" class="col-sm-2 col-form-label">Описание</label>
    <div class="col-sm-10">
        <input type="text" name="description" class="form-control" id="inputDescription"
               value="{{$whoWeAreItem->description ?? ""}}" required>
        @error('description')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>

<div class="form-group row">
    <label for="inputFacebook" class="col-sm-2 col-form-label">Facebook</label>
    <div class="col-sm-10">
        <input type="text" name="facebook" class="form-control" id="inputFacebook"
               value="{{$whoWeAreItem->facebook ?? ""}}" required>
        @error('facebook')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>

<div class="form-group row">
    <label for="inputInstagram" class="col-sm-2 col-form-label">Instagram</label>
    <div class="col-sm-10">
        <input type="text" name="instagram" class="form-control" id="inputInstagram"
               value="{{$whoWeAreItem->instagram ?? ""}}" required>
        @error('instagram')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>

<div class="form-group row">
    <label for="inputVkontakte" class="col-sm-2 col-form-label">Вконтакте</label>
    <div class="col-sm-10">
        <input type="text" name="vkontakte" class="form-control" id="inputVkontakte"
               value="{{$whoWeAreItem->vkontakte ?? ""}}" required>
        @error('vkontakte')<div class="alert alert-danger">{{$message}}</div>@enderror
    </div>
</div>




<div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-success">Сохранить</button>
    </div>
</div>
